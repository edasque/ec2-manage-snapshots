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
 * Authorize Security Group Ingress  Sample
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
 * sample for Authorize Security Group Ingress Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_AuthorizeSecurityGroupIngressRequest
 // object or array of parameters
 // invokeAuthorizeSecurityGroupIngress($service, $request);

                                    
/**
  * Authorize Security Group Ingress Action Sample
  * The AuthorizeSecurityGroupIngress operation adds permissions to a security
  * group.
  * Permissions are specified by the IP protocol (TCP, UDP or ICMP), the source of
  * the request (by IP range or an Amazon EC2 user-group pair), the source and
  * destination port ranges (for TCP and UDP), and the ICMP codes and types (for
  * ICMP). When authorizing ICMP, -1 can be used as a wildcard in the type and code
  * fields.
  * Permission changes are propagated to instances within the security group as
  * quickly as possible. However, depending on the number of instances, a small
  * delay might occur.
  * When authorizing a user/group pair permission, GroupName,
  * SourceSecurityGroupName and SourceSecurityGroupOwnerId must be specified. When
  * authorizing a CIDR IP permission, GroupName, IpProtocol, FromPort, ToPort and
  * CidrIp must be specified. Mixing these two types of parameters is not allowed.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_AuthorizeSecurityGroupIngress or array of parameters
  */
  function invokeAuthorizeSecurityGroupIngress(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->authorizeSecurityGroupIngress($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        AuthorizeSecurityGroupIngressResponse\n");
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
                                                                                                                                                                                                                                                                                                                        