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
 * Create Vpc  Sample
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
 * sample for Create Vpc Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_CreateVpcRequest
 // object or array of parameters
 // invokeCreateVpc($service, $request);

                                                                                                                                                                                                                                                                            
/**
  * Create Vpc Action Sample
  * Creates a VPC with the CIDR block you specify. The smallest VPC you can create
  * uses a /28 netmask (16 IP addresses), and the largest uses a /18 netmask
  * (16,384 IP addresses). To help you decide how big to make your VPC, go
  * to the topic about creating VPCs  in the Amazon Virtual Private Cloud
  * Developer Guide.
  * By default, each instance you launch in the VPC has the default DHCP options
  * (the standard EC2 host name, no domain name, no DNS server, no NTP server, and
  * no NetBIOS server or node type).
  * AWS might delete any VPC that you create with this operation if you leave it inactive
  * for an extended period of time (inactive means that there are no running Amazon EC2
  * instances in the VPC).  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_CreateVpc or array of parameters
  */
  function invokeCreateVpc(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->createVpc($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateVpcResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetCreateVpcResult()) { 
                    echo("            CreateVpcResult\n");
                    $createVpcResult = $response->getCreateVpcResult();
                    if ($createVpcResult->isSetVpc()) { 
                        echo("                Vpc\n");
                        $vpc = $createVpcResult->getVpc();
                        if ($vpc->isSetVpcId()) 
                        {
                            echo("                    VpcId\n");
                            echo("                        " . $vpc->getVpcId() . "\n");
                        }
                        if ($vpc->isSetVpcState()) 
                        {
                            echo("                    VpcState\n");
                            echo("                        " . $vpc->getVpcState() . "\n");
                        }
                        if ($vpc->isSetCidrBlock()) 
                        {
                            echo("                    CidrBlock\n");
                            echo("                        " . $vpc->getCidrBlock() . "\n");
                        }
                        if ($vpc->isSetDhcpOptionsId()) 
                        {
                            echo("                    DhcpOptionsId\n");
                            echo("                        " . $vpc->getDhcpOptionsId() . "\n");
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
                                                                                