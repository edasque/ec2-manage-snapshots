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
 * Create Vpn Connection  Sample
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
 * sample for Create Vpn Connection Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_CreateVpnConnectionRequest
 // object or array of parameters
 // invokeCreateVpnConnection($service, $request);

                                                                                                                                                                                                                                                                                                                    
/**
  * Create Vpn Connection Action Sample
  * Creates a new VPN connection between an existing VPN gateway and customer
  * gateway. The only supported connection type is ipsec.1.
  * The response includes information that you need to configure your customer gateway,
  * in XML format. We recommend you use the command line version of this operation
  * (ec2-create-vpn-connection), which lets you get the configuration information
  * formatted in a friendlier way. For information about the command, go to
  * ec2-create-vpn-connection in the Amazon Virtual Private Cloud Command Line Reference.
  * Important
  * We strongly recommend you use HTTPS when calling this operation because
  * the response contains sensitive cryptographic information for configuring
  * your customer gateway.
  * If you decide to shut down your VPN connection for any reason and then create a new
  * one, you must re-configure your customer gateway with the new information
  * returned from this call.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_CreateVpnConnection or array of parameters
  */
  function invokeCreateVpnConnection(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->createVpnConnection($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateVpnConnectionResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetCreateVpnConnectionResult()) { 
                    echo("            CreateVpnConnectionResult\n");
                    $createVpnConnectionResult = $response->getCreateVpnConnectionResult();
                    if ($createVpnConnectionResult->isSetVpnConnection()) { 
                        echo("                VpnConnection\n");
                        $vpnConnection = $createVpnConnectionResult->getVpnConnection();
                        if ($vpnConnection->isSetVpnConnectionId()) 
                        {
                            echo("                    VpnConnectionId\n");
                            echo("                        " . $vpnConnection->getVpnConnectionId() . "\n");
                        }
                        if ($vpnConnection->isSetVpnConnectionState()) 
                        {
                            echo("                    VpnConnectionState\n");
                            echo("                        " . $vpnConnection->getVpnConnectionState() . "\n");
                        }
                        if ($vpnConnection->isSetCustomerGatewayConfiguration()) 
                        {
                            echo("                    CustomerGatewayConfiguration\n");
                            echo("                        " . $vpnConnection->getCustomerGatewayConfiguration() . "\n");
                        }
                        if ($vpnConnection->isSetType()) 
                        {
                            echo("                    Type\n");
                            echo("                        " . $vpnConnection->getType() . "\n");
                        }
                        if ($vpnConnection->isSetCustomerGatewayId()) 
                        {
                            echo("                    CustomerGatewayId\n");
                            echo("                        " . $vpnConnection->getCustomerGatewayId() . "\n");
                        }
                        if ($vpnConnection->isSetVpnGatewayId()) 
                        {
                            echo("                    VpnGatewayId\n");
                            echo("                        " . $vpnConnection->getVpnGatewayId() . "\n");
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
                                        