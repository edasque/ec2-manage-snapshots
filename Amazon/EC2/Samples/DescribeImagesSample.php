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
 * Describe Images  Sample
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
 * sample for Describe Images Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeImagesRequest
 // object or array of parameters
 // invokeDescribeImages($service, $request);

                                                                                                                
/**
  * Describe Images Action Sample
  * The DescribeImages operation returns information about AMIs, AKIs, and ARIs
  * available to the user. Information returned includes image type, product codes,
  * architecture, and kernel and RAM disk IDs. Images available to the user include
  * public images available for any user to launch, private images owned by the
  * user making the request, and private images owned by other users for which the
  * user has explicit launch permissions.
  * Launch permissions fall into three categories:
  * Public:
  * The owner of the AMI granted launch permissions for the AMI to the all group.
  * All users have launch permissions for these AMIs.
  * Explicit:
  * The owner of the AMI granted launch permissions to a specific user.
  * Implicit:
  * A user has implicit launch permissions for all AMIs he or she owns.
  * The list of AMIs returned can be modified by specifying AMI IDs, AMI owners, or
  * users with launch permissions. If no options are specified, Amazon EC2 returns
  * all AMIs for which the user has launch permissions.
  * If you specify one or more AMI IDs, only AMIs that have the specified IDs are
  * returned. If you specify an invalid AMI ID, a fault is returned. If you specify
  * an AMI ID for which you do not have access, it will not be included in the
  * returned results.
  * If you specify one or more AMI owners, only AMIs from the specified owners and
  * for which you have access are returned. The results can include the account IDs
  * of the specified owners, amazon for AMIs owned by Amazon or self for AMIs that
  * you own.
  * If you specify a list of executable users, only users that have launch
  * permissions for the AMIs are returned. You can specify account IDs (if you own
  * the AMI(s)), self for AMIs for which you own or have explicit permissions, or
  * all for public AMIs.
  * Note:
  * Deregistered images are included in the returned results for an unspecified
  * interval after deregistration.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeImages or array of parameters
  */
  function invokeDescribeImages(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeImages($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeImagesResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeImagesResult()) { 
                    echo("            DescribeImagesResult\n");
                    $describeImagesResult = $response->getDescribeImagesResult();
                    $imageList = $describeImagesResult->getImage();
                    foreach ($imageList as $image) {
                        echo("                Image\n");
                        if ($image->isSetImageId()) 
                        {
                            echo("                    ImageId\n");
                            echo("                        " . $image->getImageId() . "\n");
                        }
                        if ($image->isSetImageLocation()) 
                        {
                            echo("                    ImageLocation\n");
                            echo("                        " . $image->getImageLocation() . "\n");
                        }
                        if ($image->isSetImageState()) 
                        {
                            echo("                    ImageState\n");
                            echo("                        " . $image->getImageState() . "\n");
                        }
                        if ($image->isSetOwnerId()) 
                        {
                            echo("                    OwnerId\n");
                            echo("                        " . $image->getOwnerId() . "\n");
                        }
                        if ($image->isSetVisibility()) 
                        {
                            echo("                    Visibility\n");
                            echo("                        " . $image->getVisibility() . "\n");
                        }
                        $productCodeList  =  $image->getProductCode();
                        foreach ($productCodeList as $productCode) { 
                            echo("                    ProductCode\n");
                            echo("                        " . $productCode);
                        }	
                        if ($image->isSetArchitecture()) 
                        {
                            echo("                    Architecture\n");
                            echo("                        " . $image->getArchitecture() . "\n");
                        }
                        if ($image->isSetImageType()) 
                        {
                            echo("                    ImageType\n");
                            echo("                        " . $image->getImageType() . "\n");
                        }
                        if ($image->isSetKernelId()) 
                        {
                            echo("                    KernelId\n");
                            echo("                        " . $image->getKernelId() . "\n");
                        }
                        if ($image->isSetRamdiskId()) 
                        {
                            echo("                    RamdiskId\n");
                            echo("                        " . $image->getRamdiskId() . "\n");
                        }
                        if ($image->isSetPlatform()) 
                        {
                            echo("                    Platform\n");
                            echo("                        " . $image->getPlatform() . "\n");
                        }
                        if ($image->isSetStateReason()) { 
                            echo("                    StateReason\n");
                            $stateReason = $image->getStateReason();
                            if ($stateReason->isSetCode()) 
                            {
                                echo("                        Code\n");
                                echo("                            " . $stateReason->getCode() . "\n");
                            }
                            if ($stateReason->isSetMessage()) 
                            {
                                echo("                        Message\n");
                                echo("                            " . $stateReason->getMessage() . "\n");
                            }
                        } 
                        if ($image->isSetImageOwnerAlias()) 
                        {
                            echo("                    ImageOwnerAlias\n");
                            echo("                        " . $image->getImageOwnerAlias() . "\n");
                        }
                        if ($image->isSetName()) 
                        {
                            echo("                    Name\n");
                            echo("                        " . $image->getName() . "\n");
                        }
                        if ($image->isSetDescription()) 
                        {
                            echo("                    Description\n");
                            echo("                        " . $image->getDescription() . "\n");
                        }
                        if ($image->isSetRootDeviceType()) 
                        {
                            echo("                    RootDeviceType\n");
                            echo("                        " . $image->getRootDeviceType() . "\n");
                        }
                        if ($image->isSetRootDeviceName()) 
                        {
                            echo("                    RootDeviceName\n");
                            echo("                        " . $image->getRootDeviceName() . "\n");
                        }
                        $blockDeviceMappingList = $image->getBlockDeviceMapping();
                        foreach ($blockDeviceMappingList as $blockDeviceMapping) {
                            echo("                    BlockDeviceMapping\n");
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
                                                                                                                                                                                                                                            