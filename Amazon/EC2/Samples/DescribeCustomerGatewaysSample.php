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
 * Describe Customer Gateways  Sample
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
 * sample for Describe Customer Gateways Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeCustomerGatewaysRequest
 // object or array of parameters
 // invokeDescribeCustomerGateways($service, $request);

                                                                                                                                                                                                                                                                                                                
/**
  * Describe Customer Gateways Action Sample
  * Gives you information about your customer gateways. You can filter the results to return
  * information only about customer gateways that match criteria you specify. For example,
  * you could ask to get information about a particular customer gateway (or all) only if
  * the gateway's state is pending or available. You can specify multiple filters (e.g.,
  * the customer gateway has a particular IP address for the Internet-routable external
  * interface, and the gateway's state is pending or available). The result includes
  * information for a particular customer gateway only if the gateway matches all  your
  * filters. If there's no match, no special message is returned; the response is simply empty.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeCustomerGateways or array of parameters
  */
  function invokeDescribeCustomerGateways(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeCustomerGateways($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeCustomerGatewaysResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeCustomerGatewaysResult()) { 
                    echo("            DescribeCustomerGatewaysResult\n");
                    $describeCustomerGatewaysResult = $response->getDescribeCustomerGatewaysResult();
                    $customerGatewayList = $describeCustomerGatewaysResult->getCustomerGateway();
                    foreach ($customerGatewayList as $customerGateway) {
                        echo("                CustomerGateway\n");
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
                                            