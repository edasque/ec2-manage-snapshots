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
 * Request Spot Instances  Sample
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
 * sample for Request Spot Instances Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_RequestSpotInstancesRequest
 // object or array of parameters
 // invokeRequestSpotInstances($service, $request);

                                                                                                                                                                                                                                                                                                                                
/**
  * Request Spot Instances Action Sample
  * Creates a Spot Instance request. Spot Instances are instances that automatically launch when your
  * request price exceeds the Spot Price that Amazon EC2 periodically calculates.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_RequestSpotInstances or array of parameters
  */
  function invokeRequestSpotInstances(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->requestSpotInstances($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        RequestSpotInstancesResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetRequestSpotInstancesResult()) { 
                    echo("            RequestSpotInstancesResult\n");
                    $requestSpotInstancesResult = $response->getRequestSpotInstancesResult();
                    $spotInstanceRequestList = $requestSpotInstancesResult->getSpotInstanceRequest();
                    foreach ($spotInstanceRequestList as $spotInstanceRequest) {
                        echo("                SpotInstanceRequest\n");
                        if ($spotInstanceRequest->isSetSpotInstanceRequestId()) 
                        {
                            echo("                    SpotInstanceRequestId\n");
                            echo("                        " . $spotInstanceRequest->getSpotInstanceRequestId() . "\n");
                        }
                        if ($spotInstanceRequest->isSetSpotPrice()) 
                        {
                            echo("                    SpotPrice\n");
                            echo("                        " . $spotInstanceRequest->getSpotPrice() . "\n");
                        }
                        if ($spotInstanceRequest->isSetType()) 
                        {
                            echo("                    Type\n");
                            echo("                        " . $spotInstanceRequest->getType() . "\n");
                        }
                        if ($spotInstanceRequest->isSetState()) 
                        {
                            echo("                    State\n");
                            echo("                        " . $spotInstanceRequest->getState() . "\n");
                        }
                        if ($spotInstanceRequest->isSetFault()) { 
                            echo("                    Fault\n");
                            $fault = $spotInstanceRequest->getFault();
                            if ($fault->isSetCode()) 
                            {
                                echo("                        Code\n");
                                echo("                            " . $fault->getCode() . "\n");
                            }
                            if ($fault->isSetMessage()) 
                            {
                                echo("                        Message\n");
                                echo("                            " . $fault->getMessage() . "\n");
                            }
                        } 
                        if ($spotInstanceRequest->isSetValidFrom()) 
                        {
                            echo("                    ValidFrom\n");
                            echo("                        " . $spotInstanceRequest->getValidFrom() . "\n");
                        }
                        if ($spotInstanceRequest->isSetValidUntil()) 
                        {
                            echo("                    ValidUntil\n");
                            echo("                        " . $spotInstanceRequest->getValidUntil() . "\n");
                        }
                        if ($spotInstanceRequest->isSetLaunchGroup()) 
                        {
                            echo("                    LaunchGroup\n");
                            echo("                        " . $spotInstanceRequest->getLaunchGroup() . "\n");
                        }
                        if ($spotInstanceRequest->isSetAvailabilityZoneGroup()) 
                        {
                            echo("                    AvailabilityZoneGroup\n");
                            echo("                        " . $spotInstanceRequest->getAvailabilityZoneGroup() . "\n");
                        }
                        if ($spotInstanceRequest->isSetLaunchSpecification()) { 
                            echo("                    LaunchSpecification\n");
                            $launchSpecification = $spotInstanceRequest->getLaunchSpecification();
                            if ($launchSpecification->isSetImageId()) 
                            {
                                echo("                        ImageId\n");
                                echo("                            " . $launchSpecification->getImageId() . "\n");
                            }
                            if ($launchSpecification->isSetKeyName()) 
                            {
                                echo("                        KeyName\n");
                                echo("                            " . $launchSpecification->getKeyName() . "\n");
                            }
                            $securityGroupList  =  $launchSpecification->getSecurityGroup();
                            foreach ($securityGroupList as $securityGroup) { 
                                echo("                        SecurityGroup\n");
                                echo("                            " . $securityGroup);
                            }	
                            if ($launchSpecification->isSetUserData()) 
                            {
                                echo("                        UserData\n");
                                echo("                            " . $launchSpecification->getUserData() . "\n");
                            }
                            if ($launchSpecification->isSetAddressingType()) 
                            {
                                echo("                        AddressingType\n");
                                echo("                            " . $launchSpecification->getAddressingType() . "\n");
                            }
                            if ($launchSpecification->isSetInstanceType()) 
                            {
                                echo("                        InstanceType\n");
                                echo("                            " . $launchSpecification->getInstanceType() . "\n");
                            }
                            if ($launchSpecification->isSetPlacement()) { 
                                echo("                        Placement\n");
                                $placement = $launchSpecification->getPlacement();
                                if ($placement->isSetAvailabilityZone()) 
                                {
                                    echo("                            AvailabilityZone\n");
                                    echo("                                " . $placement->getAvailabilityZone() . "\n");
                                }
                            } 
                            if ($launchSpecification->isSetKernelId()) 
                            {
                                echo("                        KernelId\n");
                                echo("                            " . $launchSpecification->getKernelId() . "\n");
                            }
                            if ($launchSpecification->isSetRamdiskId()) 
                            {
                                echo("                        RamdiskId\n");
                                echo("                            " . $launchSpecification->getRamdiskId() . "\n");
                            }
                            $blockDeviceMappingList = $launchSpecification->getBlockDeviceMapping();
                            foreach ($blockDeviceMappingList as $blockDeviceMapping) {
                                echo("                        BlockDeviceMapping\n");
                                if ($blockDeviceMapping->isSetDeviceName()) 
                                {
                                    echo("                            DeviceName\n");
                                    echo("                                " . $blockDeviceMapping->getDeviceName() . "\n");
                                }
                                if ($blockDeviceMapping->isSetVirtualName()) 
                                {
                                    echo("                            VirtualName\n");
                                    echo("                                " . $blockDeviceMapping->getVirtualName() . "\n");
                                }
                                if ($blockDeviceMapping->isSetEbs()) { 
                                    echo("                            Ebs\n");
                                    $ebs = $blockDeviceMapping->getEbs();
                                    if ($ebs->isSetSnapshotId()) 
                                    {
                                        echo("                                SnapshotId\n");
                                        echo("                                    " . $ebs->getSnapshotId() . "\n");
                                    }
                                    if ($ebs->isSetVolumeSize()) 
                                    {
                                        echo("                                VolumeSize\n");
                                        echo("                                    " . $ebs->getVolumeSize() . "\n");
                                    }
                                    if ($ebs->isSetDeleteOnTermination()) 
                                    {
                                        echo("                                DeleteOnTermination\n");
                                        echo("                                    " . $ebs->getDeleteOnTermination() . "\n");
                                    }
                                } 
                                if ($blockDeviceMapping->isSetNoDevice()) 
                                {
                                    echo("                            NoDevice\n");
                                    echo("                                " . $blockDeviceMapping->getNoDevice() . "\n");
                                }
                            }
                            if ($launchSpecification->isSetMonitoring()) { 
                                echo("                        Monitoring\n");
                                $monitoring = $launchSpecification->getMonitoring();
                                if ($monitoring->isSetEnabled()) 
                                {
                                    echo("                            Enabled\n");
                                    echo("                                " . $monitoring->getEnabled() . "\n");
                                }
                            } 
                            if ($launchSpecification->isSetSubnetId()) 
                            {
                                echo("                        SubnetId\n");
                                echo("                            " . $launchSpecification->getSubnetId() . "\n");
                            }
                        } 
                        if ($spotInstanceRequest->isSetInstanceId()) 
                        {
                            echo("                    InstanceId\n");
                            echo("                        " . $spotInstanceRequest->getInstanceId() . "\n");
                        }
                        if ($spotInstanceRequest->isSetCreateTime()) 
                        {
                            echo("                    CreateTime\n");
                            echo("                        " . $spotInstanceRequest->getCreateTime() . "\n");
                        }
                        if ($spotInstanceRequest->isSetProductDescription()) 
                        {
                            echo("                    ProductDescription\n");
                            echo("                        " . $spotInstanceRequest->getProductDescription() . "\n");
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
                            