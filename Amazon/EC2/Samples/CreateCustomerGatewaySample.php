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
 * Create Customer Gateway  Sample
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
 * sample for Create Customer Gateway Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_CreateCustomerGatewayRequest
 // object or array of parameters
 // invokeCreateCustomerGateway($service, $request);

                                                                                                                                                                                                                                                                                
/**
  * Create Customer Gateway Action Sample
  * Provides information to AWS about your customer gateway device.
  * The customer gateway is the appliance at your end of the VPN connection
  * (compared to the VPN gateway, which is the device at the AWS side of the VPN
  * connection). AWS might delete any customer gateway that you create with this
  * operation if you leave it inactive for an extended period of time (inactive means
  * that there's no VPN connection in use with the customer gateway).
  * You must provide the Internet-routable IP address of the customer gateway's external
  * interface. The IP address must be static and can't be behind a device performing
  * network address translation (NAT).
  * You must also provide the device's Border Gateway Protocol (BGP) Autonomous
  * System Number (ASN). You can use an existing ASN assigned to your network.
  * If you don't have an ASN already, you can use a private ASN (in the 64512 - 65534 range).
  * For more information about ASNs, go to the Wikipedia article -
  * http://en.wikipedia.org/wiki/Autonomous_system_%28Internet%29.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_CreateCustomerGateway or array of parameters
  */
  function invokeCreateCustomerGateway(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->createCustomerGateway($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateCustomerGatewayResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetCreateCustomerGatewayResult()) { 
                    echo("            CreateCustomerGatewayResult\n");
                    $createCustomerGatewayResult = $response->getCreateCustomerGatewayResult();
                    if ($createCustomerGatewayResult->isSetCustomerGateway()) { 
                        echo("                CustomerGateway\n");
                        $customerGateway = $createCustomerGatewayResult->getCustomerGateway();
                        if ($customerGateway->isSetCustomerGatewayId()) 
                        {
                            echo("                    CustomerGatewayId\n");
                            echo("                        " . $customerGateway->getCustomerGatewayId() . "\n");
                        }
                        if ($customerGateway->isSetCustomerGatewayState()) 
                        {
                            echo("                    CustomerGatewayState\n");
                            echo("                        " . $customerGateway->getCustomerGatewayState() . "\n");
                        }
                        if ($customerGateway->isSetType()) 
                        {
                            echo("                    Type\n");
                            echo("                        " . $customerGateway->getType() . "\n");
                        }
                        if ($customerGateway->isSetIpAddress()) 
                        {
                            echo("                    IpAddress\n");
                            echo("                        " . $customerGateway->getIpAddress() . "\n");
                        }
                        if ($customerGateway->isSetBgpAsn()) 
                        {
                            echo("                    BgpAsn\n");
                            echo("                        " . $customerGateway->getBgpAsn() . "\n");
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
                                                                            