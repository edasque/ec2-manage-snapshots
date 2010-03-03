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
 * Delete Vpn Connection  Sample
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
 * sample for Delete Vpn Connection Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DeleteVpnConnectionRequest
 // object or array of parameters
 // invokeDeleteVpnConnection($service, $request);

                                                                                                                                                                                                                                                                                                        
/**
  * Delete Vpn Connection Action Sample
  * Deletes a VPN connection. Use this if you want to delete a VPC and
  * all its associated components. Another reason to use this operation
  * is if you believe the tunnel credentials for your VPN connection have
  * been compromised. In that situation, you can delete the VPN connection
  * and create a new one that has new keys, without needing to delete the
  * VPC or VPN gateway. If you create a new VPN connection, you must
  * reconfigure the customer gateway using the new configuration
  * information returned with the new VPN connection ID.
  * If you're deleting the VPC and all its associated parts, we recommend you
  * detach the VPN gateway from the VPC and delete the VPC before deleting
  * the VPN connection.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DeleteVpnConnection or array of parameters
  */
  function invokeDeleteVpnConnection(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->deleteVpnConnection($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DeleteVpnConnectionResponse\n");
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
                                                    