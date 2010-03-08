<?php
/**
 * 
 *
 * @author Erik Dasque
 * @version $Id$
 * @copyright __MyCompanyName__, 7 March, 2010
 * @package default
 **/
date_default_timezone_set('UTC');

$now = time();
$older_than_month = $now - 28 * 24 * 60 * 60;


// echo "Older than month: ".date('F d, Y',$older_than_month)."\n";
//echo "Older than week: ".date('F d, Y',$older_than)."\n";

for ($date=$older_than_month-50*24*60*60; $date < $now; $date=$date+24*60*60) { 
	// echo "-> ".date('F d, Y',$date)."\n";
	keepSnapShot(date('F d, Y',$date));
	 
}

//echo keepSnapShot("3/05/10");
//echo keepSnapShot("3/1/10");
//echo keepSnapShot("3/7/10");


/**
 * function keepSnapShot
 *
 * @return true if we should keep the snapshot, false otherwise
 * Keeps snapshots from the first day of the month, the last month worth of sunday and the last 7 days
 * @author Erik Dasque
 **/
function keepSnapShot($creation_date)
{
	$now = time();
	$older_than = $now - 7 * 24 * 60 * 60;
	$older_than_month = $now - 30 * 24 * 60 * 60;
	
	
	// echo strtotime($creation_date);
	$ts = strtotime($creation_date);
	
//	echo 'Day of month: '.date("d",$ts)."\n";
//	echo 'Day of week: '.date("w",$ts)."\n";
	
	echo date('F d, Y',$ts)."\t";
	
	if (date("d",$ts)==1) { 
		echo "1st of month\tKEEP\n" ; 
		return true;
		}
	if ((date("w",$ts)==0) && $ts>$older_than_month) { 
		echo "Recent Sunday\tKEEP\n" ;
		return true; 
		} 
	if ((date("w",$ts)==0) && $ts<=$older_than_month) { 
		echo "Old Sunday\tDELETE\n" ;
		return false;
		} 
	if ($ts>=$older_than) { 
		echo "Recent backup\tKEEP\n" ;
		return true;
		} 
	if ($ts<$older_than) { 
		echo "Old backup\tDELETE\n" ; 
		return false; 
		} 
		
	
	echo "Unknown condition on ".date('F d, Y',$ts)."\n"; exit(0);
	return false;
}

?>