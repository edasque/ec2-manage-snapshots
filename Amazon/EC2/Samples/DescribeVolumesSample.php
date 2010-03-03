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
 * Describe Volumes  Sample
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
 * sample for Describe Volumes Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeVolumesRequest
 // object or array of parameters
 // invokeDescribeVolumes($service, $request);

                                                                                                                                                
/**
  * Describe Volumes Action Sample
  * Describes the status of the indicated or, in lieu of any specified,  all volumes belonging to the caller. Volumes that have been deleted are not described.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeVolumes or array of parameters
  */
  function invokeDescribeVolumes(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeVolumes($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeVolumesResponse\n");
                if ($response->isSetDescribeVolumesResult()) { 
                    echo("            DescribeVolumesResult\n");
                    $describeVolumesResult = $response->getDescribeVolumesResult();
                    $volumeList = $describeVolumesResult->getVolume();
                    foreach ($volumeList as $volume) {
                        echo("                Volume\n");
                        if ($volume->isSetVolumeId()) 
                        {
                            echo("                    VolumeId\n");
                            echo("                        " . $volume->getVolumeId() . "\n");
                        }
                        if ($volume->isSetSize()) 
                        {
                            echo("                    Size\n");
                            echo("                        " . $volume->getSize() . "\n");
                        }
                        if ($volume->isSetSnapshotId()) 
                        {
                            echo("                    SnapshotId\n");
                            echo("                        " . $volume->getSnapshotId() . "\n");
                        }
                        if ($volume->isSetAvailabilityZone()) 
                        {
                            echo("                    AvailabilityZone\n");
                            echo("                        " . $volume->getAvailabilityZone() . "\n");
                        }
                        if ($volume->isSetStatus()) 
                        {
                            echo("                    Status\n");
                            echo("                        " . $volume->getStatus() . "\n");
                        }
                        if ($volume->isSetCreateTime()) 
                        {
                            echo("                    CreateTime\n");
                            echo("                        " . $volume->getCreateTime() . "\n");
                        }
                        $attachmentList = $volume->getAttachment();
                        foreach ($attachmentList as $attachment) {
                            echo("                    Attachment\n");
                            if ($attachment->isSetVolumeId()) 
                            {
                                echo("                        VolumeId\n");
                                echo("                            " . $attachment->getVolumeId() . "\n");
                            }
                            if ($attachment->isSetInstanceId()) 
                            {
                                echo("                        InstanceId\n");
                                echo("                            " . $attachment->getInstanceId() . "\n");
                            }
                            if ($attachment->isSetDevice()) 
                            {
                                echo("                        Device\n");
                                echo("                            " . $attachment->getDevice() . "\n");
                            }
                            if ($attachment->isSetStatus()) 
                            {
                                echo("                        Status\n");
                                echo("                            " . $attachment->getStatus() . "\n");
                            }
                            if ($attachment->isSetAttachTime()) 
                            {
                                echo("                        AttachTime\n");
                                echo("                            " . $attachment->getAttachTime() . "\n");
                            }
                            if ($attachment->isSetDeleteOnTermination()) 
                            {
                                echo("                        DeleteOnTermination\n");
                                echo("                            " . $attachment->getDeleteOnTermination() . "\n");
                            }
                        }
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
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
                                                                                                                                                                                                            