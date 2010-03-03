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
 * Delete Vpn Gateway  Sample
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
 * sample for Delete Vpn Gateway Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DeleteVpnGatewayRequest
 // object or array of parameters
 // invokeDeleteVpnGateway($service, $request);

                                                                                                                                                                                                                                                                                                            
/**
  * Delete Vpn Gateway Action Sample
  * Deletes a VPN gateway. Use this when you want to delete a VPC and all
  * its associated components because you no longer need them. We recommend
  * that before you delete a VPN gateway, you detach it from the VPC and
  * delete the VPN connection. Note that you don't need to delete the VPN
  * gateway if you just want to delete and re-create the VPN connection
  * between your VPC and data center.
  * AWS might delete any VPN gateway if you leave it inactive for an extended period of time
  * (inactive means that there's no VPN connection in use with the VPN gateway).  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DeleteVpnGateway or array of parameters
  */
  function invokeDeleteVpnGateway(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->deleteVpnGateway($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DeleteVpnGatewayResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
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
                                                