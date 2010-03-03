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
 * Describe Reserved Instances Offerings  Sample
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
 * sample for Describe Reserved Instances Offerings Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest
 // object or array of parameters
 // invokeDescribeReservedInstancesOfferings($service, $request);

                                                                                                                                
/**
  * Describe Reserved Instances Offerings Action Sample
  * The DescribeReservedInstancesOfferings operation describes Reserved
  * Instance offerings that are available for purchase. With Amazon EC2
  * Reserved Instances, you purchase the right to launch Amazon EC2 instances
  * for a period of time (without getting insufficient capacity errors) and
  * pay a lower usage rate for the actual time used.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeReservedInstancesOfferings or array of parameters
  */
  function invokeDescribeReservedInstancesOfferings(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeReservedInstancesOfferings($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeReservedInstancesOfferingsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeReservedInstancesOfferingsResult()) { 
                    echo("            DescribeReservedInstancesOfferingsResult\n");
                    $describeReservedInstancesOfferingsResult = $response->getDescribeReservedInstancesOfferingsResult();
                    $reservedInstancesOfferingList = $describeReservedInstancesOfferingsResult->getReservedInstancesOffering();
                    foreach ($reservedInstancesOfferingList as $reservedInstancesOffering) {
                        echo("                ReservedInstancesOffering\n");
                        if ($reservedInstancesOffering->isSetReservedInstancesOfferingId()) 
                        {
                            echo("                    ReservedInstancesOfferingId\n");
                            echo("                        " . $reservedInstancesOffering->getReservedInstancesOfferingId() . "\n");
                        }
                        if ($reservedInstancesOffering->isSetInstanceType()) 
                        {
                            echo("                    InstanceType\n");
                            echo("                        " . $reservedInstancesOffering->getInstanceType() . "\n");
                        }
                        if ($reservedInstancesOffering->isSetAvailabilityZone()) 
                        {
                            echo("                    AvailabilityZone\n");
                            echo("                        " . $reservedInstancesOffering->getAvailabilityZone() . "\n");
                        }
                        if ($reservedInstancesOffering->isSetDuration()) 
                        {
                            echo("                    Duration\n");
                            echo("                        " . $reservedInstancesOffering->getDuration() . "\n");
                        }
                        if ($reservedInstancesOffering->isSetUsagePrice()) 
                        {
                            echo("                    UsagePrice\n");
                            echo("                        " . $reservedInstancesOffering->getUsagePrice() . "\n");
                        }
                        if ($reservedInstancesOffering->isSetFixedPrice()) 
                        {
                            echo("                    FixedPrice\n");
                            echo("                        " . $reservedInstancesOffering->getFixedPrice() . "\n");
                        }
                        if ($reservedInstancesOffering->isSetProductDescription()) 
                        {
                            echo("                    ProductDescription\n");
                            echo("                        " . $reservedInstancesOffering->getProductDescription() . "\n");
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
                                                                                                                                                                                                                            