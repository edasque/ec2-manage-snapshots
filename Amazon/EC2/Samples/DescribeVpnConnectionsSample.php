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
 * Describe Vpn Connections  Sample
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
 * sample for Describe Vpn Connections Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeVpnConnectionsRequest
 // object or array of parameters
 // invokeDescribeVpnConnections($service, $request);

                                                                                                                                                                                                                                            
/**
  * Describe Vpn Connections Action Sample
  * Gives you information about your VPN connections.
  * Important
  * We strongly recommend you use HTTPS when calling this operation because the
  * response contains sensitive cryptographic information for configuring your customer gateway.
  * You can filter the results to return information only about VPN connections
  * that match criteria you specify. For example, you could ask to get information
  * about a particular VPN connection (or all) only if the VPN's state is pending
  * or available. You can specify multiple filters (e.g., the VPN connection is
  * associated with a particular VPN gateway, and the gateway's state is
  * pending or available). The result includes information for a particular
  * VPN connection only if the VPN connection matches all your filters.
  * If there's no match, no special message is returned; the response is
  * simply empty.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeVpnConnections or array of parameters
  */
  function invokeDescribeVpnConnections(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeVpnConnections($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeVpnConnectionsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeVpnConnectionsResult()) { 
                    echo("            DescribeVpnConnectionsResult\n");
                    $describeVpnConnectionsResult = $response->getDescribeVpnConnectionsResult();
                    $vpnConnectionList = $describeVpnConnectionsResult->getVpnConnection();
                    foreach ($vpnConnectionList as $vpnConnection) {
                        echo("                VpnConnection\n");
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
                                                                                                                