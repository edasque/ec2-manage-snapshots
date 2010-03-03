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
 * Describe Availability Zones  Sample
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
 * sample for Describe Availability Zones Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeAvailabilityZonesRequest
 // object or array of parameters
 // invokeDescribeAvailabilityZones($service, $request);

                                                                                                
/**
  * Describe Availability Zones Action Sample
  * The DescribeAvailabilityZones operation describes availability zones that are
  * currently available to the account and their states.
  * Availability zones are not the same across accounts. The availability zone
  * us-east-1a for account A is not necessarily the same as us-east-1a for account
  * B. Zone assignments are mapped independently for each account.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeAvailabilityZones or array of parameters
  */
  function invokeDescribeAvailabilityZones(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeAvailabilityZones($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeAvailabilityZonesResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeAvailabilityZonesResult()) { 
                    echo("            DescribeAvailabilityZonesResult\n");
                    $describeAvailabilityZonesResult = $response->getDescribeAvailabilityZonesResult();
                    $availabilityZoneList = $describeAvailabilityZonesResult->getAvailabilityZone();
                    foreach ($availabilityZoneList as $availabilityZone) {
                        echo("                AvailabilityZone\n");
                        if ($availabilityZone->isSetZoneName()) 
                        {
                            echo("                    ZoneName\n");
                            echo("                        " . $availabilityZone->getZoneName() . "\n");
                        }
                        if ($availabilityZone->isSetZoneState()) 
                        {
                            echo("                    ZoneState\n");
                            echo("                        " . $availabilityZone->getZoneState() . "\n");
                        }
                        if ($availabilityZone->isSetRegionName()) 
                        {
                            echo("                    RegionName\n");
                            echo("                        " . $availabilityZone->getRegionName() . "\n");
                        }
                        $messageList  =  $availabilityZone->getMessage();
                        foreach ($messageList as $message) { 
                            echo("                    Message\n");
                            echo("                        " . $message);
                        }	
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
                                                                                                                                                                                                                                                            