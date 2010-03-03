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
 * Describe Instance Attribute  Sample
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
 * sample for Describe Instance Attribute Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeInstanceAttributeRequest
 // object or array of parameters
 // invokeDescribeInstanceAttribute($service, $request);

                                                                                                                                                                                                                            
/**
  * Describe Instance Attribute Action Sample
  * Returns information about an attribute of an instance. Only one attribute can be specified per call.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeInstanceAttribute or array of parameters
  */
  function invokeDescribeInstanceAttribute(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeInstanceAttribute($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeInstanceAttributeResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeInstanceAttributeResult()) { 
                    echo("            DescribeInstanceAttributeResult\n");
                    $describeInstanceAttributeResult = $response->getDescribeInstanceAttributeResult();
                    if ($describeInstanceAttributeResult->isSetInstanceAttribute()) { 
                        echo("                InstanceAttribute\n");
                        $instanceAttribute = $describeInstanceAttributeResult->getInstanceAttribute();
                        if ($instanceAttribute->isSetInstanceId()) 
                        {
                            echo("                    InstanceId\n");
                            echo("                        " . $instanceAttribute->getInstanceId() . "\n");
                        }
                        if ($instanceAttribute->isSetInstanceType()) 
                        {
                            echo("                    InstanceType\n");
                            echo("                        " . $instanceAttribute->getInstanceType() . "\n");
                        }
                        if ($instanceAttribute->isSetKernelId()) 
                        {
                            echo("                    KernelId\n");
                            echo("                        " . $instanceAttribute->getKernelId() . "\n");
                        }
                        if ($instanceAttribute->isSetRamdiskId()) 
                        {
                            echo("                    RamdiskId\n");
                            echo("                        " . $instanceAttribute->getRamdiskId() . "\n");
                        }
                        if ($instanceAttribute->isSetUserData()) 
                        {
                            echo("                    UserData\n");
                            echo("                        " . $instanceAttribute->getUserData() . "\n");
                        }
                        if ($instanceAttribute->isSetDisableApiTermination()) 
                        {
                            echo("                    DisableApiTermination\n");
                            echo("                        " . $instanceAttribute->getDisableApiTermination() . "\n");
                        }
                        if ($instanceAttribute->isSetInstanceInitiatedShutdownBehavior()) 
                        {
                            echo("                    InstanceInitiatedShutdownBehavior\n");
                            echo("                        " . $instanceAttribute->getInstanceInitiatedShutdownBehavior() . "\n");
                        }
                        if ($instanceAttribute->isSetRootDeviceName()) 
                        {
                            echo("                    RootDeviceName\n");
                            echo("                        " . $instanceAttribute->getRootDeviceName() . "\n");
                        }
                        $blockDeviceMappingList = $instanceAttribute->getBlockDeviceMapping();
                        foreach ($blockDeviceMappingList as $blockDeviceMapping) {
                            echo("                    BlockDeviceMapping\n");
                            if ($blockDeviceMapping->isSetDeviceName()) 
                            {
                                echo("                        DeviceName\n");
                                echo("                            " . $blockDeviceMapping->getDeviceName() . "\n");
                            }
                            if ($blockDeviceMapping->isSetEbs()) { 
                                echo("                        Ebs\n");
                                $ebs = $blockDeviceMapping->getEbs();
                                if ($ebs->isSetVolumeId()) 
                                {
                                    echo("                            VolumeId\n");
                                    echo("                                " . $ebs->getVolumeId() . "\n");
                                }
                                if ($ebs->isSetStatus()) 
                                {
                                    echo("                            Status\n");
                                    echo("                                " . $ebs->getStatus() . "\n");
                                }
                                if ($ebs->isSetAttachTime()) 
                                {
                                    echo("                            AttachTime\n");
                                    echo("                                " . $ebs->getAttachTime() . "\n");
                                }
                                if ($ebs->isSetDeleteOnTermination()) 
                                {
                                    echo("                            DeleteOnTermination\n");
                                    echo("                                " . $ebs->getDeleteOnTermination() . "\n");
                                }
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
                                                                                                                                