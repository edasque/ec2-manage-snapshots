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
 * Run Instances  Sample
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
 * sample for Run Instances Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_RunInstancesRequest
 // object or array of parameters
 // invokeRunInstances($service, $request);

                                                                                                                                                                                                        
/**
  * Run Instances Action Sample
  * The RunInstances operation launches a specified number of instances.
  * If Amazon EC2 cannot launch the minimum number AMIs you request, no instances
  * launch. If there is insufficient capacity to launch the maximum number of AMIs
  * you request, Amazon EC2 launches as many as possible to satisfy the requested
  * maximum values.
  * Every instance is launched in a security group. If you do not specify a
  * security group at launch, the instances start in your default security group.
  * For more information on creating security groups, see CreateSecurityGroup.
  * An optional instance type can be specified. For information about instance
  * types, see Instance Types.
  * You can provide an optional key pair ID for each image in the launch request
  * (for more information, see CreateKeyPair). All instances that are created from
  * images that use this key pair will have access to the associated public key at
  * boot. You can use this key to provide secure access to an instance of an image
  * on a per-instance basis. Amazon EC2 public images use this feature to provide
  * secure access without passwords.
  * Important:
  * Launching public images without a key pair ID will leave them inaccessible.
  * The public key material is made available to the instance at boot time by
  * placing it in the openssh_id.pub file on a logical device that is exposed to
  * the instance as /dev/sda2 (the ephemeral store). The format of this file is
  * suitable for use as an entry within ~/.ssh/authorized_keys (the OpenSSH
  * format). This can be done at boot (e.g., as part of rc.local) allowing for
  * secure access without passwords.
  * Optional user data can be provided in the launch request. All instances that
  * collectively comprise the launch request have access to this data For more
  * information, see Instance Metadata.
  * Note:
  * If any of the AMIs have a product code attached for which the user has not
  * subscribed, the RunInstances call will fail.
  * Important:
  * We strongly recommend using the 2.6.18 Xen stock kernel with the c1.medium and
  * c1.xlarge instances. Although the default Amazon EC2 kernels will work, the new
  * kernels provide greater stability and performance for these instance types. For
  * more information about kernels, see Kernels, RAM Disks, and Block Device
  * Mappings.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_RunInstances or array of parameters
  */
  function invokeRunInstances(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->runInstances($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        RunInstancesResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetRunInstancesResult()) { 
                    echo("            RunInstancesResult\n");
                    $runInstancesResult = $response->getRunInstancesResult();
                    if ($runInstancesResult->isSetReservation()) { 
                        echo("                Reservation\n");
                        $reservation = $runInstancesResult->getReservation();
                        if ($reservation->isSetReservationId()) 
                        {
                            echo("                    ReservationId\n");
                            echo("                        " . $reservation->getReservationId() . "\n");
                        }
                        if ($reservation->isSetOwnerId()) 
                        {
                            echo("                    OwnerId\n");
                            echo("                        " . $reservation->getOwnerId() . "\n");
                        }
                        if ($reservation->isSetRequesterId()) 
                        {
                            echo("                    RequesterId\n");
                            echo("                        " . $reservation->getRequesterId() . "\n");
                        }
                        $groupNameList  =  $reservation->getGroupName();
                        foreach ($groupNameList as $groupName) { 
                            echo("                    GroupName\n");
                            echo("                        " . $groupName);
                        }	
                        $runningInstanceList = $reservation->getRunningInstance();
                        foreach ($runningInstanceList as $runningInstance) {
                            echo("                    RunningInstance\n");
                            if ($runningInstance->isSetInstanceId()) 
                            {
                                echo("                        InstanceId\n");
                                echo("                            " . $runningInstance->getInstanceId() . "\n");
                            }
                            if ($runningInstance->isSetImageId()) 
                            {
                                echo("                        ImageId\n");
                                echo("                            " . $runningInstance->getImageId() . "\n");
                            }
                            if ($runningInstance->isSetInstanceState()) { 
                                echo("                        InstanceState\n");
                                $instanceState = $runningInstance->getInstanceState();
                                if ($instanceState->isSetCode()) 
                                {
                                    echo("                            Code\n");
                                    echo("                                " . $instanceState->getCode() . "\n");
                                }
                                if ($instanceState->isSetName()) 
                                {
                                    echo("                            Name\n");
                                    echo("                                " . $instanceState->getName() . "\n");
                                }
                            } 
                            if ($runningInstance->isSetPrivateDnsName()) 
                            {
                                echo("                        PrivateDnsName\n");
                                echo("                            " . $runningInstance->getPrivateDnsName() . "\n");
                            }
                            if ($runningInstance->isSetPublicDnsName()) 
                            {
                                echo("                        PublicDnsName\n");
                                echo("                            " . $runningInstance->getPublicDnsName() . "\n");
                            }
                            if ($runningInstance->isSetStateTransitionReason()) 
                            {
                                echo("                        StateTransitionReason\n");
                                echo("                            " . $runningInstance->getStateTransitionReason() . "\n");
                            }
                            if ($runningInstance->isSetKeyName()) 
                            {
                                echo("                        KeyName\n");
                                echo("                            " . $runningInstance->getKeyName() . "\n");
                            }
                            if ($runningInstance->isSetAmiLaunchIndex()) 
                            {
                                echo("                        AmiLaunchIndex\n");
                                echo("                            " . $runningInstance->getAmiLaunchIndex() . "\n");
                            }
                            $productCodeList  =  $runningInstance->getProductCode();
                            foreach ($productCodeList as $productCode) { 
                                echo("                        ProductCode\n");
                                echo("                            " . $productCode);
                            }	
                            if ($runningInstance->isSetInstanceType()) 
                            {
                                echo("                        InstanceType\n");
                                echo("                            " . $runningInstance->getInstanceType() . "\n");
                            }
                            if ($runningInstance->isSetLaunchTime()) 
                            {
                                echo("                        LaunchTime\n");
                                echo("                            " . $runningInstance->getLaunchTime() . "\n");
                            }
                            if ($runningInstance->isSetPlacement()) { 
                                echo("                        Placement\n");
                                $placement = $runningInstance->getPlacement();
                                if ($placement->isSetAvailabilityZone()) 
                                {
                                    echo("                            AvailabilityZone\n");
                                    echo("                                " . $placement->getAvailabilityZone() . "\n");
                                }
                            } 
                            if ($runningInstance->isSetKernelId()) 
                            {
                                echo("                        KernelId\n");
                                echo("                            " . $runningInstance->getKernelId() . "\n");
                            }
                            if ($runningInstance->isSetRamdiskId()) 
                            {
                                echo("                        RamdiskId\n");
                                echo("                            " . $runningInstance->getRamdiskId() . "\n");
                            }
                            if ($runningInstance->isSetPlatform()) 
                            {
                                echo("                        Platform\n");
                                echo("                            " . $runningInstance->getPlatform() . "\n");
                            }
                            if ($runningInstance->isSetMonitoring()) { 
                                echo("                        Monitoring\n");
                                $monitoring = $runningInstance->getMonitoring();
                                if ($monitoring->isSetMonitoringState()) 
                                {
                                    echo("                            MonitoringState\n");
                                    echo("                                " . $monitoring->getMonitoringState() . "\n");
                                }
                            } 
                            if ($runningInstance->isSetSubnetId()) 
                            {
                                echo("                        SubnetId\n");
                                echo("                            " . $runningInstance->getSubnetId() . "\n");
                            }
                            if ($runningInstance->isSetVpcId()) 
                            {
                                echo("                        VpcId\n");
                                echo("                            " . $runningInstance->getVpcId() . "\n");
                            }
                            if ($runningInstance->isSetPrivateIpAddress()) 
                            {
                                echo("                        PrivateIpAddress\n");
                                echo("                            " . $runningInstance->getPrivateIpAddress() . "\n");
                            }
                            if ($runningInstance->isSetIpAddress()) 
                            {
                                echo("                        IpAddress\n");
                                echo("                            " . $runningInstance->getIpAddress() . "\n");
                            }
                            if ($runningInstance->isSetStateReason()) { 
                                echo("                        StateReason\n");
                                $stateReason = $runningInstance->getStateReason();
                                if ($stateReason->isSetCode()) 
                                {
                                    echo("                            Code\n");
                                    echo("                                " . $stateReason->getCode() . "\n");
                                }
                                if ($stateReason->isSetMessage()) 
                                {
                                    echo("                            Message\n");
                                    echo("                                " . $stateReason->getMessage() . "\n");
                                }
                            } 
                            if ($runningInstance->isSetArchitecture()) 
                            {
                                echo("                        Architecture\n");
                                echo("                            " . $runningInstance->getArchitecture() . "\n");
                            }
                            if ($runningInstance->isSetRootDeviceType()) 
                            {
                                echo("                        RootDeviceType\n");
                                echo("                            " . $runningInstance->getRootDeviceType() . "\n");
                            }
                            if ($runningInstance->isSetRootDeviceName()) 
                            {
                                echo("                        RootDeviceName\n");
                                echo("                            " . $runningInstance->getRootDeviceName() . "\n");
                            }
                            $blockDeviceMappingList = $runningInstance->getBlockDeviceMapping();
                            foreach ($blockDeviceMappingList as $blockDeviceMapping) {
                                echo("                        BlockDeviceMapping\n");
                                if ($blockDeviceMapping->isSetDeviceName()) 
                                {
                                    echo("                            DeviceName\n");
                                    echo("                                " . $blockDeviceMapping->getDeviceName() . "\n");
                                }
                                if ($blockDeviceMapping->isSetEbs()) { 
                                    echo("                            Ebs\n");
                                    $ebs = $blockDeviceMapping->getEbs();
                                    if ($ebs->isSetVolumeId()) 
                                    {
                                        echo("                                VolumeId\n");
                                        echo("                                    " . $ebs->getVolumeId() . "\n");
                                    }
                                    if ($ebs->isSetStatus()) 
                                    {
                                        echo("                                Status\n");
                                        echo("                                    " . $ebs->getStatus() . "\n");
                                    }
                                    if ($ebs->isSetAttachTime()) 
                                    {
                                        echo("                                AttachTime\n");
                                        echo("                                    " . $ebs->getAttachTime() . "\n");
                                    }
                                    if ($ebs->isSetDeleteOnTermination()) 
                                    {
                                        echo("                                DeleteOnTermination\n");
                                        echo("                                    " . $ebs->getDeleteOnTermination() . "\n");
                                    }
                                } 
                            }
                            if ($runningInstance->isSetInstanceLifecycle()) 
                            {
                                echo("                        InstanceLifecycle\n");
                                echo("                            " . $runningInstance->getInstanceLifecycle() . "\n");
                            }
                            if ($runningInstance->isSetSpotInstanceRequestId()) 
                            {
                                echo("                        SpotInstanceRequestId\n");
                                echo("                            " . $runningInstance->getSpotInstanceRequestId() . "\n");
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
                                                                                                                                                    