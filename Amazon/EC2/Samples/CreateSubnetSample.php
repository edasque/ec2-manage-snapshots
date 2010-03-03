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
 * Create Subnet  Sample
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
 * sample for Create Subnet Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_CreateSubnetRequest
 // object or array of parameters
 // invokeCreateSubnet($service, $request);

                                                                                                                                                                                                                                                                                                    
/**
  * Create Subnet Action Sample
  * Creates a subnet in an existing VPC. You can create up to 20 subnets in a VPC.
  * If you add more than one subnet to a VPC, they're set up in a star topology with
  * a logical router in the middle. If you feel you need more than 20 subnets, you can
  * request more by going to http://aws.amazon.com/contact-us/vpc-request/.
  * When you create each subnet, you provide the VPC ID and the CIDR block you
  * want for the subnet. Once you create a subnet, you can't change its CIDR block.
  * The subnet's CIDR block can be the same as the VPC's CIDR block (assuming you
  * want only a single subnet in the VPC), or a subset of the VPC's CIDR block.
  * If you create more than one subnet in a VPC, the subnets' CIDR blocks must not overlap.
  * The smallest subnet (and VPC) you can create uses a /28 netmask (16 IP addresses),
  * and the largest uses a /18 netmask (16,384 IP addresses).
  * Important
  * AWS reserves both the first four and the last IP address in each subnet's CIDR block.
  * They're not available for use.
  * AWS might delete any subnet you create with this operation if you leave it inactive
  * for an extended period of time (inactive means that there are no running Amazon EC2
  * instances in the subnet).  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_CreateSubnet or array of parameters
  */
  function invokeCreateSubnet(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->createSubnet($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateSubnetResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetCreateSubnetResult()) { 
                    echo("            CreateSubnetResult\n");
                    $createSubnetResult = $response->getCreateSubnetResult();
                    if ($createSubnetResult->isSetSubnet()) { 
                        echo("                Subnet\n");
                        $subnet = $createSubnetResult->getSubnet();
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
                                                        