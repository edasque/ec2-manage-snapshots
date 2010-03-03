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
 * Terminate Instances  Sample
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
 * sample for Terminate Instances Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_TerminateInstancesRequest
 // object or array of parameters
 // invokeTerminateInstances($service, $request);

                                                                                                                                                                                                                                
/**
  * Terminate Instances Action Sample
  * The TerminateInstances operation shuts down one or more instances. This
  * operation is idempotent; if you terminate an instance more than once, each call
  * will succeed.
  * Terminated instances will remain visible after termination (approximately one
  * hour).  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_TerminateInstances or array of parameters
  */
  function invokeTerminateInstances(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->terminateInstances($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        TerminateInstancesResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetTerminateInstancesResult()) { 
                    echo("            TerminateInstancesResult\n");
                    $terminateInstancesResult = $response->getTerminateInstancesResult();
                    $terminatingInstanceList = $terminateInstancesResult->getTerminatingInstance();
                    foreach ($terminatingInstanceList as $terminatingInstance) {
                        echo("                TerminatingInstance\n");
                        if ($terminatingInstance->isSetInstanceId()) 
                        {
                            echo("                    InstanceId\n");
                            echo("                        " . $terminatingInstance->getInstanceId() . "\n");
                        }
                        if ($terminatingInstance->isSetCurrentState()) { 
                            echo("                    CurrentState\n");
                            $currentState = $terminatingInstance->getCurrentState();
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
                        if ($terminatingInstance->isSetPreviousState()) { 
                            echo("                    PreviousState\n");
                            $previousState = $terminatingInstance->getPreviousState();
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
                                                                                                                            