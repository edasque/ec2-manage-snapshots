<?php
/**
 * Modified from code by:
 * Oren Solomianik’s
 * http://orensol.com/2009/02/12/how-to-delete-those-old-ec2-ebs-snapshots/
 * New region and no-op code from
 * @author Erik Dasque
 * @version 0.7
 * @copyright Erik Dasque, 3 March, 2010
 * @package default
 **/

/**
 * Define DocBlock
 **/

// Your EC2 credentials

define('AWS_ACCESS_KEY_ID', ''); 
define('AWS_SECRET_ACCESS_KEY', '');
define ('SYNTAX','Usage: php ec2-delete-old-snapshots.php -v vol-id [-v vol-id ...] -o days [--region region] [--noop]\n\n');
define("NOOP", "1"); 


date_default_timezone_set('UTC');

// parse options (vol-ids, older-than)

$opts = getopt("v:o:",array("region:","noop"));


if  (($opts['v']) && !is_array($opts['v']))
	$volumes = array($opts['v']);
else
	$volumes = $opts['v'];

// to Debug getopt
// var_dump($opts);

if (isset($opts['noop'])) $noop=true; else $noop=false;

if ($opts['region']) 
{
if (is_array($opts['region']))
	  die("\n\nRegion cannot have more than one value\n".SYNTAX);
	else
		$region = $opts['region'];
}
else { echo "No region specified, defaulting to us-east-1\n"; $region = "us-east-1"; }

$ServiceURL = "https://".$region.".ec2.amazonaws.com";

	
if (!is_array($opts['o']))
{
	$now = time();
	$days = $opts['o'];
	$older_than = $now - $days * 24 * 60 * 60;
}

if ((!$volumes) || (!$older_than))
	die("\n\nDid not provide vol-id or older-than-time.\n".SYNTAX);

echo "\n";
foreach ($volumes as $volume)
{
	echo "Will try to bulk delete for " . $volume ." in region ".$region." older than " . date("Y/m/d H:i:s", $older_than) . "\n";
}
echo "\n";
	

// include required EC2 library elements 
require_once("Amazon/EC2/Client.php");
require_once("Amazon/EC2/Model/DescribeSnapshotsRequest.php");
require_once("Amazon/EC2/Model/DescribeVolumesRequest.php");
require_once("Amazon/EC2/Model/DeleteSnapshotRequest.php");

//$ec2Config = array ('ServiceURL' => 'https://us-east-1.ec2.amazonaws.com');
$ec2Config = array ('ServiceURL' => $ServiceURL);

// instantiate EC2 client

// was:
//$service = new Amazon_EC2_Client(AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY);

// with support for a different zone than US we do the following:
$service = new Amazon_EC2_Client(AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY, $ec2Config);

// Modify for Europe
// $ec2Config = array ('ServiceURL' => 'https://eu-west-1.ec2.amazonaws.com');
// $ec2 = new Amazon_EC2_Client($accessKeyId, $secretAccessKey, $ec2Config);
// for US-East:
// $ec2Config = array ('ServiceURL' => 'https://us-east-1.ec2.amazonaws.com');

// get all volumes
$request_v = new Amazon_EC2_Model_DescribeVolumesRequest();
$response_v = $service->describeVolumes($request);
$result_v = $response_v->getDescribeVolumesResult();
$volumes_found = $result_v->getVolume();

if (!is_array($volumes_found) || empty($volumes_found)) die ("No volumes found in region ".$region."\n\n");

$a_match=false;


foreach ($volumes_found as $volume_in_region)
	{
		foreach ($volumes as $volume_in_request)
		 {  
			$a_match = ($volume_in_request==$volume_in_region->getVolumeId());
			// echo $volume_in_request." may match (".$a_match.") ".$volume_in_region->getVolumeId()."\n"; 
		 
		
		}
	if ($a_match) break;	

	}
	
if (!$a_match)	die ("None of these volumes were found in region ".$region."\n\n");


// get all snapshots
$request = new Amazon_EC2_Model_DescribeSnapshotsRequest();
$response = $service->describeSnapshots($request);
$result = $response->getDescribeSnapshotsResult();
$snaps = $result->getSnapshot();

if (is_array($snaps))
{
	// first check we have at least 1 newer snapshot for every vol-id we got
	// we don't want to delete all snapshots of a vol and be left with no snapshots, 
	// this guarantees it. so we build a "go_ahead_volumes" array.
	foreach ($volumes as $volume)
	{
		foreach ($snaps as $snap)
		{
			$snapTimestamp = strtotime($snap->getStartTime());
			$snapStatus = $snap->getStatus();
			if (($snapTimestamp >= $older_than) && ($snapStatus=="completed"))
			{
				if ($snap->getVolumeId() == $volume)
				{
					$go_ahead_volumes[] = $volume;
					echo "Ready for deletion of snapshots older than ".date("Y/m/d H:i:s e", $older_than). " for volume[".$volume."] in region ".$region;
					echo ",\nfound newer snapshot [" . $snap->getSnapshotId() . "] taken on " . date('m/d/y \a\t H:i:s e',strtotime($snap->getStartTime())) .  "\n";
					break;
				}
			}
		}
	}
	if (empty($go_ahead_volumes))  die ("No snapshots found for these volumes in region ".$region."\n\n");
	
	echo "\n";
	
	// now go over all snaps, if encounter a snap for a go_ahead_volume which
	// is older than, well, older_than, delete it.
	$dodelete = true;
	
	if (NOOP) { $dodelete = false; echo "WARNING: the global NOOP is set in the source code for debbugging purpose so we won't be actually performing deletions\n\n"; }
	else if ($noop) { $dodelete = false; echo "WARNING: not actually deleting, you specified --noop\n\n"; }
	
	foreach ($snaps as $snap)
	{
		$snapTimestamp = strtotime($snap->getStartTime());
		if ( (in_array($snap->getVolumeId(), $go_ahead_volumes)) && ($snapTimestamp < $older_than) )
		{
			echo "Deleting volume " . $snap->getVolumeId() . " snapshot " . $snap->getSnapshotId() . " created on: " . date('m/d/y \a\t H:i:s e',strtotime($snap->getStartTime())) ."\n";
			// and now really delete using EC2 library
			$request = new Amazon_EC2_Model_DeleteSnapshotRequest();
			$request->setSnapshotId($snap->getSnapshotId());
			if ($dodelete) $response = $service->deleteSnapshot($request);
			    
		}
	}
	echo "\n\n";
}
else
{
	die ("\n\nNo snapshots found, quitting.\n\n");
}
