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
 * Describe Subnets  Sample
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
 * sample for Describe Subnets Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeSubnetsRequest
 // object or array of parameters
 // invokeDescribeSubnets($service, $request);

                                                                                                                                                                                                                                                
/**
  * Describe Subnets Action Sample
  * Gives you information about your subnets. You can filter the results to
  * return information only about subnets that match criteria you specify.
  * For example, you could ask to get information about a particular subnet
  * (or all) only if the subnet's state is available. You can specify multiple
  * filters (e.g., the subnet is in a particular VPC, and the subnet's state is
  * available). The result includes information for a particular subnet only
  * if the subnet matches all your filters. If there's no match, no special
  * message is returned; the response is simply empty. The following table
  * shows the available filters.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeSubnets or array of parameters
  */
  function invokeDescribeSubnets(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeSubnets($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeSubnetsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeSubnetsResult()) { 
                    echo("            DescribeSubnetsResult\n");
                    $describeSubnetsResult = $response->getDescribeSubnetsResult();
                    $subnetList = $describeSubnetsResult->getSubnet();
                    foreach ($subnetList as $subnet) {
                        echo("                Subnet\n");
                        if ($subnet->isSetSubnetId()) 
                        {
                            echo("                    SubnetId\n");
                            echo("                        " . $subnet->getSubnetId() . "\n");
                        }
                        if ($subnet->isSetSubnetState()) 
                        {
                            echo("                    SubnetState\n");
                            echo("                        " . $subnet->getSubnetState() . "\n");
                        }
                        if ($subnet->isSetVpcId()) 
                        {
                            echo("                    VpcId\n");
                            echo("                        " . $subnet->getVpcId() . "\n");
                        }
                        if ($subnet->isSetCidrBlock()) 
                        {
                            echo("                    CidrBlock\n");
                            echo("                        " . $subnet->getCidrBlock() . "\n");
                        }
                        if ($subnet->isSetAvailableIpAddressCount()) 
                        {
                            echo("                    AvailableIpAddressCount\n");
                            echo("                        " . $subnet->getAvailableIpAddressCount() . "\n");
                        }
                        if ($subnet->isSetAvailabilityZone()) 
                        {
                            echo("                    AvailabilityZone\n");
                            echo("                        " . $subnet->getAvailabilityZone() . "\n");
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
                                                                                                            