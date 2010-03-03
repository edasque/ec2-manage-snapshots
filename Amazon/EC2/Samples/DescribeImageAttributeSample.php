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
 * Describe Image Attribute  Sample
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
 * sample for Describe Image Attribute Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeImageAttributeRequest
 // object or array of parameters
 // invokeDescribeImageAttribute($service, $request);

                                                                                                            
/**
  * Describe Image Attribute Action Sample
  * The DescribeImageAttribute operation returns information about an attribute of
  * an AMI. Only one attribute can be specified per call.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeImageAttribute or array of parameters
  */
  function invokeDescribeImageAttribute(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeImageAttribute($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeImageAttributeResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeImageAttributeResult()) { 
                    echo("            DescribeImageAttributeResult\n");
                    $describeImageAttributeResult = $response->getDescribeImageAttributeResult();
                    if ($describeImageAttributeResult->isSetImageAttribute()) { 
                        echo("                ImageAttribute\n");
                        $imageAttribute = $describeImageAttributeResult->getImageAttribute();
                        if ($imageAttribute->isSetImageId()) 
                        {
                            echo("                    ImageId\n");
                            echo("                        " . $imageAttribute->getImageId() . "\n");
                        }
                        $launchPermissionList = $imageAttribute->getLaunchPermission();
                        foreach ($launchPermissionList as $launchPermission) {
                            echo("                    LaunchPermission\n");
                            if ($launchPermission->isSetUserId()) 
                            {
                                echo("                        UserId\n");
                                echo("                            " . $launchPermission->getUserId() . "\n");
                            }
                            if ($launchPermission->isSetGroupName()) 
                            {
                                echo("                        GroupName\n");
                                echo("                            " . $launchPermission->getGroupName() . "\n");
                            }
                        }
                        $productCodeList  =  $imageAttribute->getProductCode();
                        foreach ($productCodeList as $productCode) { 
                            echo("                    ProductCode\n");
                            echo("                        " . $productCode);
                        }	
                        if ($imageAttribute->isSetKernelId()) 
                        {
                            echo("                    KernelId\n");
                            echo("                        " . $imageAttribute->getKernelId() . "\n");
                        }
                        if ($imageAttribute->isSetRamdiskId()) 
                        {
                            echo("                    RamdiskId\n");
                            echo("                        " . $imageAttribute->getRamdiskId() . "\n");
                        }
                        if ($imageAttribute->isSetDescription()) 
                        {
                            echo("                    Description\n");
                            echo("                        " . $imageAttribute->getDescription() . "\n");
                        }
                        if ($imageAttribute->isSetBlockDeviceMapping()) { 
                            echo("                    BlockDeviceMapping\n");
                            $blockDeviceMapping = $imageAttribute->getBlockDeviceMapping();
                            if ($blockDeviceMapping->isSetDeviceName()) 
                            {
                                echo("                        DeviceName\n");
                                echo("                            " . $blockDeviceMapping->getDeviceName() . "\n");
                            }
                            if ($blockDeviceMapping->isSetVirtualName()) 
                            {
                                echo("                        VirtualName\n");
                                echo("                            " . $blockDeviceMapping->getVirtualName() . "\n");
                            }
                            if ($blockDeviceMapping->isSetEbs()) { 
                                echo("                        Ebs\n");
                                $ebs = $blockDeviceMapping->getEbs();
                                if ($ebs->isSetSnapshotId()) 
                                {
                                    echo("                            SnapshotId\n");
                                    echo("                                " . $ebs->getSnapshotId() . "\n");
                                }
                                if ($ebs->isSetVolumeSize()) 
                                {
                                    echo("                            VolumeSize\n");
                                    echo("                                " . $ebs->getVolumeSize() . "\n");
                                }
                                if ($ebs->isSetDeleteOnTermination()) 
                                {
                                    echo("                            DeleteOnTermination\n");
                                    echo("                                " . $ebs->getDeleteOnTermination() . "\n");
                                }
                            } 
                            if ($blockDeviceMapping->isSetNoDevice()) 
                            {
                                echo("                        NoDevice\n");
                                echo("                            " . $blockDeviceMapping->getNoDevice() . "\n");
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
                                                                                                                                                                                                                                                