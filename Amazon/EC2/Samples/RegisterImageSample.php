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
 * Register Image  Sample
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
 * sample for Register Image Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_RegisterImageRequest
 // object or array of parameters
 // invokeRegisterImage($service, $request);

                                                                                                                                                                                    
/**
  * Register Image Action Sample
  * The RegisterImage operation registers an AMI with Amazon EC2. Images must be
  * registered before they can be launched. For more information, see RunInstances.
  * Each AMI is associated with an unique ID which is provided by the Amazon EC2
  * service through the RegisterImage operation. During registration, Amazon EC2
  * retrieves the specified image manifest from Amazon S3 and verifies that the
  * image is owned by the user registering the image.
  * The image manifest is retrieved once and stored within the Amazon EC2. Any
  * modifications to an image in Amazon S3 invalidates this registration. If you
  * make changes to an image, deregister the previous image and register the new
  * image. For more information, see DeregisterImage.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_RegisterImage or array of parameters
  */
  function invokeRegisterImage(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->registerImage($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        RegisterImageResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetRegisterImageResult()) { 
                    echo("            RegisterImageResult\n");
                    $registerImageResult = $response->getRegisterImageResult();
                    if ($registerImageResult->isSetImageId()) 
                    {
                        echo("                ImageId\n");
                        echo("                    " . $registerImageResult->getImageId() . "\n");
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
                                                                                                                                                                        