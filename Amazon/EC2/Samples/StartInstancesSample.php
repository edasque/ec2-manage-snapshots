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
 * Start Instances  Sample
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
 * sample for Start Instances Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_StartInstancesRequest
 // object or array of parameters
 // invokeStartInstances($service, $request);

                                                                                                                                                                                                                
/**
  * Start Instances Action Sample
  * Starts an instance that uses an Amazon EBS volume as its root device.
  * Instances that use Amazon EBS volumes as their root devices can be quickly stopped and started.
  * When an instance is stopped, the compute resources are released and you are not billed for hourly
  * instance usage. However, your root partition Amazon EBS volume remains, continues to persist your
  * data, and you are charged for Amazon EBS volume usage. You can restart your instance at any time.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_StartInstances or array of parameters
  */
  function invokeStartInstances(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->startInstances($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        StartInstancesResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetStartInstancesResult()) { 
                    echo("            StartInstancesResult\n");
                    $startInstancesResult = $response->getStartInstancesResult();
                    $startingInstancesList = $startInstancesResult->getStartingInstances();
                    foreach ($startingInstancesList as $startingInstances) {
                        echo("                StartingInstances\n");
                        if ($startingInstances->isSetInstanceId()) 
                        {
                            echo("                    InstanceId\n");
                            echo("                        " . $startingInstances->getInstanceId() . "\n");
                        }
                        if ($startingInstances->isSetCurrentState()) { 
                            echo("                    CurrentState\n");
                            $currentState = $startingInstances->getCurrentState();
                            if ($currentState->isSetCode()) 
                            {
                                echo("                        Code\n");
                                echo("                            " . $currentState->getCode() . "\n");
                            }
                            if ($currentState->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $currentState->getName() . "\n");
                            }
                        } 
                        if ($startingInstances->isSetPreviousState()) { 
                            echo("                    PreviousState\n");
                            $previousState = $startingInstances->getPreviousState();
                            if ($previousState->isSetCode()) 
                            {
                                echo("                        Code\n");
                                echo("                            " . $previousState->getCode() . "\n");
                            }
                            if ($previousState->isSetName()) 
                            {
                                echo("                        Name\n");
                                echo("                            " . $previousState->getName() . "\n");
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
                                                                                                                                            