<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_EC2
 *  @copyright   Copyright 2008-2009 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-11-30
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon EC2 PHP5 Library
 *  Generated: Fri Dec 11 13:55:19 PST 2009
 * 
 */

/**
 * Create Snapshot  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon EC2
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_EC2_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_EC2
 * responses without calling Amazon_EC2 service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/EC2/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_EC2_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Create Snapshot Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_CreateSnapshotRequest
 // object or array of parameters
 // invokeCreateSnapshot($service, $request);

                                                                
/**
  * Create Snapshot Action Sample
  * Create a snapshot of the volume identified by volume ID. A volume does not have to be detached
  * at the time the snapshot is taken.
  * Important Note:
  * Snapshot creation requires that the system is in a consistent state.
  * For instance, this means that if taking a snapshot of a database, the tables must
  * be read-only locked to ensure that the snapshot will not contain a corrupted
  * version of the database.  Therefore, be careful when using this API to ensure that
  * the system remains in the consistent state until the create snapshot status
  * has returned.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_CreateSnapshot or array of parameters
  */
  function invokeCreateSnapshot(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->createSnapshot($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateSnapshotResponse\n");
                if ($response->isSetCreateSnapshotResult()) { 
                    echo("            CreateSnapshotResult\n");
                    $createSnapshotResult = $response->getCreateSnapshotResult();
                    if ($createSnapshotResult->isSetSnapshot()) { 
                        echo("                Snapshot\n");
                        $snapshot = $createSnapshotResult->getSnapshot();
                        if ($snapshot->isSetSnapshotId()) 
                        {
                            echo("                    SnapshotId\n");
                            echo("                        " . $snapshot->getSnapshotId() . "\n");
                        }
                        if ($snapshot->isSetVolumeId()) 
                        {
                            echo("                    VolumeId\n");
                            echo("                        " . $snapshot->getVolumeId() . "\n");
                        }
                        if ($snapshot->isSetStatus()) 
                        {
                            echo("                    Status\n");
                            echo("                        " . $snapshot->getStatus() . "\n");
                        }
                        if ($snapshot->isSetStartTime()) 
                        {
                            echo("                    StartTime\n");
                            echo("                        " . $snapshot->getStartTime() . "\n");
                        }
                        if ($snapshot->isSetProgress()) 
                        {
                            echo("                    Progress\n");
                            echo("                        " . $snapshot->getProgress() . "\n");
                        }
                        if ($snapshot->isSetOwnerId()) 
                        {
                            echo("                    OwnerId\n");
                            echo("                        " . $snapshot->getOwnerId() . "\n");
                        }
                        if ($snapshot->isSetVolumeSize()) 
                        {
                            echo("                    VolumeSize\n");
                            echo("                        " . $snapshot->getVolumeSize() . "\n");
                        }
                        if ($snapshot->isSetDescription()) 
                        {
                            echo("                    Description\n");
                            echo("                        " . $snapshot->getDescription() . "\n");
                        }
                        if ($snapshot->isSetOwnerAlias()) 
                        {
                            echo("                    OwnerAlias\n");
                            echo("                        " . $snapshot->getOwnerAlias() . "\n");
                        }
                    } 
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_EC2_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                                                                                                                                                                                                                                                                                            