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
 * Bundle Instance  Sample
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
 * sample for Bundle Instance Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_BundleInstanceRequest
 // object or array of parameters
 // invokeBundleInstance($service, $request);

                                        
/**
  * Bundle Instance Action Sample
  * The BundleInstance operation request that an instance is bundled the next time it boots.
  * The bundling process creates a new image from a running instance and stores
  * the AMI data in S3. Once bundled, the image must be registered in the normal
  * way using the RegisterImage API.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_BundleInstance or array of parameters
  */
  function invokeBundleInstance(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->bundleInstance($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        BundleInstanceResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetBundleInstanceResult()) { 
                    echo("            BundleInstanceResult\n");
                    $bundleInstanceResult = $response->getBundleInstanceResult();
                    if ($bundleInstanceResult->isSetBundleTask()) { 
                        echo("                BundleTask\n");
                        $bundleTask = $bundleInstanceResult->getBundleTask();
                        if ($bundleTask->isSetInstanceId()) 
                        {
                            echo("                    InstanceId\n");
                            echo("                        " . $bundleTask->getInstanceId() . "\n");
                        }
                        if ($bundleTask->isSetBundleId()) 
                        {
                            echo("                    BundleId\n");
                            echo("                        " . $bundleTask->getBundleId() . "\n");
                        }
                        if ($bundleTask->isSetBundleState()) 
                        {
                            echo("                    BundleState\n");
                            echo("                        " . $bundleTask->getBundleState() . "\n");
                        }
                        if ($bundleTask->isSetStartTime()) 
                        {
                            echo("                    StartTime\n");
                            echo("                        " . $bundleTask->getStartTime() . "\n");
                        }
                        if ($bundleTask->isSetUpdateTime()) 
                        {
                            echo("                    UpdateTime\n");
                            echo("                        " . $bundleTask->getUpdateTime() . "\n");
                        }
                        if ($bundleTask->isSetStorage()) { 
                            echo("                    Storage\n");
                            $storage = $bundleTask->getStorage();
                            if ($storage->isSetS3()) { 
                                echo("                        S3\n");
                                $s3 = $storage->getS3();
                                if ($s3->isSetBucket()) 
                                {
                                    echo("                            Bucket\n");
                                    echo("                                " . $s3->getBucket() . "\n");
                                }
                                if ($s3->isSetPrefix()) 
                                {
                                    echo("                            Prefix\n");
                                    echo("                                " . $s3->getPrefix() . "\n");
                                }
                                if ($s3->isSetAWSAccessKeyId()) 
                                {
                                    echo("                            AWSAccessKeyId\n");
                                    echo("                                " . $s3->getAWSAccessKeyId() . "\n");
                                }
                                if ($s3->isSetUploadPolicy()) 
                                {
                                    echo("                            UploadPolicy\n");
                                    echo("                                " . $s3->getUploadPolicy() . "\n");
                                }
                                if ($s3->isSetUploadPolicySignature()) 
                                {
                                    echo("                            UploadPolicySignature\n");
                                    echo("                                " . $s3->getUploadPolicySignature() . "\n");
                                }
                            } 
                        } 
                        if ($bundleTask->isSetProgress()) 
                        {
                            echo("                    Progress\n");
                            echo("                        " . $bundleTask->getProgress() . "\n");
                        }
                        if ($bundleTask->isSetBundleTaskError()) { 
                            echo("                    BundleTaskError\n");
                            $bundleTaskError = $bundleTask->getBundleTaskError();
                            if ($bundleTaskError->isSetCode()) 
                            {
                                echo("                        Code\n");
                                echo("                            " . $bundleTaskError->getCode() . "\n");
                            }
                            if ($bundleTaskError->isSetMessage()) 
                            {
                                echo("                        Message\n");
                                echo("                            " . $bundleTaskError->getMessage() . "\n");
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
                                                                                                                                                                                                                                                                                                                    