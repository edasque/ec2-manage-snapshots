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
 * Describe Dhcp Options  Sample
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
 * sample for Describe Dhcp Options Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeDhcpOptionsRequest
 // object or array of parameters
 // invokeDescribeDhcpOptions($service, $request);

                                                                                                                                                                                                                                                                                                                        
/**
  * Describe Dhcp Options Action Sample
  * Gives you information about one or more sets of DHCP options. You can specify
  * one or more DHCP options set IDs, or no IDs (to describe all your sets of DHCP options).
  * The returned information consists of:
  * - The DHCP options set ID
  * - The options  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeDhcpOptions or array of parameters
  */
  function invokeDescribeDhcpOptions(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeDhcpOptions($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeDhcpOptionsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeDhcpOptionsResult()) { 
                    echo("            DescribeDhcpOptionsResult\n");
                    $describeDhcpOptionsResult = $response->getDescribeDhcpOptionsResult();
                    $dhcpOptionsList = $describeDhcpOptionsResult->getDhcpOptions();
                    foreach ($dhcpOptionsList as $dhcpOptions) {
                        echo("                DhcpOptions\n");
                        if ($dhcpOptions->isSetDhcpOptionsId()) 
                        {
                            echo("                    DhcpOptionsId\n");
                            echo("                        " . $dhcpOptions->getDhcpOptionsId() . "\n");
                        }
                        $configurationList = $dhcpOptions->getConfiguration();
                        foreach ($configurationList as $configuration) {
                            echo("                    Configuration\n");
                            if ($configuration->isSetKey()) 
                            {
                                echo("                        Key\n");
                                echo("                            " . $configuration->getKey() . "\n");
                            }
                            $valueList  =  $configuration->getValue();
                            foreach ($valueList as $value) { 
                                echo("                        Value\n");
                                echo("                            " . $value);
                            }	
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
                                    