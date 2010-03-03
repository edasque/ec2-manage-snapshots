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
 * Describe Security Groups  Sample
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
 * sample for Describe Security Groups Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_DescribeSecurityGroupsRequest
 // object or array of parameters
 // invokeDescribeSecurityGroups($service, $request);

                                                                                                                                        
/**
  * Describe Security Groups Action Sample
  * The DescribeSecurityGroups operation returns information about security groups
  * that you own.
  * If you specify security group names, information about those security group is
  * returned. Otherwise, information for all security group is returned. If you
  * specify a group that does not exist, a fault is returned.  
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_DescribeSecurityGroups or array of parameters
  */
  function invokeDescribeSecurityGroups(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->describeSecurityGroups($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        DescribeSecurityGroupsResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 
                if ($response->isSetDescribeSecurityGroupsResult()) { 
                    echo("            DescribeSecurityGroupsResult\n");
                    $describeSecurityGroupsResult = $response->getDescribeSecurityGroupsResult();
                    $securityGroupList = $describeSecurityGroupsResult->getSecurityGroup();
                    foreach ($securityGroupList as $securityGroup) {
                        echo("                SecurityGroup\n");
                        if ($securityGroup->isSetOwnerId()) 
                        {
                            echo("                    OwnerId\n");
                            echo("                        " . $securityGroup->getOwnerId() . "\n");
                        }
                        if ($securityGroup->isSetGroupName()) 
                        {
                            echo("                    GroupName\n");
                            echo("                        " . $securityGroup->getGroupName() . "\n");
                        }
                        if ($securityGroup->isSetGroupDescription()) 
                        {
                            echo("                    GroupDescription\n");
                            echo("                        " . $securityGroup->getGroupDescription() . "\n");
                        }
                        $ipPermissionList = $securityGroup->getIpPermission();
                        foreach ($ipPermissionList as $ipPermission) {
                            echo("                    IpPermission\n");
                            if ($ipPermission->isSetIpProtocol()) 
                            {
                                echo("                        IpProtocol\n");
                                echo("                            " . $ipPermission->getIpProtocol() . "\n");
                            }
                            if ($ipPermission->isSetFromPort()) 
                            {
                                echo("                        FromPort\n");
                                echo("                            " . $ipPermission->getFromPort() . "\n");
                            }
                            if ($ipPermission->isSetToPort()) 
                            {
                                echo("                        ToPort\n");
                                echo("                            " . $ipPermission->getToPort() . "\n");
                            }
                            $userIdGroupPairList = $ipPermission->getUserIdGroupPair();
                            foreach ($userIdGroupPairList as $userIdGroupPair) {
                                echo("                        UserIdGroupPair\n");
                                if ($userIdGroupPair->isSetUserId()) 
                                {
                                    echo("                            UserId\n");
                                    echo("                                " . $userIdGroupPair->getUserId() . "\n");
                                }
                                if ($userIdGroupPair->isSetGroupName()) 
                                {
                                    echo("                            GroupName\n");
                                    echo("                                " . $userIdGroupPair->getGroupName() . "\n");
                                }
                            }
                            $ipRangeList  =  $ipPermission->getIpRange();
                            foreach ($ipRangeList as $ipRange) { 
                                echo("                        IpRange\n");
                                echo("                            " . $ipRange);
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
                                                                                                                                                                                                                    