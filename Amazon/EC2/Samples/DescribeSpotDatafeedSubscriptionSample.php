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
 * Describe Spot Datafeed Subscription  Sample
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
 * sample for Describe Spot Datafeed Subscription Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionRequest
 // object or array of parameters
 // invokeDescribeSpotDatafeedSubscription($service, $request);

                                                                                                                                                                                                                                                                                                                                                    
/**
  * Describe Spot Datafeed Subscription Action Sample
  * Describes the data feed for spot instances.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeSpotDatafeedSubscription or array of parameters
  */
  function invokeDescribeSpotDatafeedSubscription(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeSpotDatafeedSubscription($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeSpotDatafeedSubscriptionResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeSpotDatafeedSubscriptionResult()) { 
                    echo("            DescribeSpotDatafeedSubscriptionResult\n");
                    $describeSpotDatafeedSubscriptionResult = $response->getDescribeSpotDatafeedSubscriptionResult();
                    if ($describeSpotDatafeedSubscriptionResult->isSetSpotDatafeedSubscription()) { 
                        echo("                SpotDatafeedSubscription\n");
                        $spotDatafeedSubscription = $describeSpotDatafeedSubscriptionResult->getSpotDatafeedSubscription();
                        if ($spotDatafeedSubscription->isSetOwnerId()) 
                        {
                            echo("                    OwnerId\n");
                            echo("                        " . $spotDatafeedSubscription->getOwnerId() . "\n");
                        }
                        if ($spotDatafeedSubscription->isSetBucket()) 
                        {
                            echo("                    Bucket\n");
                            echo("                        " . $spotDatafeedSubscription->getBucket() . "\n");
                        }
                        if ($spotDatafeedSubscription->isSetPrefix()) 
                        {
                            echo("                    Prefix\n");
                            echo("                        " . $spotDatafeedSubscription->getPrefix() . "\n");
                        }
                        if ($spotDatafeedSubscription->isSetState()) 
                        {
                            echo("                    State\n");
                            echo("                        " . $spotDatafeedSubscription->getState() . "\n");
                        }
                        if ($spotDatafeedSubscription->isSetFault()) { 
                            echo("                    Fault\n");
                            $fault = $spotDatafeedSubscription->getFault();
                            if ($fault->isSetCode()) 
                            {
                                echo("                        Code\n");
                                echo("                            " . $fault->getCode() . "\n");
                            }
                            if ($fault->isSetMessage()) 
                            {
                                echo("                        Message\n");
                                echo("                            " . $fault->getMessage() . "\n");
                            }
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
        