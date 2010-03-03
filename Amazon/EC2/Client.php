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
 *  @see Amazon_EC2_Interface
 */
require_once ('Amazon/EC2/Interface.php');

/**
 * The Amazon Elastic Compute Cloud (Amazon EC2) web service provides you with
 * the ability to execute your applications in Amazon's computing environment.
 * To use Amazon EC2 you simply:
 * 1. Create an Amazon Machine Image (AMI) containing all your software, including
 * your operating system and associated configuration settings, applications,
 * libraries, etc. Think of this as zipping up the contents of your hard drive. We
 * provide all the necessary tools to create and package your AMI.
 * 2. Upload this AMI to the Amazon S3 (Amazon Simple Storage Service) service. This
 * gives us reliable, secure access to your AMI.
 * 3. Register your AMI with Amazon EC2. This allows us to verify that your AMI has
 * been uploaded correctly and to allocate a unique identifier for it.
 * 4. Use this AMI ID and the Amazon EC2 web service APIs to run, monitor, and
 * terminate as many instances of this AMI as required.
 * You can also skip the first three steps and choose to launch an AMI that is
 * provided by Amazon or shared by another user.
 * While instances are running, you are billed for the computing and network
 * resources that they consume.
 * You can also skip the first three steps and choose to launch an AMI that is
 * provided by Amazon or shared by another user.
 * While instances are running, you are billed for the computing and network
 * resources that they consume.
 * Amazon_EC2_Client is an implementation of Amazon_EC2
 *
 */
class Amazon_EC2_Client implements Amazon_EC2_Interface
{

    const SERVICE_VERSION = '2009-11-30';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://ec2.amazonaws.com',
                               'UserAgent' => 'Amazon EC2 PHP5 Library',
                               'SignatureVersion' => 2,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'MaxErrorRetry' => 3
                               );

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
    }

    // Public API ------------------------------------------------------------//


            
    /**
     * Allocate Address 
     * The AllocateAddress operation acquires an elastic IP address for use with your
     * account.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-AllocateAddress.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_AllocateAddressRequest request
     * or Amazon_EC2_Model_AllocateAddressRequest object itself
     * @see Amazon_EC2_Model_AllocateAddress
     * @return Amazon_EC2_Model_AllocateAddressResponse Amazon_EC2_Model_AllocateAddressResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function allocateAddress($request)
    {
        if (!$request instanceof Amazon_EC2_Model_AllocateAddressRequest) {
            require_once ('Amazon/EC2/Model/AllocateAddressRequest.php');
            $request = new Amazon_EC2_Model_AllocateAddressRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/AllocateAddressResponse.php');
        return Amazon_EC2_Model_AllocateAddressResponse::fromXML($this->_invoke($this->_convertAllocateAddress($request)));
}


            
    /**
     * Associate Address 
     * The AssociateAddress operation associates an elastic IP address with an
     * instance.
     * If the IP address is currently assigned to another instance, the IP address is
     * assigned to the new instance. This is an idempotent operation. If you enter it
     * more than once, Amazon EC2 does not return an error.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-AssociateAddress.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_AssociateAddressRequest request
     * or Amazon_EC2_Model_AssociateAddressRequest object itself
     * @see Amazon_EC2_Model_AssociateAddress
     * @return Amazon_EC2_Model_AssociateAddressResponse Amazon_EC2_Model_AssociateAddressResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function associateAddress($request)
    {
        if (!$request instanceof Amazon_EC2_Model_AssociateAddressRequest) {
            require_once ('Amazon/EC2/Model/AssociateAddressRequest.php');
            $request = new Amazon_EC2_Model_AssociateAddressRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/AssociateAddressResponse.php');
        return Amazon_EC2_Model_AssociateAddressResponse::fromXML($this->_invoke($this->_convertAssociateAddress($request)));
}


            
    /**
     * Attach Volume 
     * Attach a previously created volume to a running instance.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-AttachVolume.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_AttachVolumeRequest request
     * or Amazon_EC2_Model_AttachVolumeRequest object itself
     * @see Amazon_EC2_Model_AttachVolume
     * @return Amazon_EC2_Model_AttachVolumeResponse Amazon_EC2_Model_AttachVolumeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function attachVolume($request)
    {
        if (!$request instanceof Amazon_EC2_Model_AttachVolumeRequest) {
            require_once ('Amazon/EC2/Model/AttachVolumeRequest.php');
            $request = new Amazon_EC2_Model_AttachVolumeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/AttachVolumeResponse.php');
        return Amazon_EC2_Model_AttachVolumeResponse::fromXML($this->_invoke($this->_convertAttachVolume($request)));
}


            
    /**
     * Authorize Security Group Ingress 
     * The AuthorizeSecurityGroupIngress operation adds permissions to a security
     * group.
     * Permissions are specified by the IP protocol (TCP, UDP or ICMP), the source of
     * the request (by IP range or an Amazon EC2 user-group pair), the source and
     * destination port ranges (for TCP and UDP), and the ICMP codes and types (for
     * ICMP). When authorizing ICMP, -1 can be used as a wildcard in the type and code
     * fields.
     * Permission changes are propagated to instances within the security group as
     * quickly as possible. However, depending on the number of instances, a small
     * delay might occur.
     * When authorizing a user/group pair permission, GroupName,
     * SourceSecurityGroupName and SourceSecurityGroupOwnerId must be specified. When
     * authorizing a CIDR IP permission, GroupName, IpProtocol, FromPort, ToPort and
     * CidrIp must be specified. Mixing these two types of parameters is not allowed.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-AuthorizeSecurityGroupIngress.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_AuthorizeSecurityGroupIngressRequest request
     * or Amazon_EC2_Model_AuthorizeSecurityGroupIngressRequest object itself
     * @see Amazon_EC2_Model_AuthorizeSecurityGroupIngress
     * @return Amazon_EC2_Model_AuthorizeSecurityGroupIngressResponse Amazon_EC2_Model_AuthorizeSecurityGroupIngressResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function authorizeSecurityGroupIngress($request)
    {
        if (!$request instanceof Amazon_EC2_Model_AuthorizeSecurityGroupIngressRequest) {
            require_once ('Amazon/EC2/Model/AuthorizeSecurityGroupIngressRequest.php');
            $request = new Amazon_EC2_Model_AuthorizeSecurityGroupIngressRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/AuthorizeSecurityGroupIngressResponse.php');
        return Amazon_EC2_Model_AuthorizeSecurityGroupIngressResponse::fromXML($this->_invoke($this->_convertAuthorizeSecurityGroupIngress($request)));
}


            
    /**
     * Bundle Instance 
     * The BundleInstance operation request that an instance is bundled the next time it boots.
     * The bundling process creates a new image from a running instance and stores
     * the AMI data in S3. Once bundled, the image must be registered in the normal
     * way using the RegisterImage API.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-BundleInstance.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_BundleInstanceRequest request
     * or Amazon_EC2_Model_BundleInstanceRequest object itself
     * @see Amazon_EC2_Model_BundleInstance
     * @return Amazon_EC2_Model_BundleInstanceResponse Amazon_EC2_Model_BundleInstanceResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function bundleInstance($request)
    {
        if (!$request instanceof Amazon_EC2_Model_BundleInstanceRequest) {
            require_once ('Amazon/EC2/Model/BundleInstanceRequest.php');
            $request = new Amazon_EC2_Model_BundleInstanceRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/S3Storage.php');
        $s3 = $request->Storage->S3;

        if (!$s3->isSetUploadPolicy()) {
            $s3->AWSAccessKeyId = $this->_awsAccessKeyId;
            require_once ('Amazon/EC2/Util/S3UploadPolicy.php');
            $policy = new Amazon_EC2_Util_S3UploadPolicy($this->_awsAccessKeyId,
            $this->_awsSecretAccessKey, $s3->Bucket, $s3->Prefix, 1440);
            $s3->UploadPolicy = $policy->getPolicyString();
            $s3->UploadPolicySignature = $policy->getPolicySignature();
            $storage = $request->Storage;
            $request->Storage = $storage->withS3($s3);
        }

        
        require_once ('Amazon/EC2/Model/BundleInstanceResponse.php');
        return Amazon_EC2_Model_BundleInstanceResponse::fromXML($this->_invoke($this->_convertBundleInstance($request)));
}


            
    /**
     * Cancel Bundle Task 
     * CancelBundleTask operation cancels a pending or
     * in-progress bundling task. This is an asynchronous
     * call and it make take a while for the task to be cancelled.
     * If a task is cancelled while it is storing items,
     * there may be parts of the incomplete AMI stored in S3.
     * It is up to the caller to clean up these parts from S3.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CancelBundleTask.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CancelBundleTaskRequest request
     * or Amazon_EC2_Model_CancelBundleTaskRequest object itself
     * @see Amazon_EC2_Model_CancelBundleTask
     * @return Amazon_EC2_Model_CancelBundleTaskResponse Amazon_EC2_Model_CancelBundleTaskResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function cancelBundleTask($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CancelBundleTaskRequest) {
            require_once ('Amazon/EC2/Model/CancelBundleTaskRequest.php');
            $request = new Amazon_EC2_Model_CancelBundleTaskRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CancelBundleTaskResponse.php');
        return Amazon_EC2_Model_CancelBundleTaskResponse::fromXML($this->_invoke($this->_convertCancelBundleTask($request)));
}


            
    /**
     * Confirm Product Instance 
     * The ConfirmProductInstance operation returns true if the specified product code
     * is attached to the specified instance. The operation returns false if the
     * product code is not attached to the instance.
     * The ConfirmProductInstance operation can only be executed by the owner of the
     * AMI. This feature is useful when an AMI owner is providing support and wants to
     * verify whether a user's instance is eligible.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ConfirmProductInstance.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ConfirmProductInstanceRequest request
     * or Amazon_EC2_Model_ConfirmProductInstanceRequest object itself
     * @see Amazon_EC2_Model_ConfirmProductInstance
     * @return Amazon_EC2_Model_ConfirmProductInstanceResponse Amazon_EC2_Model_ConfirmProductInstanceResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function confirmProductInstance($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ConfirmProductInstanceRequest) {
            require_once ('Amazon/EC2/Model/ConfirmProductInstanceRequest.php');
            $request = new Amazon_EC2_Model_ConfirmProductInstanceRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ConfirmProductInstanceResponse.php');
        return Amazon_EC2_Model_ConfirmProductInstanceResponse::fromXML($this->_invoke($this->_convertConfirmProductInstance($request)));
}


            
    /**
     * Create Image 
     * Creates an AMI that uses an Amazon EBS root device from a "running" or "stopped" instance.
     * AMIs that use an Amazon EBS root device boot faster than AMIs that use instance stores. They can be
     * up to 1 TiB in size, use storage that persists on instance failure, and can be stopped and started.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateImage.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateImageRequest request
     * or Amazon_EC2_Model_CreateImageRequest object itself
     * @see Amazon_EC2_Model_CreateImage
     * @return Amazon_EC2_Model_CreateImageResponse Amazon_EC2_Model_CreateImageResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createImage($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateImageRequest) {
            require_once ('Amazon/EC2/Model/CreateImageRequest.php');
            $request = new Amazon_EC2_Model_CreateImageRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateImageResponse.php');
        return Amazon_EC2_Model_CreateImageResponse::fromXML($this->_invoke($this->_convertCreateImage($request)));
}


            
    /**
     * Create Key Pair 
     * The CreateKeyPair operation creates a new 2048 bit RSA key pair and returns a
     * unique ID that can be used to reference this key pair when launching new
     * instances. For more information, see RunInstances.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateKeyPair.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateKeyPairRequest request
     * or Amazon_EC2_Model_CreateKeyPairRequest object itself
     * @see Amazon_EC2_Model_CreateKeyPair
     * @return Amazon_EC2_Model_CreateKeyPairResponse Amazon_EC2_Model_CreateKeyPairResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createKeyPair($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateKeyPairRequest) {
            require_once ('Amazon/EC2/Model/CreateKeyPairRequest.php');
            $request = new Amazon_EC2_Model_CreateKeyPairRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateKeyPairResponse.php');
        return Amazon_EC2_Model_CreateKeyPairResponse::fromXML($this->_invoke($this->_convertCreateKeyPair($request)));
}


            
    /**
     * Create Security Group 
     * The CreateSecurityGroup operation creates a new security group.
     * Every instance is launched in a security group. If no security group is
     * specified during launch, the instances are launched in the default security
     * group. Instances within the same security group have unrestricted network
     * access to each other. Instances will reject network access attempts from other
     * instances in a different security group. As the owner of instances you can
     * grant or revoke specific permissions using the AuthorizeSecurityGroupIngress
     * and RevokeSecurityGroupIngress operations.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateSecurityGroup.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateSecurityGroupRequest request
     * or Amazon_EC2_Model_CreateSecurityGroupRequest object itself
     * @see Amazon_EC2_Model_CreateSecurityGroup
     * @return Amazon_EC2_Model_CreateSecurityGroupResponse Amazon_EC2_Model_CreateSecurityGroupResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createSecurityGroup($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateSecurityGroupRequest) {
            require_once ('Amazon/EC2/Model/CreateSecurityGroupRequest.php');
            $request = new Amazon_EC2_Model_CreateSecurityGroupRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateSecurityGroupResponse.php');
        return Amazon_EC2_Model_CreateSecurityGroupResponse::fromXML($this->_invoke($this->_convertCreateSecurityGroup($request)));
}


            
    /**
     * Create Snapshot 
     * Create a snapshot of the volume identified by volume ID. A volume does not have to be detached
     * at the time the snapshot is taken.
     * Important Note:
     * Snapshot creation requires that the system is in a consistent state.
     * For instance, this means that if taking a snapshot of a database, the tables must
     * be read-only locked to ensure that the snapshot will not contain a corrupted
     * version of the database.  Therefore, be careful when using this API to ensure that
     * the system remains in the consistent state until the create snapshot status
     * has returned.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateSnapshot.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateSnapshotRequest request
     * or Amazon_EC2_Model_CreateSnapshotRequest object itself
     * @see Amazon_EC2_Model_CreateSnapshot
     * @return Amazon_EC2_Model_CreateSnapshotResponse Amazon_EC2_Model_CreateSnapshotResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createSnapshot($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateSnapshotRequest) {
            require_once ('Amazon/EC2/Model/CreateSnapshotRequest.php');
            $request = new Amazon_EC2_Model_CreateSnapshotRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateSnapshotResponse.php');
        return Amazon_EC2_Model_CreateSnapshotResponse::fromXML($this->_invoke($this->_convertCreateSnapshot($request)));
}


            
    /**
     * Create Volume 
     * Initializes an empty volume of a given size
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateVolume.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateVolumeRequest request
     * or Amazon_EC2_Model_CreateVolumeRequest object itself
     * @see Amazon_EC2_Model_CreateVolume
     * @return Amazon_EC2_Model_CreateVolumeResponse Amazon_EC2_Model_CreateVolumeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createVolume($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateVolumeRequest) {
            require_once ('Amazon/EC2/Model/CreateVolumeRequest.php');
            $request = new Amazon_EC2_Model_CreateVolumeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateVolumeResponse.php');
        return Amazon_EC2_Model_CreateVolumeResponse::fromXML($this->_invoke($this->_convertCreateVolume($request)));
}


            
    /**
     * Delete Key Pair 
     * The DeleteKeyPair operation deletes a key pair.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteKeyPair.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteKeyPairRequest request
     * or Amazon_EC2_Model_DeleteKeyPairRequest object itself
     * @see Amazon_EC2_Model_DeleteKeyPair
     * @return Amazon_EC2_Model_DeleteKeyPairResponse Amazon_EC2_Model_DeleteKeyPairResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteKeyPair($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteKeyPairRequest) {
            require_once ('Amazon/EC2/Model/DeleteKeyPairRequest.php');
            $request = new Amazon_EC2_Model_DeleteKeyPairRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteKeyPairResponse.php');
        return Amazon_EC2_Model_DeleteKeyPairResponse::fromXML($this->_invoke($this->_convertDeleteKeyPair($request)));
}


            
    /**
     * Delete Security Group 
     * The DeleteSecurityGroup operation deletes a security group.
     * Note:
     * If you attempt to delete a security group that contains instances, a fault is
     * returned.
     * If you attempt to delete a security group that is referenced by another
     * security group, a fault is returned. For example, if security group B has a
     * rule that allows access from security group A, security group A cannot be
     * deleted until the allow rule is removed.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteSecurityGroup.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteSecurityGroupRequest request
     * or Amazon_EC2_Model_DeleteSecurityGroupRequest object itself
     * @see Amazon_EC2_Model_DeleteSecurityGroup
     * @return Amazon_EC2_Model_DeleteSecurityGroupResponse Amazon_EC2_Model_DeleteSecurityGroupResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteSecurityGroup($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteSecurityGroupRequest) {
            require_once ('Amazon/EC2/Model/DeleteSecurityGroupRequest.php');
            $request = new Amazon_EC2_Model_DeleteSecurityGroupRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteSecurityGroupResponse.php');
        return Amazon_EC2_Model_DeleteSecurityGroupResponse::fromXML($this->_invoke($this->_convertDeleteSecurityGroup($request)));
}


            
    /**
     * Delete Snapshot 
     * Deletes the snapshot identitied by snapshotId.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteSnapshot.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteSnapshotRequest request
     * or Amazon_EC2_Model_DeleteSnapshotRequest object itself
     * @see Amazon_EC2_Model_DeleteSnapshot
     * @return Amazon_EC2_Model_DeleteSnapshotResponse Amazon_EC2_Model_DeleteSnapshotResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteSnapshot($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteSnapshotRequest) {
            require_once ('Amazon/EC2/Model/DeleteSnapshotRequest.php');
            $request = new Amazon_EC2_Model_DeleteSnapshotRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteSnapshotResponse.php');
        return Amazon_EC2_Model_DeleteSnapshotResponse::fromXML($this->_invoke($this->_convertDeleteSnapshot($request)));
}


            
    /**
     * Delete Volume 
     * Deletes a  previously created volume. Once successfully deleted, a new volume  can be created with the same name.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteVolume.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteVolumeRequest request
     * or Amazon_EC2_Model_DeleteVolumeRequest object itself
     * @see Amazon_EC2_Model_DeleteVolume
     * @return Amazon_EC2_Model_DeleteVolumeResponse Amazon_EC2_Model_DeleteVolumeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteVolume($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteVolumeRequest) {
            require_once ('Amazon/EC2/Model/DeleteVolumeRequest.php');
            $request = new Amazon_EC2_Model_DeleteVolumeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteVolumeResponse.php');
        return Amazon_EC2_Model_DeleteVolumeResponse::fromXML($this->_invoke($this->_convertDeleteVolume($request)));
}


            
    /**
     * Deregister Image 
     * The DeregisterImage operation deregisters an AMI. Once deregistered, instances
     * of the AMI can no longer be launched.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeregisterImage.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeregisterImageRequest request
     * or Amazon_EC2_Model_DeregisterImageRequest object itself
     * @see Amazon_EC2_Model_DeregisterImage
     * @return Amazon_EC2_Model_DeregisterImageResponse Amazon_EC2_Model_DeregisterImageResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deregisterImage($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeregisterImageRequest) {
            require_once ('Amazon/EC2/Model/DeregisterImageRequest.php');
            $request = new Amazon_EC2_Model_DeregisterImageRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeregisterImageResponse.php');
        return Amazon_EC2_Model_DeregisterImageResponse::fromXML($this->_invoke($this->_convertDeregisterImage($request)));
}


            
    /**
     * Describe Addresses 
     * The DescribeAddresses operation lists elastic IP addresses assigned to your
     * account.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeAddresses.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeAddressesRequest request
     * or Amazon_EC2_Model_DescribeAddressesRequest object itself
     * @see Amazon_EC2_Model_DescribeAddresses
     * @return Amazon_EC2_Model_DescribeAddressesResponse Amazon_EC2_Model_DescribeAddressesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeAddresses($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeAddressesRequest) {
            require_once ('Amazon/EC2/Model/DescribeAddressesRequest.php');
            $request = new Amazon_EC2_Model_DescribeAddressesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeAddressesResponse.php');
        return Amazon_EC2_Model_DescribeAddressesResponse::fromXML($this->_invoke($this->_convertDescribeAddresses($request)));
}


            
    /**
     * Describe Availability Zones 
     * The DescribeAvailabilityZones operation describes availability zones that are
     * currently available to the account and their states.
     * Availability zones are not the same across accounts. The availability zone
     * us-east-1a for account A is not necessarily the same as us-east-1a for account
     * B. Zone assignments are mapped independently for each account.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeAvailabilityZones.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeAvailabilityZonesRequest request
     * or Amazon_EC2_Model_DescribeAvailabilityZonesRequest object itself
     * @see Amazon_EC2_Model_DescribeAvailabilityZones
     * @return Amazon_EC2_Model_DescribeAvailabilityZonesResponse Amazon_EC2_Model_DescribeAvailabilityZonesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeAvailabilityZones($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeAvailabilityZonesRequest) {
            require_once ('Amazon/EC2/Model/DescribeAvailabilityZonesRequest.php');
            $request = new Amazon_EC2_Model_DescribeAvailabilityZonesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeAvailabilityZonesResponse.php');
        return Amazon_EC2_Model_DescribeAvailabilityZonesResponse::fromXML($this->_invoke($this->_convertDescribeAvailabilityZones($request)));
}


            
    /**
     * Describe Bundle Tasks 
     * The DescribeBundleTasks operation describes in-progress
     * and recent bundle tasks. Complete and failed tasks are
     * removed from the list a short time after completion.
     * If no bundle ids are given, all bundle tasks are returned.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeBundleTasks.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeBundleTasksRequest request
     * or Amazon_EC2_Model_DescribeBundleTasksRequest object itself
     * @see Amazon_EC2_Model_DescribeBundleTasks
     * @return Amazon_EC2_Model_DescribeBundleTasksResponse Amazon_EC2_Model_DescribeBundleTasksResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeBundleTasks($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeBundleTasksRequest) {
            require_once ('Amazon/EC2/Model/DescribeBundleTasksRequest.php');
            $request = new Amazon_EC2_Model_DescribeBundleTasksRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeBundleTasksResponse.php');
        return Amazon_EC2_Model_DescribeBundleTasksResponse::fromXML($this->_invoke($this->_convertDescribeBundleTasks($request)));
}


            
    /**
     * Describe Snapshot Attribute 
     * Returns information about an attribute of a snapshot.
     * Only one attribute can be specified per call.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSnapshotAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSnapshotAttributeRequest request
     * or Amazon_EC2_Model_DescribeSnapshotAttributeRequest object itself
     * @see Amazon_EC2_Model_DescribeSnapshotAttribute
     * @return Amazon_EC2_Model_DescribeSnapshotAttributeResponse Amazon_EC2_Model_DescribeSnapshotAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSnapshotAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSnapshotAttributeRequest) {
            require_once ('Amazon/EC2/Model/DescribeSnapshotAttributeRequest.php');
            $request = new Amazon_EC2_Model_DescribeSnapshotAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSnapshotAttributeResponse.php');
        return Amazon_EC2_Model_DescribeSnapshotAttributeResponse::fromXML($this->_invoke($this->_convertDescribeSnapshotAttribute($request)));
}


            
    /**
     * Describe Image Attribute 
     * The DescribeImageAttribute operation returns information about an attribute of
     * an AMI. Only one attribute can be specified per call.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeImageAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeImageAttributeRequest request
     * or Amazon_EC2_Model_DescribeImageAttributeRequest object itself
     * @see Amazon_EC2_Model_DescribeImageAttribute
     * @return Amazon_EC2_Model_DescribeImageAttributeResponse Amazon_EC2_Model_DescribeImageAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeImageAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeImageAttributeRequest) {
            require_once ('Amazon/EC2/Model/DescribeImageAttributeRequest.php');
            $request = new Amazon_EC2_Model_DescribeImageAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeImageAttributeResponse.php');
        return Amazon_EC2_Model_DescribeImageAttributeResponse::fromXML($this->_invoke($this->_convertDescribeImageAttribute($request)));
}


            
    /**
     * Describe Images 
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
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeImages.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeImagesRequest request
     * or Amazon_EC2_Model_DescribeImagesRequest object itself
     * @see Amazon_EC2_Model_DescribeImages
     * @return Amazon_EC2_Model_DescribeImagesResponse Amazon_EC2_Model_DescribeImagesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeImages($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeImagesRequest) {
            require_once ('Amazon/EC2/Model/DescribeImagesRequest.php');
            $request = new Amazon_EC2_Model_DescribeImagesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeImagesResponse.php');
        return Amazon_EC2_Model_DescribeImagesResponse::fromXML($this->_invoke($this->_convertDescribeImages($request)));
}


            
    /**
     * Describe Instances 
     * The DescribeInstances operation returns information about instances that you
     * own.
     * If you specify one or more instance IDs, Amazon EC2 returns information for
     * those instances. If you do not specify instance IDs, Amazon EC2 returns
     * information for all relevant instances. If you specify an invalid instance ID,
     * a fault is returned. If you specify an instance that you do not own, it will
     * not be included in the returned results.
     * Recently terminated instances might appear in the returned results. This
     * interval is usually less than one hour.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeInstancesRequest request
     * or Amazon_EC2_Model_DescribeInstancesRequest object itself
     * @see Amazon_EC2_Model_DescribeInstances
     * @return Amazon_EC2_Model_DescribeInstancesResponse Amazon_EC2_Model_DescribeInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeInstancesRequest) {
            require_once ('Amazon/EC2/Model/DescribeInstancesRequest.php');
            $request = new Amazon_EC2_Model_DescribeInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeInstancesResponse.php');
        return Amazon_EC2_Model_DescribeInstancesResponse::fromXML($this->_invoke($this->_convertDescribeInstances($request)));
}


            
    /**
     * Describe Regions 
     * The DescribeRegions operation describes regions zones that are currently available to the account.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeRegions.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeRegionsRequest request
     * or Amazon_EC2_Model_DescribeRegionsRequest object itself
     * @see Amazon_EC2_Model_DescribeRegions
     * @return Amazon_EC2_Model_DescribeRegionsResponse Amazon_EC2_Model_DescribeRegionsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeRegions($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeRegionsRequest) {
            require_once ('Amazon/EC2/Model/DescribeRegionsRequest.php');
            $request = new Amazon_EC2_Model_DescribeRegionsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeRegionsResponse.php');
        return Amazon_EC2_Model_DescribeRegionsResponse::fromXML($this->_invoke($this->_convertDescribeRegions($request)));
}


            
    /**
     * Describe Reserved Instances 
     * The DescribeReservedInstances operation describes Reserved Instances that were purchased for use with your account.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeReservedInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeReservedInstancesRequest request
     * or Amazon_EC2_Model_DescribeReservedInstancesRequest object itself
     * @see Amazon_EC2_Model_DescribeReservedInstances
     * @return Amazon_EC2_Model_DescribeReservedInstancesResponse Amazon_EC2_Model_DescribeReservedInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeReservedInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeReservedInstancesRequest) {
            require_once ('Amazon/EC2/Model/DescribeReservedInstancesRequest.php');
            $request = new Amazon_EC2_Model_DescribeReservedInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeReservedInstancesResponse.php');
        return Amazon_EC2_Model_DescribeReservedInstancesResponse::fromXML($this->_invoke($this->_convertDescribeReservedInstances($request)));
}


            
    /**
     * Describe Reserved Instances Offerings 
     * The DescribeReservedInstancesOfferings operation describes Reserved
     * Instance offerings that are available for purchase. With Amazon EC2
     * Reserved Instances, you purchase the right to launch Amazon EC2 instances
     * for a period of time (without getting insufficient capacity errors) and
     * pay a lower usage rate for the actual time used.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeReservedInstancesOfferings.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest request
     * or Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest object itself
     * @see Amazon_EC2_Model_DescribeReservedInstancesOfferings
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeReservedInstancesOfferings($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest) {
            require_once ('Amazon/EC2/Model/DescribeReservedInstancesOfferingsRequest.php');
            $request = new Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeReservedInstancesOfferingsResponse.php');
        return Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse::fromXML($this->_invoke($this->_convertDescribeReservedInstancesOfferings($request)));
}


            
    /**
     * Describe Key Pairs 
     * The DescribeKeyPairs operation returns information about key pairs available to
     * you. If you specify key pairs, information about those key pairs is returned.
     * Otherwise, information for all registered key pairs is returned.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeKeyPairs.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeKeyPairsRequest request
     * or Amazon_EC2_Model_DescribeKeyPairsRequest object itself
     * @see Amazon_EC2_Model_DescribeKeyPairs
     * @return Amazon_EC2_Model_DescribeKeyPairsResponse Amazon_EC2_Model_DescribeKeyPairsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeKeyPairs($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeKeyPairsRequest) {
            require_once ('Amazon/EC2/Model/DescribeKeyPairsRequest.php');
            $request = new Amazon_EC2_Model_DescribeKeyPairsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeKeyPairsResponse.php');
        return Amazon_EC2_Model_DescribeKeyPairsResponse::fromXML($this->_invoke($this->_convertDescribeKeyPairs($request)));
}


            
    /**
     * Describe Security Groups 
     * The DescribeSecurityGroups operation returns information about security groups
     * that you own.
     * If you specify security group names, information about those security group is
     * returned. Otherwise, information for all security group is returned. If you
     * specify a group that does not exist, a fault is returned.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSecurityGroups.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSecurityGroupsRequest request
     * or Amazon_EC2_Model_DescribeSecurityGroupsRequest object itself
     * @see Amazon_EC2_Model_DescribeSecurityGroups
     * @return Amazon_EC2_Model_DescribeSecurityGroupsResponse Amazon_EC2_Model_DescribeSecurityGroupsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSecurityGroups($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSecurityGroupsRequest) {
            require_once ('Amazon/EC2/Model/DescribeSecurityGroupsRequest.php');
            $request = new Amazon_EC2_Model_DescribeSecurityGroupsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSecurityGroupsResponse.php');
        return Amazon_EC2_Model_DescribeSecurityGroupsResponse::fromXML($this->_invoke($this->_convertDescribeSecurityGroups($request)));
}


            
    /**
     * Describe Snapshots 
     * Describes the indicated snapshots, or in lieu of that, all snapshots owned by the caller.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSnapshots.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSnapshotsRequest request
     * or Amazon_EC2_Model_DescribeSnapshotsRequest object itself
     * @see Amazon_EC2_Model_DescribeSnapshots
     * @return Amazon_EC2_Model_DescribeSnapshotsResponse Amazon_EC2_Model_DescribeSnapshotsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSnapshots($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSnapshotsRequest) {
            require_once ('Amazon/EC2/Model/DescribeSnapshotsRequest.php');
            $request = new Amazon_EC2_Model_DescribeSnapshotsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSnapshotsResponse.php');
        return Amazon_EC2_Model_DescribeSnapshotsResponse::fromXML($this->_invoke($this->_convertDescribeSnapshots($request)));
}


            
    /**
     * Describe Volumes 
     * Describes the status of the indicated or, in lieu of any specified,  all volumes belonging to the caller. Volumes that have been deleted are not described.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeVolumes.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeVolumesRequest request
     * or Amazon_EC2_Model_DescribeVolumesRequest object itself
     * @see Amazon_EC2_Model_DescribeVolumes
     * @return Amazon_EC2_Model_DescribeVolumesResponse Amazon_EC2_Model_DescribeVolumesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeVolumes($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeVolumesRequest) {
            require_once ('Amazon/EC2/Model/DescribeVolumesRequest.php');
            $request = new Amazon_EC2_Model_DescribeVolumesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeVolumesResponse.php');
        return Amazon_EC2_Model_DescribeVolumesResponse::fromXML($this->_invoke($this->_convertDescribeVolumes($request)));
}


            
    /**
     * Detach Volume 
     * Detach a previously attached volume from a running instance.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DetachVolume.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DetachVolumeRequest request
     * or Amazon_EC2_Model_DetachVolumeRequest object itself
     * @see Amazon_EC2_Model_DetachVolume
     * @return Amazon_EC2_Model_DetachVolumeResponse Amazon_EC2_Model_DetachVolumeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function detachVolume($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DetachVolumeRequest) {
            require_once ('Amazon/EC2/Model/DetachVolumeRequest.php');
            $request = new Amazon_EC2_Model_DetachVolumeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DetachVolumeResponse.php');
        return Amazon_EC2_Model_DetachVolumeResponse::fromXML($this->_invoke($this->_convertDetachVolume($request)));
}


            
    /**
     * Disassociate Address 
     * The DisassociateAddress operation disassociates the specified elastic IP
     * address from the instance to which it is assigned. This is an idempotent
     * operation. If you enter it more than once, Amazon EC2 does not return an error.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DisassociateAddress.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DisassociateAddressRequest request
     * or Amazon_EC2_Model_DisassociateAddressRequest object itself
     * @see Amazon_EC2_Model_DisassociateAddress
     * @return Amazon_EC2_Model_DisassociateAddressResponse Amazon_EC2_Model_DisassociateAddressResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function disassociateAddress($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DisassociateAddressRequest) {
            require_once ('Amazon/EC2/Model/DisassociateAddressRequest.php');
            $request = new Amazon_EC2_Model_DisassociateAddressRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DisassociateAddressResponse.php');
        return Amazon_EC2_Model_DisassociateAddressResponse::fromXML($this->_invoke($this->_convertDisassociateAddress($request)));
}


            
    /**
     * Get Password Data 
     * Retrieves the encrypted administrator password for the instances running Windows.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-GetPasswordData.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_GetPasswordDataRequest request
     * or Amazon_EC2_Model_GetPasswordDataRequest object itself
     * @see Amazon_EC2_Model_GetPasswordData
     * @return Amazon_EC2_Model_GetPasswordDataResponse Amazon_EC2_Model_GetPasswordDataResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function getPasswordData($request)
    {
        if (!$request instanceof Amazon_EC2_Model_GetPasswordDataRequest) {
            require_once ('Amazon/EC2/Model/GetPasswordDataRequest.php');
            $request = new Amazon_EC2_Model_GetPasswordDataRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/GetPasswordDataResponse.php');
        return Amazon_EC2_Model_GetPasswordDataResponse::fromXML($this->_invoke($this->_convertGetPasswordData($request)));
}


            
    /**
     * Get Console Output 
     * The GetConsoleOutput operation retrieves console output for the specified
     * instance.
     * Instance console output is buffered and posted shortly after instance boot,
     * reboot, and termination. Amazon EC2 preserves the most recent 64 KB output
     * which will be available for at least one hour after the most recent post.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-GetConsoleOutput.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_GetConsoleOutputRequest request
     * or Amazon_EC2_Model_GetConsoleOutputRequest object itself
     * @see Amazon_EC2_Model_GetConsoleOutput
     * @return Amazon_EC2_Model_GetConsoleOutputResponse Amazon_EC2_Model_GetConsoleOutputResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function getConsoleOutput($request)
    {
        if (!$request instanceof Amazon_EC2_Model_GetConsoleOutputRequest) {
            require_once ('Amazon/EC2/Model/GetConsoleOutputRequest.php');
            $request = new Amazon_EC2_Model_GetConsoleOutputRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/GetConsoleOutputResponse.php');
        return Amazon_EC2_Model_GetConsoleOutputResponse::fromXML($this->_invoke($this->_convertGetConsoleOutput($request)));
}


            
    /**
     * Modify Snapshot Attribute 
     * Adds or remove permission settings for the specified snapshot.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ModifySnapshotAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ModifySnapshotAttributeRequest request
     * or Amazon_EC2_Model_ModifySnapshotAttributeRequest object itself
     * @see Amazon_EC2_Model_ModifySnapshotAttribute
     * @return Amazon_EC2_Model_ModifySnapshotAttributeResponse Amazon_EC2_Model_ModifySnapshotAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function modifySnapshotAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ModifySnapshotAttributeRequest) {
            require_once ('Amazon/EC2/Model/ModifySnapshotAttributeRequest.php');
            $request = new Amazon_EC2_Model_ModifySnapshotAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ModifySnapshotAttributeResponse.php');
        return Amazon_EC2_Model_ModifySnapshotAttributeResponse::fromXML($this->_invoke($this->_convertModifySnapshotAttribute($request)));
}


            
    /**
     * Modify Image Attribute 
     * The ModifyImageAttribute operation modifies an attribute of an AMI.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ModifyImageAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ModifyImageAttributeRequest request
     * or Amazon_EC2_Model_ModifyImageAttributeRequest object itself
     * @see Amazon_EC2_Model_ModifyImageAttribute
     * @return Amazon_EC2_Model_ModifyImageAttributeResponse Amazon_EC2_Model_ModifyImageAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function modifyImageAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ModifyImageAttributeRequest) {
            require_once ('Amazon/EC2/Model/ModifyImageAttributeRequest.php');
            $request = new Amazon_EC2_Model_ModifyImageAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ModifyImageAttributeResponse.php');
        return Amazon_EC2_Model_ModifyImageAttributeResponse::fromXML($this->_invoke($this->_convertModifyImageAttribute($request)));
}


            
    /**
     * Purchase Reserved Instances Offering 
     * The PurchaseReservedInstancesOffering operation purchases a
     * Reserved Instance for use with your account. With Amazon EC2
     * Reserved Instances, you purchase the right to launch Amazon EC2
     * instances for a period of time (without getting insufficient
     * capacity errors) and pay a lower usage rate for the
     * actual time used.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-PurchaseReservedInstancesOffering.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest request
     * or Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest object itself
     * @see Amazon_EC2_Model_PurchaseReservedInstancesOffering
     * @return Amazon_EC2_Model_PurchaseReservedInstancesOfferingResponse Amazon_EC2_Model_PurchaseReservedInstancesOfferingResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function purchaseReservedInstancesOffering($request)
    {
        if (!$request instanceof Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest) {
            require_once ('Amazon/EC2/Model/PurchaseReservedInstancesOfferingRequest.php');
            $request = new Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/PurchaseReservedInstancesOfferingResponse.php');
        return Amazon_EC2_Model_PurchaseReservedInstancesOfferingResponse::fromXML($this->_invoke($this->_convertPurchaseReservedInstancesOffering($request)));
}


            
    /**
     * Reboot Instances 
     * The RebootInstances operation requests a reboot of one or more instances. This
     * operation is asynchronous; it only queues a request to reboot the specified
     * instance(s). The operation will succeed if the instances are valid and belong
     * to the user. Requests to reboot terminated instances are ignored.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-RebootInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_RebootInstancesRequest request
     * or Amazon_EC2_Model_RebootInstancesRequest object itself
     * @see Amazon_EC2_Model_RebootInstances
     * @return Amazon_EC2_Model_RebootInstancesResponse Amazon_EC2_Model_RebootInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function rebootInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_RebootInstancesRequest) {
            require_once ('Amazon/EC2/Model/RebootInstancesRequest.php');
            $request = new Amazon_EC2_Model_RebootInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/RebootInstancesResponse.php');
        return Amazon_EC2_Model_RebootInstancesResponse::fromXML($this->_invoke($this->_convertRebootInstances($request)));
}


            
    /**
     * Register Image 
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
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-RegisterImage.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_RegisterImageRequest request
     * or Amazon_EC2_Model_RegisterImageRequest object itself
     * @see Amazon_EC2_Model_RegisterImage
     * @return Amazon_EC2_Model_RegisterImageResponse Amazon_EC2_Model_RegisterImageResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function registerImage($request)
    {
        if (!$request instanceof Amazon_EC2_Model_RegisterImageRequest) {
            require_once ('Amazon/EC2/Model/RegisterImageRequest.php');
            $request = new Amazon_EC2_Model_RegisterImageRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/RegisterImageResponse.php');
        return Amazon_EC2_Model_RegisterImageResponse::fromXML($this->_invoke($this->_convertRegisterImage($request)));
}


            
    /**
     * Release Address 
     * The ReleaseAddress operation releases an elastic IP address associated with
     * your account.
     * Note:
     * Releasing an IP address automatically disassociates it from any instance with
     * which it is associated. For more information, see DisassociateAddress.
     * Important:
     * After releasing an elastic IP address, it is released to the IP address pool
     * and might no longer be available to your account. Make sure to update your DNS
     * records and any servers or devices that communicate with the address.
     * If you run this operation on an elastic IP address that is already released,
     * the address might be assigned to another account which will cause Amazon EC2 to
     * return an error.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ReleaseAddress.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ReleaseAddressRequest request
     * or Amazon_EC2_Model_ReleaseAddressRequest object itself
     * @see Amazon_EC2_Model_ReleaseAddress
     * @return Amazon_EC2_Model_ReleaseAddressResponse Amazon_EC2_Model_ReleaseAddressResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function releaseAddress($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ReleaseAddressRequest) {
            require_once ('Amazon/EC2/Model/ReleaseAddressRequest.php');
            $request = new Amazon_EC2_Model_ReleaseAddressRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ReleaseAddressResponse.php');
        return Amazon_EC2_Model_ReleaseAddressResponse::fromXML($this->_invoke($this->_convertReleaseAddress($request)));
}


            
    /**
     * Reset Snapshot Attribute 
     * Resets permission settings for the specified snapshot.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ResetSnapshotAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ResetSnapshotAttributeRequest request
     * or Amazon_EC2_Model_ResetSnapshotAttributeRequest object itself
     * @see Amazon_EC2_Model_ResetSnapshotAttribute
     * @return Amazon_EC2_Model_ResetSnapshotAttributeResponse Amazon_EC2_Model_ResetSnapshotAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function resetSnapshotAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ResetSnapshotAttributeRequest) {
            require_once ('Amazon/EC2/Model/ResetSnapshotAttributeRequest.php');
            $request = new Amazon_EC2_Model_ResetSnapshotAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ResetSnapshotAttributeResponse.php');
        return Amazon_EC2_Model_ResetSnapshotAttributeResponse::fromXML($this->_invoke($this->_convertResetSnapshotAttribute($request)));
}


            
    /**
     * Reset Image Attribute 
     * The ResetImageAttribute operation resets an attribute of an AMI to its default
     * value.
     * Note:
     * The productCodes attribute cannot be reset.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ResetImageAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ResetImageAttributeRequest request
     * or Amazon_EC2_Model_ResetImageAttributeRequest object itself
     * @see Amazon_EC2_Model_ResetImageAttribute
     * @return Amazon_EC2_Model_ResetImageAttributeResponse Amazon_EC2_Model_ResetImageAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function resetImageAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ResetImageAttributeRequest) {
            require_once ('Amazon/EC2/Model/ResetImageAttributeRequest.php');
            $request = new Amazon_EC2_Model_ResetImageAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ResetImageAttributeResponse.php');
        return Amazon_EC2_Model_ResetImageAttributeResponse::fromXML($this->_invoke($this->_convertResetImageAttribute($request)));
}


            
    /**
     * Revoke Security Group Ingress 
     * The RevokeSecurityGroupIngress operation revokes permissions from a security
     * group. The permissions used to revoke must be specified using the same values
     * used to grant the permissions.
     * Permissions are specified by IP protocol (TCP, UDP, or ICMP), the source of the
     * request (by IP range or an Amazon EC2 user-group pair), the source and
     * destination port ranges (for TCP and UDP), and the ICMP codes and types (for
     * ICMP).
     * Permission changes are quickly propagated to instances within the security
     * group. However, depending on the number of instances in the group, a small
     * delay is might occur, .
     * When revoking a user/group pair permission, GroupName, SourceSecurityGroupName
     * and SourceSecurityGroupOwnerId must be specified. When authorizing a CIDR IP
     * permission, GroupName, IpProtocol, FromPort, ToPort and CidrIp must be
     * specified. Mixing these two types of parameters is not allowed.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-RevokeSecurityGroupIngress.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_RevokeSecurityGroupIngressRequest request
     * or Amazon_EC2_Model_RevokeSecurityGroupIngressRequest object itself
     * @see Amazon_EC2_Model_RevokeSecurityGroupIngress
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressResponse Amazon_EC2_Model_RevokeSecurityGroupIngressResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function revokeSecurityGroupIngress($request)
    {
        if (!$request instanceof Amazon_EC2_Model_RevokeSecurityGroupIngressRequest) {
            require_once ('Amazon/EC2/Model/RevokeSecurityGroupIngressRequest.php');
            $request = new Amazon_EC2_Model_RevokeSecurityGroupIngressRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/RevokeSecurityGroupIngressResponse.php');
        return Amazon_EC2_Model_RevokeSecurityGroupIngressResponse::fromXML($this->_invoke($this->_convertRevokeSecurityGroupIngress($request)));
}


            
    /**
     * Run Instances 
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
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-RunInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_RunInstancesRequest request
     * or Amazon_EC2_Model_RunInstancesRequest object itself
     * @see Amazon_EC2_Model_RunInstances
     * @return Amazon_EC2_Model_RunInstancesResponse Amazon_EC2_Model_RunInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function runInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_RunInstancesRequest) {
            require_once ('Amazon/EC2/Model/RunInstancesRequest.php');
            $request = new Amazon_EC2_Model_RunInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/RunInstancesResponse.php');
        return Amazon_EC2_Model_RunInstancesResponse::fromXML($this->_invoke($this->_convertRunInstances($request)));
}


            
    /**
     * Stop Instances 
     * Stops an instance that uses an Amazon EBS volume as its root device.
     * Instances that use Amazon EBS volumes as their root devices can be quickly stopped and started.
     * When an instance is stopped, the compute resources are released and you are not billed for hourly
     * instance usage. However, your root partition Amazon EBS volume remains, continues to persist your
     * data, and you are charged for Amazon EBS volume usage. You can restart your instance at any time.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-StopInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_StopInstancesRequest request
     * or Amazon_EC2_Model_StopInstancesRequest object itself
     * @see Amazon_EC2_Model_StopInstances
     * @return Amazon_EC2_Model_StopInstancesResponse Amazon_EC2_Model_StopInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function stopInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_StopInstancesRequest) {
            require_once ('Amazon/EC2/Model/StopInstancesRequest.php');
            $request = new Amazon_EC2_Model_StopInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/StopInstancesResponse.php');
        return Amazon_EC2_Model_StopInstancesResponse::fromXML($this->_invoke($this->_convertStopInstances($request)));
}


            
    /**
     * Start Instances 
     * Starts an instance that uses an Amazon EBS volume as its root device.
     * Instances that use Amazon EBS volumes as their root devices can be quickly stopped and started.
     * When an instance is stopped, the compute resources are released and you are not billed for hourly
     * instance usage. However, your root partition Amazon EBS volume remains, continues to persist your
     * data, and you are charged for Amazon EBS volume usage. You can restart your instance at any time.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-StartInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_StartInstancesRequest request
     * or Amazon_EC2_Model_StartInstancesRequest object itself
     * @see Amazon_EC2_Model_StartInstances
     * @return Amazon_EC2_Model_StartInstancesResponse Amazon_EC2_Model_StartInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function startInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_StartInstancesRequest) {
            require_once ('Amazon/EC2/Model/StartInstancesRequest.php');
            $request = new Amazon_EC2_Model_StartInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/StartInstancesResponse.php');
        return Amazon_EC2_Model_StartInstancesResponse::fromXML($this->_invoke($this->_convertStartInstances($request)));
}


            
    /**
     * Modify Instance Attribute 
     * Modifies an attribute of an instance.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ModifyInstanceAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ModifyInstanceAttributeRequest request
     * or Amazon_EC2_Model_ModifyInstanceAttributeRequest object itself
     * @see Amazon_EC2_Model_ModifyInstanceAttribute
     * @return Amazon_EC2_Model_ModifyInstanceAttributeResponse Amazon_EC2_Model_ModifyInstanceAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function modifyInstanceAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ModifyInstanceAttributeRequest) {
            require_once ('Amazon/EC2/Model/ModifyInstanceAttributeRequest.php');
            $request = new Amazon_EC2_Model_ModifyInstanceAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ModifyInstanceAttributeResponse.php');
        return Amazon_EC2_Model_ModifyInstanceAttributeResponse::fromXML($this->_invoke($this->_convertModifyInstanceAttribute($request)));
}


            
    /**
     * Reset Instance Attribute 
     * Resets an attribute of an instance to its default value.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-ResetInstanceAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_ResetInstanceAttributeRequest request
     * or Amazon_EC2_Model_ResetInstanceAttributeRequest object itself
     * @see Amazon_EC2_Model_ResetInstanceAttribute
     * @return Amazon_EC2_Model_ResetInstanceAttributeResponse Amazon_EC2_Model_ResetInstanceAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function resetInstanceAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_ResetInstanceAttributeRequest) {
            require_once ('Amazon/EC2/Model/ResetInstanceAttributeRequest.php');
            $request = new Amazon_EC2_Model_ResetInstanceAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/ResetInstanceAttributeResponse.php');
        return Amazon_EC2_Model_ResetInstanceAttributeResponse::fromXML($this->_invoke($this->_convertResetInstanceAttribute($request)));
}


            
    /**
     * Describe Instance Attribute 
     * Returns information about an attribute of an instance. Only one attribute can be specified per call.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeInstanceAttribute.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeInstanceAttributeRequest request
     * or Amazon_EC2_Model_DescribeInstanceAttributeRequest object itself
     * @see Amazon_EC2_Model_DescribeInstanceAttribute
     * @return Amazon_EC2_Model_DescribeInstanceAttributeResponse Amazon_EC2_Model_DescribeInstanceAttributeResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeInstanceAttribute($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeInstanceAttributeRequest) {
            require_once ('Amazon/EC2/Model/DescribeInstanceAttributeRequest.php');
            $request = new Amazon_EC2_Model_DescribeInstanceAttributeRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeInstanceAttributeResponse.php');
        return Amazon_EC2_Model_DescribeInstanceAttributeResponse::fromXML($this->_invoke($this->_convertDescribeInstanceAttribute($request)));
}


            
    /**
     * Terminate Instances 
     * The TerminateInstances operation shuts down one or more instances. This
     * operation is idempotent; if you terminate an instance more than once, each call
     * will succeed.
     * Terminated instances will remain visible after termination (approximately one
     * hour).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-TerminateInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_TerminateInstancesRequest request
     * or Amazon_EC2_Model_TerminateInstancesRequest object itself
     * @see Amazon_EC2_Model_TerminateInstances
     * @return Amazon_EC2_Model_TerminateInstancesResponse Amazon_EC2_Model_TerminateInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function terminateInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_TerminateInstancesRequest) {
            require_once ('Amazon/EC2/Model/TerminateInstancesRequest.php');
            $request = new Amazon_EC2_Model_TerminateInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/TerminateInstancesResponse.php');
        return Amazon_EC2_Model_TerminateInstancesResponse::fromXML($this->_invoke($this->_convertTerminateInstances($request)));
}


            
    /**
     * Monitor Instances 
     * Enables monitoring for a running instance.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-MonitorInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_MonitorInstancesRequest request
     * or Amazon_EC2_Model_MonitorInstancesRequest object itself
     * @see Amazon_EC2_Model_MonitorInstances
     * @return Amazon_EC2_Model_MonitorInstancesResponse Amazon_EC2_Model_MonitorInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function monitorInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_MonitorInstancesRequest) {
            require_once ('Amazon/EC2/Model/MonitorInstancesRequest.php');
            $request = new Amazon_EC2_Model_MonitorInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/MonitorInstancesResponse.php');
        return Amazon_EC2_Model_MonitorInstancesResponse::fromXML($this->_invoke($this->_convertMonitorInstances($request)));
}


            
    /**
     * Unmonitor Instances 
     * Disables monitoring for a running instance.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-UnmonitorInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_UnmonitorInstancesRequest request
     * or Amazon_EC2_Model_UnmonitorInstancesRequest object itself
     * @see Amazon_EC2_Model_UnmonitorInstances
     * @return Amazon_EC2_Model_UnmonitorInstancesResponse Amazon_EC2_Model_UnmonitorInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function unmonitorInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_UnmonitorInstancesRequest) {
            require_once ('Amazon/EC2/Model/UnmonitorInstancesRequest.php');
            $request = new Amazon_EC2_Model_UnmonitorInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/UnmonitorInstancesResponse.php');
        return Amazon_EC2_Model_UnmonitorInstancesResponse::fromXML($this->_invoke($this->_convertUnmonitorInstances($request)));
}


            
    /**
     * Describe Vpn Connections 
     * Gives you information about your VPN connections.
     * Important
     * We strongly recommend you use HTTPS when calling this operation because the
     * response contains sensitive cryptographic information for configuring your customer gateway.
     * You can filter the results to return information only about VPN connections
     * that match criteria you specify. For example, you could ask to get information
     * about a particular VPN connection (or all) only if the VPN's state is pending
     * or available. You can specify multiple filters (e.g., the VPN connection is
     * associated with a particular VPN gateway, and the gateway's state is
     * pending or available). The result includes information for a particular
     * VPN connection only if the VPN connection matches all your filters.
     * If there's no match, no special message is returned; the response is
     * simply empty.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeVpnConnections.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeVpnConnectionsRequest request
     * or Amazon_EC2_Model_DescribeVpnConnectionsRequest object itself
     * @see Amazon_EC2_Model_DescribeVpnConnections
     * @return Amazon_EC2_Model_DescribeVpnConnectionsResponse Amazon_EC2_Model_DescribeVpnConnectionsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeVpnConnections($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeVpnConnectionsRequest) {
            require_once ('Amazon/EC2/Model/DescribeVpnConnectionsRequest.php');
            $request = new Amazon_EC2_Model_DescribeVpnConnectionsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeVpnConnectionsResponse.php');
        return Amazon_EC2_Model_DescribeVpnConnectionsResponse::fromXML($this->_invoke($this->_convertDescribeVpnConnections($request)));
}


            
    /**
     * Describe Subnets 
     * Gives you information about your subnets. You can filter the results to
     * return information only about subnets that match criteria you specify.
     * For example, you could ask to get information about a particular subnet
     * (or all) only if the subnet's state is available. You can specify multiple
     * filters (e.g., the subnet is in a particular VPC, and the subnet's state is
     * available). The result includes information for a particular subnet only
     * if the subnet matches all your filters. If there's no match, no special
     * message is returned; the response is simply empty. The following table
     * shows the available filters.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSubnets.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSubnetsRequest request
     * or Amazon_EC2_Model_DescribeSubnetsRequest object itself
     * @see Amazon_EC2_Model_DescribeSubnets
     * @return Amazon_EC2_Model_DescribeSubnetsResponse Amazon_EC2_Model_DescribeSubnetsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSubnets($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSubnetsRequest) {
            require_once ('Amazon/EC2/Model/DescribeSubnetsRequest.php');
            $request = new Amazon_EC2_Model_DescribeSubnetsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSubnetsResponse.php');
        return Amazon_EC2_Model_DescribeSubnetsResponse::fromXML($this->_invoke($this->_convertDescribeSubnets($request)));
}


            
    /**
     * Detach Vpn Gateway 
     * Detaches a VPN gateway from a VPC. You do this if you're planning to
     * turn off the VPC and not use it anymore. You can confirm a VPN gateway
     * has been completely detached from a VPC by describing the VPN gateway
     * (any attachments to the VPN gateway are also described).
     * You must wait for the attachment's state to switch to detached before you can
     * delete the VPC or attach a different VPC to the VPN gateway.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DetachVpnGateway.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DetachVpnGatewayRequest request
     * or Amazon_EC2_Model_DetachVpnGatewayRequest object itself
     * @see Amazon_EC2_Model_DetachVpnGateway
     * @return Amazon_EC2_Model_DetachVpnGatewayResponse Amazon_EC2_Model_DetachVpnGatewayResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function detachVpnGateway($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DetachVpnGatewayRequest) {
            require_once ('Amazon/EC2/Model/DetachVpnGatewayRequest.php');
            $request = new Amazon_EC2_Model_DetachVpnGatewayRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DetachVpnGatewayResponse.php');
        return Amazon_EC2_Model_DetachVpnGatewayResponse::fromXML($this->_invoke($this->_convertDetachVpnGateway($request)));
}


            
    /**
     * Describe Vpcs 
     * Gives you information about your VPCs. You can filter the results to return
     * information only about VPCs that match criteria you specify. For example,
     * you could ask to get information about a particular VPC or VPCs (or all your VPCs)
     * only if the VPC's state is available. You can specify multiple filters (e.g.,
     * the VPC uses one of several sets of DHCP options, and the VPC's state is available).
     * The result includes information for a particular VPC only if the VPC
     * matches all your filters. If there's no match, no special message is
     * returned; the response is simply empty.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeVpcs.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeVpcsRequest request
     * or Amazon_EC2_Model_DescribeVpcsRequest object itself
     * @see Amazon_EC2_Model_DescribeVpcs
     * @return Amazon_EC2_Model_DescribeVpcsResponse Amazon_EC2_Model_DescribeVpcsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeVpcs($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeVpcsRequest) {
            require_once ('Amazon/EC2/Model/DescribeVpcsRequest.php');
            $request = new Amazon_EC2_Model_DescribeVpcsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeVpcsResponse.php');
        return Amazon_EC2_Model_DescribeVpcsResponse::fromXML($this->_invoke($this->_convertDescribeVpcs($request)));
}


            
    /**
     * Delete Customer Gateway 
     * Deletes a customer gateway. You must delete the VPN connection before
     * deleting the customer gateway.
     * AWS might delete any customer gateway if you leave it inactive for an extended
     * period of time (inactive means that there's no VPN connection in use with the
     * customer gateway).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteCustomerGateway.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteCustomerGatewayRequest request
     * or Amazon_EC2_Model_DeleteCustomerGatewayRequest object itself
     * @see Amazon_EC2_Model_DeleteCustomerGateway
     * @return Amazon_EC2_Model_DeleteCustomerGatewayResponse Amazon_EC2_Model_DeleteCustomerGatewayResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteCustomerGateway($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteCustomerGatewayRequest) {
            require_once ('Amazon/EC2/Model/DeleteCustomerGatewayRequest.php');
            $request = new Amazon_EC2_Model_DeleteCustomerGatewayRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteCustomerGatewayResponse.php');
        return Amazon_EC2_Model_DeleteCustomerGatewayResponse::fromXML($this->_invoke($this->_convertDeleteCustomerGateway($request)));
}


            
    /**
     * Attach Vpn Gateway 
     * Attaches a VPN gateway to a VPC. This is the last step required to get your
     * VPC fully connected to your data center before launching instances in it.
     * For more information, go to Process for Using Amazon VPC in the Amazon Virtual
     * Private Cloud Developer Guide.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-AttachVpnGateway.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_AttachVpnGatewayRequest request
     * or Amazon_EC2_Model_AttachVpnGatewayRequest object itself
     * @see Amazon_EC2_Model_AttachVpnGateway
     * @return Amazon_EC2_Model_AttachVpnGatewayResponse Amazon_EC2_Model_AttachVpnGatewayResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function attachVpnGateway($request)
    {
        if (!$request instanceof Amazon_EC2_Model_AttachVpnGatewayRequest) {
            require_once ('Amazon/EC2/Model/AttachVpnGatewayRequest.php');
            $request = new Amazon_EC2_Model_AttachVpnGatewayRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/AttachVpnGatewayResponse.php');
        return Amazon_EC2_Model_AttachVpnGatewayResponse::fromXML($this->_invoke($this->_convertAttachVpnGateway($request)));
}


            
    /**
     * Delete Dhcp Options 
     * Deletes a set of DHCP options that you specify. Amazon VPC returns an error if the
     * set of options you specify is currently associated with a VPC. You can disassociate
     * the set of options by associating either a new set of options or the default options with the VPC.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteDhcpOptions.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteDhcpOptionsRequest request
     * or Amazon_EC2_Model_DeleteDhcpOptionsRequest object itself
     * @see Amazon_EC2_Model_DeleteDhcpOptions
     * @return Amazon_EC2_Model_DeleteDhcpOptionsResponse Amazon_EC2_Model_DeleteDhcpOptionsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteDhcpOptions($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteDhcpOptionsRequest) {
            require_once ('Amazon/EC2/Model/DeleteDhcpOptionsRequest.php');
            $request = new Amazon_EC2_Model_DeleteDhcpOptionsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteDhcpOptionsResponse.php');
        return Amazon_EC2_Model_DeleteDhcpOptionsResponse::fromXML($this->_invoke($this->_convertDeleteDhcpOptions($request)));
}


            
    /**
     * Delete Subnet 
     * Deletes a subnet from a VPC. You must terminate all running instances in the
     * subnet before deleting it, otherwise Amazon VPC returns an error.
     * AWS might delete any subnet if you leave it inactive for an extended period
     * of time (inactive means that there are no running Amazon EC2 instances in the subnet).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteSubnet.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteSubnetRequest request
     * or Amazon_EC2_Model_DeleteSubnetRequest object itself
     * @see Amazon_EC2_Model_DeleteSubnet
     * @return Amazon_EC2_Model_DeleteSubnetResponse Amazon_EC2_Model_DeleteSubnetResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteSubnet($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteSubnetRequest) {
            require_once ('Amazon/EC2/Model/DeleteSubnetRequest.php');
            $request = new Amazon_EC2_Model_DeleteSubnetRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteSubnetResponse.php');
        return Amazon_EC2_Model_DeleteSubnetResponse::fromXML($this->_invoke($this->_convertDeleteSubnet($request)));
}


            
    /**
     * Create Vpc 
     * Creates a VPC with the CIDR block you specify. The smallest VPC you can create
     * uses a /28 netmask (16 IP addresses), and the largest uses a /18 netmask
     * (16,384 IP addresses). To help you decide how big to make your VPC, go
     * to the topic about creating VPCs  in the Amazon Virtual Private Cloud
     * Developer Guide.
     * By default, each instance you launch in the VPC has the default DHCP options
     * (the standard EC2 host name, no domain name, no DNS server, no NTP server, and
     * no NetBIOS server or node type).
     * AWS might delete any VPC that you create with this operation if you leave it inactive
     * for an extended period of time (inactive means that there are no running Amazon EC2
     * instances in the VPC).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateVpc.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateVpcRequest request
     * or Amazon_EC2_Model_CreateVpcRequest object itself
     * @see Amazon_EC2_Model_CreateVpc
     * @return Amazon_EC2_Model_CreateVpcResponse Amazon_EC2_Model_CreateVpcResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createVpc($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateVpcRequest) {
            require_once ('Amazon/EC2/Model/CreateVpcRequest.php');
            $request = new Amazon_EC2_Model_CreateVpcRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateVpcResponse.php');
        return Amazon_EC2_Model_CreateVpcResponse::fromXML($this->_invoke($this->_convertCreateVpc($request)));
}


            
    /**
     * Create Customer Gateway 
     * Provides information to AWS about your customer gateway device.
     * The customer gateway is the appliance at your end of the VPN connection
     * (compared to the VPN gateway, which is the device at the AWS side of the VPN
     * connection). AWS might delete any customer gateway that you create with this
     * operation if you leave it inactive for an extended period of time (inactive means
     * that there's no VPN connection in use with the customer gateway).
     * You must provide the Internet-routable IP address of the customer gateway's external
     * interface. The IP address must be static and can't be behind a device performing
     * network address translation (NAT).
     * You must also provide the device's Border Gateway Protocol (BGP) Autonomous
     * System Number (ASN). You can use an existing ASN assigned to your network.
     * If you don't have an ASN already, you can use a private ASN (in the 64512 - 65534 range).
     * For more information about ASNs, go to the Wikipedia article -
     * http://en.wikipedia.org/wiki/Autonomous_system_%28Internet%29.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateCustomerGateway.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateCustomerGatewayRequest request
     * or Amazon_EC2_Model_CreateCustomerGatewayRequest object itself
     * @see Amazon_EC2_Model_CreateCustomerGateway
     * @return Amazon_EC2_Model_CreateCustomerGatewayResponse Amazon_EC2_Model_CreateCustomerGatewayResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createCustomerGateway($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateCustomerGatewayRequest) {
            require_once ('Amazon/EC2/Model/CreateCustomerGatewayRequest.php');
            $request = new Amazon_EC2_Model_CreateCustomerGatewayRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateCustomerGatewayResponse.php');
        return Amazon_EC2_Model_CreateCustomerGatewayResponse::fromXML($this->_invoke($this->_convertCreateCustomerGateway($request)));
}


            
    /**
     * Create Vpn Gateway 
     * Creates a new VPN gateway. A VPN gateway is the VPC-side endpoint for
     * your VPN connection. You can create a VPN gateway before creating the VPC
     * itself. AWS might delete any VPN gateway that you create with this operation
     * if you leave it inactive for an extended period of time (inactive means
     * that there's no VPN connection in use with the VPN gateway).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateVpnGateway.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateVpnGatewayRequest request
     * or Amazon_EC2_Model_CreateVpnGatewayRequest object itself
     * @see Amazon_EC2_Model_CreateVpnGateway
     * @return Amazon_EC2_Model_CreateVpnGatewayResponse Amazon_EC2_Model_CreateVpnGatewayResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createVpnGateway($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateVpnGatewayRequest) {
            require_once ('Amazon/EC2/Model/CreateVpnGatewayRequest.php');
            $request = new Amazon_EC2_Model_CreateVpnGatewayRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateVpnGatewayResponse.php');
        return Amazon_EC2_Model_CreateVpnGatewayResponse::fromXML($this->_invoke($this->_convertCreateVpnGateway($request)));
}


            
    /**
     * Delete Vpc 
     * Deletes a VPC. You must terminate all running instances and delete all
     * subnets before deleting the VPC, otherwise Amazon VPC returns an error.
     * AWS might delete any VPC if you leave it inactive for an extended period of time
     * (inactive means that there are no running Amazon EC2 instances in the VPC).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteVpc.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteVpcRequest request
     * or Amazon_EC2_Model_DeleteVpcRequest object itself
     * @see Amazon_EC2_Model_DeleteVpc
     * @return Amazon_EC2_Model_DeleteVpcResponse Amazon_EC2_Model_DeleteVpcResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteVpc($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteVpcRequest) {
            require_once ('Amazon/EC2/Model/DeleteVpcRequest.php');
            $request = new Amazon_EC2_Model_DeleteVpcRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteVpcResponse.php');
        return Amazon_EC2_Model_DeleteVpcResponse::fromXML($this->_invoke($this->_convertDeleteVpc($request)));
}


            
    /**
     * Associate Dhcp Options 
     * Associates a set of DHCP options (that you've previously created) with the specified VPC.
     * Or, associates the default DHCP options with the VPC. The default set consists of the standard
     * EC2 host name, no domain name, no DNS server, no NTP server, and no NetBIOS server or node type.
     * After you associate the options with the VPC, any existing instances and all new instances
     * that you launch in that VPC use the options. For more information about the supported DHCP
     * options and using them with Amazon VPC, go to Using DHCP Options in the Amazon Virtual
     * Private Cloud Developer Guide.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-AssociateDhcpOptions.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_AssociateDhcpOptionsRequest request
     * or Amazon_EC2_Model_AssociateDhcpOptionsRequest object itself
     * @see Amazon_EC2_Model_AssociateDhcpOptions
     * @return Amazon_EC2_Model_AssociateDhcpOptionsResponse Amazon_EC2_Model_AssociateDhcpOptionsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function associateDhcpOptions($request)
    {
        if (!$request instanceof Amazon_EC2_Model_AssociateDhcpOptionsRequest) {
            require_once ('Amazon/EC2/Model/AssociateDhcpOptionsRequest.php');
            $request = new Amazon_EC2_Model_AssociateDhcpOptionsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/AssociateDhcpOptionsResponse.php');
        return Amazon_EC2_Model_AssociateDhcpOptionsResponse::fromXML($this->_invoke($this->_convertAssociateDhcpOptions($request)));
}


            
    /**
     * Describe Vpn Gateways 
     * Gives you information about your VPN gateways. You can filter the results to return
     * information only about VPN gateways that match criteria you specify. For example,
     * you could ask to get information about a particular VPN gateway (or all) only if the
     * gateway's state is pending or available. You can specify multiple filters (e.g., the
     * VPN gateway is in a particular Availability Zone and the gateway's state is pending or
     * available). The result includes information for a particular VPN gateway only if the
     * gateway matches all your filters. If there's no match, no special message is returned;
     * the response is simply empty.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeVpnGateways.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeVpnGatewaysRequest request
     * or Amazon_EC2_Model_DescribeVpnGatewaysRequest object itself
     * @see Amazon_EC2_Model_DescribeVpnGateways
     * @return Amazon_EC2_Model_DescribeVpnGatewaysResponse Amazon_EC2_Model_DescribeVpnGatewaysResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeVpnGateways($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeVpnGatewaysRequest) {
            require_once ('Amazon/EC2/Model/DescribeVpnGatewaysRequest.php');
            $request = new Amazon_EC2_Model_DescribeVpnGatewaysRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeVpnGatewaysResponse.php');
        return Amazon_EC2_Model_DescribeVpnGatewaysResponse::fromXML($this->_invoke($this->_convertDescribeVpnGateways($request)));
}


            
    /**
     * Create Subnet 
     * Creates a subnet in an existing VPC. You can create up to 20 subnets in a VPC.
     * If you add more than one subnet to a VPC, they're set up in a star topology with
     * a logical router in the middle. If you feel you need more than 20 subnets, you can
     * request more by going to http://aws.amazon.com/contact-us/vpc-request/.
     * When you create each subnet, you provide the VPC ID and the CIDR block you
     * want for the subnet. Once you create a subnet, you can't change its CIDR block.
     * The subnet's CIDR block can be the same as the VPC's CIDR block (assuming you
     * want only a single subnet in the VPC), or a subset of the VPC's CIDR block.
     * If you create more than one subnet in a VPC, the subnets' CIDR blocks must not overlap.
     * The smallest subnet (and VPC) you can create uses a /28 netmask (16 IP addresses),
     * and the largest uses a /18 netmask (16,384 IP addresses).
     * Important
     * AWS reserves both the first four and the last IP address in each subnet's CIDR block.
     * They're not available for use.
     * AWS might delete any subnet you create with this operation if you leave it inactive
     * for an extended period of time (inactive means that there are no running Amazon EC2
     * instances in the subnet).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateSubnet.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateSubnetRequest request
     * or Amazon_EC2_Model_CreateSubnetRequest object itself
     * @see Amazon_EC2_Model_CreateSubnet
     * @return Amazon_EC2_Model_CreateSubnetResponse Amazon_EC2_Model_CreateSubnetResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createSubnet($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateSubnetRequest) {
            require_once ('Amazon/EC2/Model/CreateSubnetRequest.php');
            $request = new Amazon_EC2_Model_CreateSubnetRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateSubnetResponse.php');
        return Amazon_EC2_Model_CreateSubnetResponse::fromXML($this->_invoke($this->_convertCreateSubnet($request)));
}


            
    /**
     * Delete Vpn Connection 
     * Deletes a VPN connection. Use this if you want to delete a VPC and
     * all its associated components. Another reason to use this operation
     * is if you believe the tunnel credentials for your VPN connection have
     * been compromised. In that situation, you can delete the VPN connection
     * and create a new one that has new keys, without needing to delete the
     * VPC or VPN gateway. If you create a new VPN connection, you must
     * reconfigure the customer gateway using the new configuration
     * information returned with the new VPN connection ID.
     * If you're deleting the VPC and all its associated parts, we recommend you
     * detach the VPN gateway from the VPC and delete the VPC before deleting
     * the VPN connection.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteVpnConnection.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteVpnConnectionRequest request
     * or Amazon_EC2_Model_DeleteVpnConnectionRequest object itself
     * @see Amazon_EC2_Model_DeleteVpnConnection
     * @return Amazon_EC2_Model_DeleteVpnConnectionResponse Amazon_EC2_Model_DeleteVpnConnectionResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteVpnConnection($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteVpnConnectionRequest) {
            require_once ('Amazon/EC2/Model/DeleteVpnConnectionRequest.php');
            $request = new Amazon_EC2_Model_DeleteVpnConnectionRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteVpnConnectionResponse.php');
        return Amazon_EC2_Model_DeleteVpnConnectionResponse::fromXML($this->_invoke($this->_convertDeleteVpnConnection($request)));
}


            
    /**
     * Delete Vpn Gateway 
     * Deletes a VPN gateway. Use this when you want to delete a VPC and all
     * its associated components because you no longer need them. We recommend
     * that before you delete a VPN gateway, you detach it from the VPC and
     * delete the VPN connection. Note that you don't need to delete the VPN
     * gateway if you just want to delete and re-create the VPN connection
     * between your VPC and data center.
     * AWS might delete any VPN gateway if you leave it inactive for an extended period of time
     * (inactive means that there's no VPN connection in use with the VPN gateway).
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteVpnGateway.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteVpnGatewayRequest request
     * or Amazon_EC2_Model_DeleteVpnGatewayRequest object itself
     * @see Amazon_EC2_Model_DeleteVpnGateway
     * @return Amazon_EC2_Model_DeleteVpnGatewayResponse Amazon_EC2_Model_DeleteVpnGatewayResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteVpnGateway($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteVpnGatewayRequest) {
            require_once ('Amazon/EC2/Model/DeleteVpnGatewayRequest.php');
            $request = new Amazon_EC2_Model_DeleteVpnGatewayRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteVpnGatewayResponse.php');
        return Amazon_EC2_Model_DeleteVpnGatewayResponse::fromXML($this->_invoke($this->_convertDeleteVpnGateway($request)));
}


            
    /**
     * Describe Customer Gateways 
     * Gives you information about your customer gateways. You can filter the results to return
     * information only about customer gateways that match criteria you specify. For example,
     * you could ask to get information about a particular customer gateway (or all) only if
     * the gateway's state is pending or available. You can specify multiple filters (e.g.,
     * the customer gateway has a particular IP address for the Internet-routable external
     * interface, and the gateway's state is pending or available). The result includes
     * information for a particular customer gateway only if the gateway matches all  your
     * filters. If there's no match, no special message is returned; the response is simply empty.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeCustomerGateways.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeCustomerGatewaysRequest request
     * or Amazon_EC2_Model_DescribeCustomerGatewaysRequest object itself
     * @see Amazon_EC2_Model_DescribeCustomerGateways
     * @return Amazon_EC2_Model_DescribeCustomerGatewaysResponse Amazon_EC2_Model_DescribeCustomerGatewaysResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeCustomerGateways($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeCustomerGatewaysRequest) {
            require_once ('Amazon/EC2/Model/DescribeCustomerGatewaysRequest.php');
            $request = new Amazon_EC2_Model_DescribeCustomerGatewaysRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeCustomerGatewaysResponse.php');
        return Amazon_EC2_Model_DescribeCustomerGatewaysResponse::fromXML($this->_invoke($this->_convertDescribeCustomerGateways($request)));
}


            
    /**
     * Create Vpn Connection 
     * Creates a new VPN connection between an existing VPN gateway and customer
     * gateway. The only supported connection type is ipsec.1.
     * The response includes information that you need to configure your customer gateway,
     * in XML format. We recommend you use the command line version of this operation
     * (ec2-create-vpn-connection), which lets you get the configuration information
     * formatted in a friendlier way. For information about the command, go to
     * ec2-create-vpn-connection in the Amazon Virtual Private Cloud Command Line Reference.
     * Important
     * We strongly recommend you use HTTPS when calling this operation because
     * the response contains sensitive cryptographic information for configuring
     * your customer gateway.
     * If you decide to shut down your VPN connection for any reason and then create a new
     * one, you must re-configure your customer gateway with the new information
     * returned from this call.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateVpnConnection.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateVpnConnectionRequest request
     * or Amazon_EC2_Model_CreateVpnConnectionRequest object itself
     * @see Amazon_EC2_Model_CreateVpnConnection
     * @return Amazon_EC2_Model_CreateVpnConnectionResponse Amazon_EC2_Model_CreateVpnConnectionResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createVpnConnection($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateVpnConnectionRequest) {
            require_once ('Amazon/EC2/Model/CreateVpnConnectionRequest.php');
            $request = new Amazon_EC2_Model_CreateVpnConnectionRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateVpnConnectionResponse.php');
        return Amazon_EC2_Model_CreateVpnConnectionResponse::fromXML($this->_invoke($this->_convertCreateVpnConnection($request)));
}


            
    /**
     * Describe Dhcp Options 
     * Gives you information about one or more sets of DHCP options. You can specify
     * one or more DHCP options set IDs, or no IDs (to describe all your sets of DHCP options).
     * The returned information consists of:
     * - The DHCP options set ID
     * - The options
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeDhcpOptions.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeDhcpOptionsRequest request
     * or Amazon_EC2_Model_DescribeDhcpOptionsRequest object itself
     * @see Amazon_EC2_Model_DescribeDhcpOptions
     * @return Amazon_EC2_Model_DescribeDhcpOptionsResponse Amazon_EC2_Model_DescribeDhcpOptionsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeDhcpOptions($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeDhcpOptionsRequest) {
            require_once ('Amazon/EC2/Model/DescribeDhcpOptionsRequest.php');
            $request = new Amazon_EC2_Model_DescribeDhcpOptionsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeDhcpOptionsResponse.php');
        return Amazon_EC2_Model_DescribeDhcpOptionsResponse::fromXML($this->_invoke($this->_convertDescribeDhcpOptions($request)));
}


            
    /**
     * Create Dhcp Options 
     * Creates a set of DHCP options that you can then associate with one or more VPCs,
     * causing all existing and new instances that you launch in those VPCs to use the
     * set of DHCP options. The following table lists the individual DHCP options you can
     * specify. For more information about the options, go to RFC 2132 - http://www.ietf.org/rfc/rfc2132.txt
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateDhcpOptions.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateDhcpOptionsRequest request
     * or Amazon_EC2_Model_CreateDhcpOptionsRequest object itself
     * @see Amazon_EC2_Model_CreateDhcpOptions
     * @return Amazon_EC2_Model_CreateDhcpOptionsResponse Amazon_EC2_Model_CreateDhcpOptionsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createDhcpOptions($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateDhcpOptionsRequest) {
            require_once ('Amazon/EC2/Model/CreateDhcpOptionsRequest.php');
            $request = new Amazon_EC2_Model_CreateDhcpOptionsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateDhcpOptionsResponse.php');
        return Amazon_EC2_Model_CreateDhcpOptionsResponse::fromXML($this->_invoke($this->_convertCreateDhcpOptions($request)));
}


            
    /**
     * Request Spot Instances 
     * Creates a Spot Instance request. Spot Instances are instances that automatically launch when your
     * request price exceeds the Spot Price that Amazon EC2 periodically calculates.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-RequestSpotInstances.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_RequestSpotInstancesRequest request
     * or Amazon_EC2_Model_RequestSpotInstancesRequest object itself
     * @see Amazon_EC2_Model_RequestSpotInstances
     * @return Amazon_EC2_Model_RequestSpotInstancesResponse Amazon_EC2_Model_RequestSpotInstancesResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function requestSpotInstances($request)
    {
        if (!$request instanceof Amazon_EC2_Model_RequestSpotInstancesRequest) {
            require_once ('Amazon/EC2/Model/RequestSpotInstancesRequest.php');
            $request = new Amazon_EC2_Model_RequestSpotInstancesRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/RequestSpotInstancesResponse.php');
        return Amazon_EC2_Model_RequestSpotInstancesResponse::fromXML($this->_invoke($this->_convertRequestSpotInstances($request)));
}


            
    /**
     * Describe Spot Instance Requests 
     * Describes Spot Instance requests. Spot Instances are instances that automatically launch when your
     * request price exceeds the Spot Price that Amazon EC2 periodically calculates.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSpotInstanceRequests.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest request
     * or Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest object itself
     * @see Amazon_EC2_Model_DescribeSpotInstanceRequests
     * @return Amazon_EC2_Model_DescribeSpotInstanceRequestsResponse Amazon_EC2_Model_DescribeSpotInstanceRequestsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSpotInstanceRequests($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest) {
            require_once ('Amazon/EC2/Model/DescribeSpotInstanceRequestsRequest.php');
            $request = new Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSpotInstanceRequestsResponse.php');
        return Amazon_EC2_Model_DescribeSpotInstanceRequestsResponse::fromXML($this->_invoke($this->_convertDescribeSpotInstanceRequests($request)));
}


            
    /**
     * Cancel Spot Instance Requests 
     * Cancels Spot Instance requests. Spot Instances are instances that automatically launch when your
     * request price exceeds the Spot Price that Amazon EC2 periodically calculates.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CancelSpotInstanceRequests.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CancelSpotInstanceRequestsRequest request
     * or Amazon_EC2_Model_CancelSpotInstanceRequestsRequest object itself
     * @see Amazon_EC2_Model_CancelSpotInstanceRequests
     * @return Amazon_EC2_Model_CancelSpotInstanceRequestsResponse Amazon_EC2_Model_CancelSpotInstanceRequestsResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function cancelSpotInstanceRequests($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CancelSpotInstanceRequestsRequest) {
            require_once ('Amazon/EC2/Model/CancelSpotInstanceRequestsRequest.php');
            $request = new Amazon_EC2_Model_CancelSpotInstanceRequestsRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CancelSpotInstanceRequestsResponse.php');
        return Amazon_EC2_Model_CancelSpotInstanceRequestsResponse::fromXML($this->_invoke($this->_convertCancelSpotInstanceRequests($request)));
}


            
    /**
     * Describe Spot Price History 
     * Describes historical pricing for Spot Instances. Spot Instances are instances that automatically launch
     * when your request price exceeds the Spot Price that Amazon EC2 periodically calculates.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSpotPriceHistory.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSpotPriceHistoryRequest request
     * or Amazon_EC2_Model_DescribeSpotPriceHistoryRequest object itself
     * @see Amazon_EC2_Model_DescribeSpotPriceHistory
     * @return Amazon_EC2_Model_DescribeSpotPriceHistoryResponse Amazon_EC2_Model_DescribeSpotPriceHistoryResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSpotPriceHistory($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSpotPriceHistoryRequest) {
            require_once ('Amazon/EC2/Model/DescribeSpotPriceHistoryRequest.php');
            $request = new Amazon_EC2_Model_DescribeSpotPriceHistoryRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSpotPriceHistoryResponse.php');
        return Amazon_EC2_Model_DescribeSpotPriceHistoryResponse::fromXML($this->_invoke($this->_convertDescribeSpotPriceHistory($request)));
}


            
    /**
     * Create Spot Datafeed Subscription 
     * Creates the data feed for spot instances, enabling you to view Spot Instance usage logs. You can
     * create one data feed per account.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-CreateSpotDatafeedSubscription.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_CreateSpotDatafeedSubscriptionRequest request
     * or Amazon_EC2_Model_CreateSpotDatafeedSubscriptionRequest object itself
     * @see Amazon_EC2_Model_CreateSpotDatafeedSubscription
     * @return Amazon_EC2_Model_CreateSpotDatafeedSubscriptionResponse Amazon_EC2_Model_CreateSpotDatafeedSubscriptionResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function createSpotDatafeedSubscription($request)
    {
        if (!$request instanceof Amazon_EC2_Model_CreateSpotDatafeedSubscriptionRequest) {
            require_once ('Amazon/EC2/Model/CreateSpotDatafeedSubscriptionRequest.php');
            $request = new Amazon_EC2_Model_CreateSpotDatafeedSubscriptionRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/CreateSpotDatafeedSubscriptionResponse.php');
        return Amazon_EC2_Model_CreateSpotDatafeedSubscriptionResponse::fromXML($this->_invoke($this->_convertCreateSpotDatafeedSubscription($request)));
}


            
    /**
     * Describe Spot Datafeed Subscription 
     * Describes the data feed for spot instances.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DescribeSpotDatafeedSubscription.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionRequest request
     * or Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionRequest object itself
     * @see Amazon_EC2_Model_DescribeSpotDatafeedSubscription
     * @return Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResponse Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function describeSpotDatafeedSubscription($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionRequest) {
            require_once ('Amazon/EC2/Model/DescribeSpotDatafeedSubscriptionRequest.php');
            $request = new Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DescribeSpotDatafeedSubscriptionResponse.php');
        return Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResponse::fromXML($this->_invoke($this->_convertDescribeSpotDatafeedSubscription($request)));
}


            
    /**
     * Delete Spot Datafeed Subscription 
     * Deletes the data feed for spot instances.
     * @see http://docs.amazonwebservices.com/AWSEC2/2009-11-30/DeveloperGuide/ApiReference-Query-DeleteSpotDatafeedSubscription.html
     * @param mixed $request array of parameters for Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionRequest request
     * or Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionRequest object itself
     * @see Amazon_EC2_Model_DeleteSpotDatafeedSubscription
     * @return Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionResponse Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionResponse
     *
     * @throws Amazon_EC2_Exception
     */
    public function deleteSpotDatafeedSubscription($request)
    {
        if (!$request instanceof Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionRequest) {
            require_once ('Amazon/EC2/Model/DeleteSpotDatafeedSubscriptionRequest.php');
            $request = new Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionRequest($request);
        }
        
        require_once ('Amazon/EC2/Model/DeleteSpotDatafeedSubscriptionResponse.php');
        return Amazon_EC2_Model_DeleteSpotDatafeedSubscriptionResponse::fromXML($this->_invoke($this->_convertDeleteSpotDatafeedSubscription($request)));
}

        // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);

            $shouldRetry = true;
            $retries = 0;
            do {
                try {
                        $response = $this->_httpPost($parameters);
                        if ($response['Status'] === 200) {
                            $shouldRetry = false;
                        } else {
                            if ($response['Status'] === 500 || $response['Status'] === 503) {
                                $shouldRetry = true;
                                $this->_pauseOnRetry(++$retries, $response['Status']);
                            } else {
                                throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status']);
                            }
                       }
                /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    require_once ('Amazon/EC2/Exception.php');
                    if ($e instanceof Amazon_EC2_Exception) {
                        throw $e;
                    } else {
                        require_once ('Amazon/EC2/Exception.php');
                        throw new Amazon_EC2_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_EC2_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_EC2_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }

        return $response['ResponseBody'];
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, Exception $e =  null)
    {
        $ex = null;
        if (!is_null($responseBody) && strpos($responseBody, '<') === 0) {
            if (preg_match('@<RequestId>(.*)</RequestId>.*<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?@mi',
                $responseBody, $errorMatcherOne)) {

                $requestId = $errorMatcherOne[1];
                $code = $errorMatcherOne[2];
                $message = $errorMatcherOne[3];

                require_once ('Amazon/EC2/Exception.php');
                $ex = new Amazon_EC2_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once ('Amazon/EC2/Exception.php');
                $ex = new Amazon_EC2_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once ('Amazon/EC2/Exception.php');
                $ex = new Amazon_EC2_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));

            } else {
                require_once ('Amazon/EC2/Exception.php');
                $ex = new Amazon_EC2_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once ('Amazon/EC2/Exception.php');
            $ex = new Amazon_EC2_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
        }
        return $ex;
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {

        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($this->_config['ServiceURL']);
        $post  = "POST / HTTP/1.0\r\n";
        $post .= "Host: " . $url['host'] . "\r\n";
        $post .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
        $post .= "Content-Length: " . strlen($query) . "\r\n";
        $post .= "User-Agent: " . $this->_config['UserAgent'] . "\r\n";
        $post .= "\r\n";
        $post .= $query;
        $port = array_key_exists('port',$url) ? $url['port'] : null;
        $scheme = '';

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = $port === null ? 80 : $port;
        }

        $response = '';
        if ($socket = @fsockopen($scheme . $url['host'], $port, $errno, $errstr, 10)) {

            fwrite($socket, $post);

            while (!feof($socket)) {
                $response .= fgets($socket, 1160);
            }
            fclose($socket);

            list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
            $other = preg_split("/\r\n|\n|\r/", $other);
            list($protocol, $code, $text) = explode(' ', trim(array_shift($other)), 3);
        } else {
            throw new Exception ("Unable to establish connection to host " . $url['host'] . " $errstr");
        }
        $actionResponseMatch =  "<" .  $parameters['Action'] . "Response";
        if (preg_match("/$actionResponseMatch/", $responseBody)) {
            $responseDoc = new DomDocument;
            $responseDoc->loadXML($responseBody);
            $xsltProcessor = new XsltProcessor();
            $xslTemplate = new DomDocument;
            $xslTemplate->loadXML(file_get_contents('Amazon/EC2/Model/' . $parameters['Action']. 'Response.xslt', /** search include path */ TRUE));
            $xsltProcessor->importStylesheet($xslTemplate);
            $responseBody = $xsltProcessor->transformToXML($responseDoc);
        }
        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_EC2_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('Amazon/EC2/Exception.php');
            throw new Amazon_EC2_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
        }
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (0 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV0($parameters);
        } else if (1 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV1($parameters);
        } else if (2 === $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 0
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV0(array $parameters) {
        return $parameters['Action'] .  $parameters['Timestamp'];
    }

    /**
     * Calculate String to Sign for SignatureVersion 1
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV1(array $parameters) {
        $data = '';
        uksort($parameters, 'strcasecmp');
        foreach ($parameters as $parameterName => $parameterValue) {
            $data .= $parameterName . $parameterValue;
        }
        return $data;
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
		return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }

                        
    /**
     * Convert AllocateAddressRequest to name value pairs
     */
    private function _convertAllocateAddress($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AllocateAddress';

        return $parameters;
    }
        
                                        
    /**
     * Convert AttachVpnGatewayRequest to name value pairs
     */
    private function _convertAttachVpnGateway($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AttachVpnGateway';
        if ($request->isSetVpnGatewayId()) {
            $parameters['VpnGatewayId'] =  $request->getVpnGatewayId();
        }
        if ($request->isSetVpcId()) {
            $parameters['VpcId'] =  $request->getVpcId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert AssociateDhcpOptionsRequest to name value pairs
     */
    private function _convertAssociateDhcpOptions($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AssociateDhcpOptions';
        if ($request->isSetDhcpOptionsId()) {
            $parameters['DhcpOptionsId'] =  $request->getDhcpOptionsId();
        }
        if ($request->isSetVpcId()) {
            $parameters['VpcId'] =  $request->getVpcId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert AssociateAddressRequest to name value pairs
     */
    private function _convertAssociateAddress($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AssociateAddress';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetPublicIp()) {
            $parameters['PublicIp'] =  $request->getPublicIp();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert AuthorizeSecurityGroupIngressRequest to name value pairs
     */
    private function _convertAuthorizeSecurityGroupIngress($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AuthorizeSecurityGroupIngress';
        if ($request->isSetUserId()) {
            $parameters['UserId'] =  $request->getUserId();
        }
        if ($request->isSetGroupName()) {
            $parameters['GroupName'] =  $request->getGroupName();
        }
        if ($request->isSetSourceSecurityGroupName()) {
            $parameters['SourceSecurityGroupName'] =  $request->getSourceSecurityGroupName();
        }
        if ($request->isSetSourceSecurityGroupOwnerId()) {
            $parameters['SourceSecurityGroupOwnerId'] =  $request->getSourceSecurityGroupOwnerId();
        }
        if ($request->isSetIpProtocol()) {
            $parameters['IpProtocol'] =  $request->getIpProtocol();
        }
        if ($request->isSetFromPort()) {
            $parameters['FromPort'] =  $request->getFromPort();
        }
        if ($request->isSetToPort()) {
            $parameters['ToPort'] =  $request->getToPort();
        }
        if ($request->isSetCidrIp()) {
            $parameters['CidrIp'] =  $request->getCidrIp();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert BundleInstanceRequest to name value pairs
     */
    private function _convertBundleInstance($request) {
        
        $parameters = array();
        $parameters['Action'] = 'BundleInstance';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetStorage()) {
            $storagebundleInstanceRequest = $request->getStorage();
            if ($storagebundleInstanceRequest->isSetS3()) {
                $s3storage = $storagebundleInstanceRequest->getS3();
                if ($s3storage->isSetBucket()) {
                    $parameters['Storage' . '.' . 'S3' . '.' . 'Bucket'] =  $s3storage->getBucket();
                }
                if ($s3storage->isSetPrefix()) {
                    $parameters['Storage' . '.' . 'S3' . '.' . 'Prefix'] =  $s3storage->getPrefix();
                }
                if ($s3storage->isSetAWSAccessKeyId()) {
                    $parameters['Storage' . '.' . 'S3' . '.' . 'AWSAccessKeyId'] =  $s3storage->getAWSAccessKeyId();
                }
                if ($s3storage->isSetUploadPolicy()) {
                    $parameters['Storage' . '.' . 'S3' . '.' . 'UploadPolicy'] =  $s3storage->getUploadPolicy();
                }
                if ($s3storage->isSetUploadPolicySignature()) {
                    $parameters['Storage' . '.' . 'S3' . '.' . 'UploadPolicySignature'] =  $s3storage->getUploadPolicySignature();
                }
            }
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CancelBundleTaskRequest to name value pairs
     */
    private function _convertCancelBundleTask($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CancelBundleTask';
        if ($request->isSetBundleId()) {
            $parameters['BundleId'] =  $request->getBundleId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ConfirmProductInstanceRequest to name value pairs
     */
    private function _convertConfirmProductInstance($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ConfirmProductInstance';
        if ($request->isSetProductCode()) {
            $parameters['ProductCode'] =  $request->getProductCode();
        }
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateImageRequest to name value pairs
     */
    private function _convertCreateImage($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateImage';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetName()) {
            $parameters['Name'] =  $request->getName();
        }
        if ($request->isSetDescription()) {
            $parameters['Description'] =  $request->getDescription();
        }
        if ($request->isSetNoReboot()) {
            $parameters['NoReboot'] =  $request->getNoReboot() ? "true" : "false";
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateKeyPairRequest to name value pairs
     */
    private function _convertCreateKeyPair($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateKeyPair';
        if ($request->isSetKeyName()) {
            $parameters['KeyName'] =  $request->getKeyName();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateSubnetRequest to name value pairs
     */
    private function _convertCreateSubnet($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateSubnet';
        if ($request->isSetVpcId()) {
            $parameters['VpcId'] =  $request->getVpcId();
        }
        if ($request->isSetCidrBlock()) {
            $parameters['CidrBlock'] =  $request->getCidrBlock();
        }
        if ($request->isSetAvailabilityZone()) {
            $parameters['AvailabilityZone'] =  $request->getAvailabilityZone();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateVpnConnectionRequest to name value pairs
     */
    private function _convertCreateVpnConnection($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateVpnConnection';
        if ($request->isSetType()) {
            $parameters['Type'] =  $request->getType();
        }
        if ($request->isSetCustomerGatewayId()) {
            $parameters['CustomerGatewayId'] =  $request->getCustomerGatewayId();
        }
        if ($request->isSetVpnGatewayId()) {
            $parameters['VpnGatewayId'] =  $request->getVpnGatewayId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateVpnGatewayRequest to name value pairs
     */
    private function _convertCreateVpnGateway($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateVpnGateway';
        if ($request->isSetType()) {
            $parameters['Type'] =  $request->getType();
        }
        if ($request->isSetAvailabilityZone()) {
            $parameters['AvailabilityZone'] =  $request->getAvailabilityZone();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateDhcpOptionsRequest to name value pairs
     */
    private function _convertCreateDhcpOptions($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateDhcpOptions';
        foreach ($request->getDhcpConfiguration() as $dhcpConfigurationcreateDhcpOptionsRequestIndex => $dhcpConfigurationcreateDhcpOptionsRequest) {
            if ($dhcpConfigurationcreateDhcpOptionsRequest->isSetKey()) {
                $parameters['DhcpConfiguration' . '.'  . ($dhcpConfigurationcreateDhcpOptionsRequestIndex + 1) . '.' . 'Key'] =  $dhcpConfigurationcreateDhcpOptionsRequest->getKey();
            }
            foreach  ($dhcpConfigurationcreateDhcpOptionsRequest->getValue() as $valuedhcpConfigurationIndex => $valuedhcpConfiguration) {
                $parameters['DhcpConfiguration' . '.'  . ($dhcpConfigurationIndex + 1) . '.' . 'Value' . '.'  . ($valuedhcpConfigurationIndex + 1)] =  $valuedhcpConfiguration;
            }

        }

        return $parameters;
    }
        
                                                
    /**
     * Convert CreateVpcRequest to name value pairs
     */
    private function _convertCreateVpc($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateVpc';
        if ($request->isSetCidrBlock()) {
            $parameters['CidrBlock'] =  $request->getCidrBlock();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateCustomerGatewayRequest to name value pairs
     */
    private function _convertCreateCustomerGateway($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateCustomerGateway';
        if ($request->isSetType()) {
            $parameters['Type'] =  $request->getType();
        }
        if ($request->isSetIpAddress()) {
            $parameters['IpAddress'] =  $request->getIpAddress();
        }
        if ($request->isSetBgpAsn()) {
            $parameters['BgpAsn'] =  $request->getBgpAsn();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateSecurityGroupRequest to name value pairs
     */
    private function _convertCreateSecurityGroup($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateSecurityGroup';
        if ($request->isSetGroupName()) {
            $parameters['GroupName'] =  $request->getGroupName();
        }
        if ($request->isSetGroupDescription()) {
            $parameters['GroupDescription'] =  $request->getGroupDescription();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteKeyPairRequest to name value pairs
     */
    private function _convertDeleteKeyPair($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteKeyPair';
        if ($request->isSetKeyName()) {
            $parameters['KeyName'] =  $request->getKeyName();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteVpcRequest to name value pairs
     */
    private function _convertDeleteVpc($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteVpc';
        if ($request->isSetVpcId()) {
            $parameters['VpcId'] =  $request->getVpcId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteVpnGatewayRequest to name value pairs
     */
    private function _convertDeleteVpnGateway($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteVpnGateway';
        if ($request->isSetVpnGatewayId()) {
            $parameters['VpnGatewayId'] =  $request->getVpnGatewayId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteVpnConnectionRequest to name value pairs
     */
    private function _convertDeleteVpnConnection($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteVpnConnection';
        if ($request->isSetVpnConnectionId()) {
            $parameters['VpnConnectionId'] =  $request->getVpnConnectionId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteDhcpOptionsRequest to name value pairs
     */
    private function _convertDeleteDhcpOptions($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteDhcpOptions';
        if ($request->isSetDhcpOptionsId()) {
            $parameters['DhcpOptionsId'] =  $request->getDhcpOptionsId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteCustomerGatewayRequest to name value pairs
     */
    private function _convertDeleteCustomerGateway($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteCustomerGateway';
        if ($request->isSetCustomerGatewayId()) {
            $parameters['CustomerGatewayId'] =  $request->getCustomerGatewayId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteSecurityGroupRequest to name value pairs
     */
    private function _convertDeleteSecurityGroup($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteSecurityGroup';
        if ($request->isSetGroupName()) {
            $parameters['GroupName'] =  $request->getGroupName();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteSubnetRequest to name value pairs
     */
    private function _convertDeleteSubnet($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteSubnet';
        if ($request->isSetSubnetId()) {
            $parameters['SubnetId'] =  $request->getSubnetId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeVpcsRequest to name value pairs
     */
    private function _convertDescribeVpcs($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeVpcs';
        foreach  ($request->getVpcId() as $vpcIddescribeVpcsRequestIndex => $vpcIddescribeVpcsRequest) {
            $parameters['VpcId' . '.'  . ($vpcIddescribeVpcsRequestIndex + 1)] =  $vpcIddescribeVpcsRequest;
        }
        foreach ($request->getFilter() as $filterdescribeVpcsRequestIndex => $filterdescribeVpcsRequest) {
            if ($filterdescribeVpcsRequest->isSetName()) {
                $parameters['Filter' . '.'  . ($filterdescribeVpcsRequestIndex + 1) . '.' . 'Name'] =  $filterdescribeVpcsRequest->getName();
            }
            foreach  ($filterdescribeVpcsRequest->getValue() as $valuefilterIndex => $valuefilter) {
                $parameters['Filter' . '.'  . ($filterIndex + 1) . '.' . 'Value' . '.'  . ($valuefilterIndex + 1)] =  $valuefilter;
            }

        }

        return $parameters;
    }
        
                                                
    /**
     * Convert DescribeVpnGatewaysRequest to name value pairs
     */
    private function _convertDescribeVpnGateways($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeVpnGateways';
        foreach  ($request->getVpnGatewayId() as $vpnGatewayIddescribeVpnGatewaysRequestIndex => $vpnGatewayIddescribeVpnGatewaysRequest) {
            $parameters['VpnGatewayId' . '.'  . ($vpnGatewayIddescribeVpnGatewaysRequestIndex + 1)] =  $vpnGatewayIddescribeVpnGatewaysRequest;
        }
        foreach ($request->getFilter() as $filterdescribeVpnGatewaysRequestIndex => $filterdescribeVpnGatewaysRequest) {
            if ($filterdescribeVpnGatewaysRequest->isSetName()) {
                $parameters['Filter' . '.'  . ($filterdescribeVpnGatewaysRequestIndex + 1) . '.' . 'Name'] =  $filterdescribeVpnGatewaysRequest->getName();
            }
            foreach  ($filterdescribeVpnGatewaysRequest->getValue() as $valuefilterIndex => $valuefilter) {
                $parameters['Filter' . '.'  . ($filterIndex + 1) . '.' . 'Value' . '.'  . ($valuefilterIndex + 1)] =  $valuefilter;
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeDhcpOptionsRequest to name value pairs
     */
    private function _convertDescribeDhcpOptions($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeDhcpOptions';
        foreach  ($request->getDhcpOptionsId() as $dhcpOptionsIddescribeDhcpOptionsRequestIndex => $dhcpOptionsIddescribeDhcpOptionsRequest) {
            $parameters['DhcpOptionsId' . '.'  . ($dhcpOptionsIddescribeDhcpOptionsRequestIndex + 1)] =  $dhcpOptionsIddescribeDhcpOptionsRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeVpnConnectionsRequest to name value pairs
     */
    private function _convertDescribeVpnConnections($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeVpnConnections';
        foreach  ($request->getVpnConnectionId() as $vpnConnectionIddescribeVpnConnectionsRequestIndex => $vpnConnectionIddescribeVpnConnectionsRequest) {
            $parameters['VpnConnectionId' . '.'  . ($vpnConnectionIddescribeVpnConnectionsRequestIndex + 1)] =  $vpnConnectionIddescribeVpnConnectionsRequest;
        }
        foreach ($request->getFilter() as $filterdescribeVpnConnectionsRequestIndex => $filterdescribeVpnConnectionsRequest) {
            if ($filterdescribeVpnConnectionsRequest->isSetName()) {
                $parameters['Filter' . '.'  . ($filterdescribeVpnConnectionsRequestIndex + 1) . '.' . 'Name'] =  $filterdescribeVpnConnectionsRequest->getName();
            }
            foreach  ($filterdescribeVpnConnectionsRequest->getValue() as $valuefilterIndex => $valuefilter) {
                $parameters['Filter' . '.'  . ($filterIndex + 1) . '.' . 'Value' . '.'  . ($valuefilterIndex + 1)] =  $valuefilter;
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeCustomerGatewaysRequest to name value pairs
     */
    private function _convertDescribeCustomerGateways($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeCustomerGateways';
        foreach  ($request->getCustomerGatewayId() as $customerGatewayIddescribeCustomerGatewaysRequestIndex => $customerGatewayIddescribeCustomerGatewaysRequest) {
            $parameters['CustomerGatewayId' . '.'  . ($customerGatewayIddescribeCustomerGatewaysRequestIndex + 1)] =  $customerGatewayIddescribeCustomerGatewaysRequest;
        }
        foreach ($request->getFilter() as $filterdescribeCustomerGatewaysRequestIndex => $filterdescribeCustomerGatewaysRequest) {
            if ($filterdescribeCustomerGatewaysRequest->isSetName()) {
                $parameters['Filter' . '.'  . ($filterdescribeCustomerGatewaysRequestIndex + 1) . '.' . 'Name'] =  $filterdescribeCustomerGatewaysRequest->getName();
            }
            foreach  ($filterdescribeCustomerGatewaysRequest->getValue() as $valuefilterIndex => $valuefilter) {
                $parameters['Filter' . '.'  . ($filterIndex + 1) . '.' . 'Value' . '.'  . ($valuefilterIndex + 1)] =  $valuefilter;
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeReservedInstancesOfferingsRequest to name value pairs
     */
    private function _convertDescribeReservedInstancesOfferings($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeReservedInstancesOfferings';
        foreach  ($request->getReservedInstancesId() as $reservedInstancesIddescribeReservedInstancesOfferingsRequestIndex => $reservedInstancesIddescribeReservedInstancesOfferingsRequest) {
            $parameters['ReservedInstancesId' . '.'  . ($reservedInstancesIddescribeReservedInstancesOfferingsRequestIndex + 1)] =  $reservedInstancesIddescribeReservedInstancesOfferingsRequest;
        }
        if ($request->isSetInstanceType()) {
            $parameters['InstanceType'] =  $request->getInstanceType();
        }
        if ($request->isSetAvailabilityZone()) {
            $parameters['AvailabilityZone'] =  $request->getAvailabilityZone();
        }
        if ($request->isSetProductDescription()) {
            $parameters['ProductDescription'] =  $request->getProductDescription();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeReservedInstancesRequest to name value pairs
     */
    private function _convertDescribeReservedInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeReservedInstances';
        foreach  ($request->getReservedInstancesId() as $reservedInstancesIddescribeReservedInstancesRequestIndex => $reservedInstancesIddescribeReservedInstancesRequest) {
            $parameters['ReservedInstancesId' . '.'  . ($reservedInstancesIddescribeReservedInstancesRequestIndex + 1)] =  $reservedInstancesIddescribeReservedInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeSubnetsRequest to name value pairs
     */
    private function _convertDescribeSubnets($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSubnets';
        foreach  ($request->getSubnetId() as $subnetIddescribeSubnetsRequestIndex => $subnetIddescribeSubnetsRequest) {
            $parameters['SubnetId' . '.'  . ($subnetIddescribeSubnetsRequestIndex + 1)] =  $subnetIddescribeSubnetsRequest;
        }
        foreach ($request->getFilter() as $filterdescribeSubnetsRequestIndex => $filterdescribeSubnetsRequest) {
            if ($filterdescribeSubnetsRequest->isSetName()) {
                $parameters['Filter' . '.'  . ($filterdescribeSubnetsRequestIndex + 1) . '.' . 'Name'] =  $filterdescribeSubnetsRequest->getName();
            }
            foreach  ($filterdescribeSubnetsRequest->getValue() as $valuefilterIndex => $valuefilter) {
                $parameters['Filter' . '.'  . ($filterIndex + 1) . '.' . 'Value' . '.'  . ($valuefilterIndex + 1)] =  $valuefilter;
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert PurchaseReservedInstancesOfferingRequest to name value pairs
     */
    private function _convertPurchaseReservedInstancesOffering($request) {
        
        $parameters = array();
        $parameters['Action'] = 'PurchaseReservedInstancesOffering';
        if ($request->isSetReservedInstancesOfferingId()) {
            $parameters['ReservedInstancesOfferingId'] =  $request->getReservedInstancesOfferingId();
        }
        if ($request->isSetInstanceCount()) {
            $parameters['InstanceCount'] =  $request->getInstanceCount();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeregisterImageRequest to name value pairs
     */
    private function _convertDeregisterImage($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeregisterImage';
        if ($request->isSetImageId()) {
            $parameters['ImageId'] =  $request->getImageId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeAddressesRequest to name value pairs
     */
    private function _convertDescribeAddresses($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeAddresses';
        foreach  ($request->getPublicIp() as $publicIpdescribeAddressesRequestIndex => $publicIpdescribeAddressesRequest) {
            $parameters['PublicIp' . '.'  . ($publicIpdescribeAddressesRequestIndex + 1)] =  $publicIpdescribeAddressesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeAvailabilityZonesRequest to name value pairs
     */
    private function _convertDescribeAvailabilityZones($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeAvailabilityZones';
        foreach  ($request->getZoneName() as $zoneNamedescribeAvailabilityZonesRequestIndex => $zoneNamedescribeAvailabilityZonesRequest) {
            $parameters['ZoneName' . '.'  . ($zoneNamedescribeAvailabilityZonesRequestIndex + 1)] =  $zoneNamedescribeAvailabilityZonesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeBundleTasksRequest to name value pairs
     */
    private function _convertDescribeBundleTasks($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeBundleTasks';
        foreach  ($request->getBundleId() as $bundleIddescribeBundleTasksRequestIndex => $bundleIddescribeBundleTasksRequest) {
            $parameters['BundleId' . '.'  . ($bundleIddescribeBundleTasksRequestIndex + 1)] =  $bundleIddescribeBundleTasksRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeImageAttributeRequest to name value pairs
     */
    private function _convertDescribeImageAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeImageAttribute';
        if ($request->isSetImageId()) {
            $parameters['ImageId'] =  $request->getImageId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeInstanceAttributeRequest to name value pairs
     */
    private function _convertDescribeInstanceAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeInstanceAttribute';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeSnapshotAttributeRequest to name value pairs
     */
    private function _convertDescribeSnapshotAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSnapshotAttribute';
        if ($request->isSetSnapshotId()) {
            $parameters['SnapshotId'] =  $request->getSnapshotId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeImagesRequest to name value pairs
     */
    private function _convertDescribeImages($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeImages';
        foreach  ($request->getImageId() as $imageIddescribeImagesRequestIndex => $imageIddescribeImagesRequest) {
            $parameters['ImageId' . '.'  . ($imageIddescribeImagesRequestIndex + 1)] =  $imageIddescribeImagesRequest;
        }
        foreach  ($request->getOwner() as $ownerdescribeImagesRequestIndex => $ownerdescribeImagesRequest) {
            $parameters['Owner' . '.'  . ($ownerdescribeImagesRequestIndex + 1)] =  $ownerdescribeImagesRequest;
        }
        foreach  ($request->getExecutableBy() as $executableBydescribeImagesRequestIndex => $executableBydescribeImagesRequest) {
            $parameters['ExecutableBy' . '.'  . ($executableBydescribeImagesRequestIndex + 1)] =  $executableBydescribeImagesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeInstancesRequest to name value pairs
     */
    private function _convertDescribeInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeInstances';
        foreach  ($request->getInstanceId() as $instanceIddescribeInstancesRequestIndex => $instanceIddescribeInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIddescribeInstancesRequestIndex + 1)] =  $instanceIddescribeInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeKeyPairsRequest to name value pairs
     */
    private function _convertDescribeKeyPairs($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeKeyPairs';
        foreach  ($request->getKeyName() as $keyNamedescribeKeyPairsRequestIndex => $keyNamedescribeKeyPairsRequest) {
            $parameters['KeyName' . '.'  . ($keyNamedescribeKeyPairsRequestIndex + 1)] =  $keyNamedescribeKeyPairsRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeSecurityGroupsRequest to name value pairs
     */
    private function _convertDescribeSecurityGroups($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSecurityGroups';
        foreach  ($request->getGroupName() as $groupNamedescribeSecurityGroupsRequestIndex => $groupNamedescribeSecurityGroupsRequest) {
            $parameters['GroupName' . '.'  . ($groupNamedescribeSecurityGroupsRequestIndex + 1)] =  $groupNamedescribeSecurityGroupsRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DisassociateAddressRequest to name value pairs
     */
    private function _convertDisassociateAddress($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DisassociateAddress';
        if ($request->isSetPublicIp()) {
            $parameters['PublicIp'] =  $request->getPublicIp();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert GetConsoleOutputRequest to name value pairs
     */
    private function _convertGetConsoleOutput($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetConsoleOutput';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert GetPasswordDataRequest to name value pairs
     */
    private function _convertGetPasswordData($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetPasswordData';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ModifyImageAttributeRequest to name value pairs
     */
    private function _convertModifyImageAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ModifyImageAttribute';
        if ($request->isSetImageId()) {
            $parameters['ImageId'] =  $request->getImageId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }
        if ($request->isSetOperationType()) {
            $parameters['OperationType'] =  $request->getOperationType();
        }
        foreach  ($request->getUserId() as $userIdmodifyImageAttributeRequestIndex => $userIdmodifyImageAttributeRequest) {
            $parameters['UserId' . '.'  . ($userIdmodifyImageAttributeRequestIndex + 1)] =  $userIdmodifyImageAttributeRequest;
        }
        foreach  ($request->getUserGroup() as $userGroupmodifyImageAttributeRequestIndex => $userGroupmodifyImageAttributeRequest) {
            $parameters['UserGroup' . '.'  . ($userGroupmodifyImageAttributeRequestIndex + 1)] =  $userGroupmodifyImageAttributeRequest;
        }
        foreach  ($request->getProductCode() as $productCodemodifyImageAttributeRequestIndex => $productCodemodifyImageAttributeRequest) {
            $parameters['ProductCode' . '.'  . ($productCodemodifyImageAttributeRequestIndex + 1)] =  $productCodemodifyImageAttributeRequest;
        }
        if ($request->isSetDescription()) {
            $parameters['Description'] =  $request->getDescription();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ModifyInstanceAttributeRequest to name value pairs
     */
    private function _convertModifyInstanceAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ModifyInstanceAttribute';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }
        if ($request->isSetValue()) {
            $parameters['Value'] =  $request->getValue();
        }
        foreach ($request->getBlockDeviceMapping() as $blockDeviceMappingmodifyInstanceAttributeRequestIndex => $blockDeviceMappingmodifyInstanceAttributeRequest) {
            if ($blockDeviceMappingmodifyInstanceAttributeRequest->isSetDeviceName()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingmodifyInstanceAttributeRequestIndex + 1) . '.' . 'DeviceName'] =  $blockDeviceMappingmodifyInstanceAttributeRequest->getDeviceName();
            }
            if ($blockDeviceMappingmodifyInstanceAttributeRequest->isSetVirtualName()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingmodifyInstanceAttributeRequestIndex + 1) . '.' . 'VirtualName'] =  $blockDeviceMappingmodifyInstanceAttributeRequest->getVirtualName();
            }
            if ($blockDeviceMappingmodifyInstanceAttributeRequest->isSetEbs()) {
                $ebsblockDeviceMapping = $blockDeviceMappingmodifyInstanceAttributeRequest->getEbs();
                if ($ebsblockDeviceMapping->isSetVolumeId()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingmodifyInstanceAttributeRequestIndex + 1) . '.' . 'Ebs' . '.' . 'VolumeId'] =  $ebsblockDeviceMapping->getVolumeId();
                }
                if ($ebsblockDeviceMapping->isSetDeleteOnTermination()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingmodifyInstanceAttributeRequestIndex + 1) . '.' . 'Ebs' . '.' . 'DeleteOnTermination'] =  $ebsblockDeviceMapping->getDeleteOnTermination() ? "true" : "false";
                }
            }
            if ($blockDeviceMappingmodifyInstanceAttributeRequest->isSetNoDevice()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingmodifyInstanceAttributeRequestIndex + 1) . '.' . 'NoDevice'] =  $blockDeviceMappingmodifyInstanceAttributeRequest->getNoDevice();
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ModifySnapshotAttributeRequest to name value pairs
     */
    private function _convertModifySnapshotAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ModifySnapshotAttribute';
        if ($request->isSetSnapshotId()) {
            $parameters['SnapshotId'] =  $request->getSnapshotId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }
        if ($request->isSetOperationType()) {
            $parameters['OperationType'] =  $request->getOperationType();
        }
        foreach  ($request->getUserId() as $userIdmodifySnapshotAttributeRequestIndex => $userIdmodifySnapshotAttributeRequest) {
            $parameters['UserId' . '.'  . ($userIdmodifySnapshotAttributeRequestIndex + 1)] =  $userIdmodifySnapshotAttributeRequest;
        }
        foreach  ($request->getUserGroup() as $userGroupmodifySnapshotAttributeRequestIndex => $userGroupmodifySnapshotAttributeRequest) {
            $parameters['UserGroup' . '.'  . ($userGroupmodifySnapshotAttributeRequestIndex + 1)] =  $userGroupmodifySnapshotAttributeRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert MonitorInstancesRequest to name value pairs
     */
    private function _convertMonitorInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'MonitorInstances';
        foreach  ($request->getInstanceId() as $instanceIdmonitorInstancesRequestIndex => $instanceIdmonitorInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIdmonitorInstancesRequestIndex + 1)] =  $instanceIdmonitorInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert UnmonitorInstancesRequest to name value pairs
     */
    private function _convertUnmonitorInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'UnmonitorInstances';
        foreach  ($request->getInstanceId() as $instanceIdunmonitorInstancesRequestIndex => $instanceIdunmonitorInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIdunmonitorInstancesRequestIndex + 1)] =  $instanceIdunmonitorInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert RebootInstancesRequest to name value pairs
     */
    private function _convertRebootInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RebootInstances';
        foreach  ($request->getInstanceId() as $instanceIdrebootInstancesRequestIndex => $instanceIdrebootInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIdrebootInstancesRequestIndex + 1)] =  $instanceIdrebootInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert RegisterImageRequest to name value pairs
     */
    private function _convertRegisterImage($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RegisterImage';
        if ($request->isSetImageLocation()) {
            $parameters['ImageLocation'] =  $request->getImageLocation();
        }
        if ($request->isSetName()) {
            $parameters['Name'] =  $request->getName();
        }
        if ($request->isSetDescription()) {
            $parameters['Description'] =  $request->getDescription();
        }
        if ($request->isSetArchitecture()) {
            $parameters['Architecture'] =  $request->getArchitecture();
        }
        if ($request->isSetKernelId()) {
            $parameters['KernelId'] =  $request->getKernelId();
        }
        if ($request->isSetRamdiskId()) {
            $parameters['RamdiskId'] =  $request->getRamdiskId();
        }
        if ($request->isSetRootDeviceName()) {
            $parameters['RootDeviceName'] =  $request->getRootDeviceName();
        }
        foreach ($request->getBlockDeviceMapping() as $blockDeviceMappingregisterImageRequestIndex => $blockDeviceMappingregisterImageRequest) {
            if ($blockDeviceMappingregisterImageRequest->isSetDeviceName()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingregisterImageRequestIndex + 1) . '.' . 'DeviceName'] =  $blockDeviceMappingregisterImageRequest->getDeviceName();
            }
            if ($blockDeviceMappingregisterImageRequest->isSetVirtualName()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingregisterImageRequestIndex + 1) . '.' . 'VirtualName'] =  $blockDeviceMappingregisterImageRequest->getVirtualName();
            }
            if ($blockDeviceMappingregisterImageRequest->isSetEbs()) {
                $ebsblockDeviceMapping = $blockDeviceMappingregisterImageRequest->getEbs();
                if ($ebsblockDeviceMapping->isSetSnapshotId()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingregisterImageRequestIndex + 1) . '.' . 'Ebs' . '.' . 'SnapshotId'] =  $ebsblockDeviceMapping->getSnapshotId();
                }
                if ($ebsblockDeviceMapping->isSetVolumeSize()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingregisterImageRequestIndex + 1) . '.' . 'Ebs' . '.' . 'VolumeSize'] =  $ebsblockDeviceMapping->getVolumeSize();
                }
                if ($ebsblockDeviceMapping->isSetDeleteOnTermination()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingregisterImageRequestIndex + 1) . '.' . 'Ebs' . '.' . 'DeleteOnTermination'] =  $ebsblockDeviceMapping->getDeleteOnTermination() ? "true" : "false";
                }
            }
            if ($blockDeviceMappingregisterImageRequest->isSetNoDevice()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingregisterImageRequestIndex + 1) . '.' . 'NoDevice'] =  $blockDeviceMappingregisterImageRequest->getNoDevice();
            }

        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ReleaseAddressRequest to name value pairs
     */
    private function _convertReleaseAddress($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ReleaseAddress';
        if ($request->isSetPublicIp()) {
            $parameters['PublicIp'] =  $request->getPublicIp();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ResetImageAttributeRequest to name value pairs
     */
    private function _convertResetImageAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ResetImageAttribute';
        if ($request->isSetImageId()) {
            $parameters['ImageId'] =  $request->getImageId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ResetInstanceAttributeRequest to name value pairs
     */
    private function _convertResetInstanceAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ResetInstanceAttribute';
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert ResetSnapshotAttributeRequest to name value pairs
     */
    private function _convertResetSnapshotAttribute($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ResetSnapshotAttribute';
        if ($request->isSetSnapshotId()) {
            $parameters['SnapshotId'] =  $request->getSnapshotId();
        }
        if ($request->isSetAttribute()) {
            $parameters['Attribute'] =  $request->getAttribute();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert RevokeSecurityGroupIngressRequest to name value pairs
     */
    private function _convertRevokeSecurityGroupIngress($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RevokeSecurityGroupIngress';
        if ($request->isSetUserId()) {
            $parameters['UserId'] =  $request->getUserId();
        }
        if ($request->isSetGroupName()) {
            $parameters['GroupName'] =  $request->getGroupName();
        }
        if ($request->isSetSourceSecurityGroupName()) {
            $parameters['SourceSecurityGroupName'] =  $request->getSourceSecurityGroupName();
        }
        if ($request->isSetSourceSecurityGroupOwnerId()) {
            $parameters['SourceSecurityGroupOwnerId'] =  $request->getSourceSecurityGroupOwnerId();
        }
        if ($request->isSetIpProtocol()) {
            $parameters['IpProtocol'] =  $request->getIpProtocol();
        }
        if ($request->isSetFromPort()) {
            $parameters['FromPort'] =  $request->getFromPort();
        }
        if ($request->isSetToPort()) {
            $parameters['ToPort'] =  $request->getToPort();
        }
        if ($request->isSetCidrIp()) {
            $parameters['CidrIp'] =  $request->getCidrIp();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert RunInstancesRequest to name value pairs
     */
    private function _convertRunInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RunInstances';
        if ($request->isSetImageId()) {
            $parameters['ImageId'] =  $request->getImageId();
        }
        if ($request->isSetMinCount()) {
            $parameters['MinCount'] =  $request->getMinCount();
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetKeyName()) {
            $parameters['KeyName'] =  $request->getKeyName();
        }
        foreach  ($request->getSecurityGroup() as $securityGrouprunInstancesRequestIndex => $securityGrouprunInstancesRequest) {
            $parameters['SecurityGroup' . '.'  . ($securityGrouprunInstancesRequestIndex + 1)] =  $securityGrouprunInstancesRequest;
        }
        if ($request->isSetUserData()) {
            $parameters['UserData'] =  $request->getUserData();
        }
        if ($request->isSetInstanceType()) {
            $parameters['InstanceType'] =  $request->getInstanceType();
        }
        if ($request->isSetPlacement()) {
            $placementrunInstancesRequest = $request->getPlacement();
            if ($placementrunInstancesRequest->isSetAvailabilityZone()) {
                $parameters['Placement' . '.' . 'AvailabilityZone'] =  $placementrunInstancesRequest->getAvailabilityZone();
            }
        }
        if ($request->isSetKernelId()) {
            $parameters['KernelId'] =  $request->getKernelId();
        }
        if ($request->isSetRamdiskId()) {
            $parameters['RamdiskId'] =  $request->getRamdiskId();
        }
        foreach ($request->getBlockDeviceMapping() as $blockDeviceMappingrunInstancesRequestIndex => $blockDeviceMappingrunInstancesRequest) {
            if ($blockDeviceMappingrunInstancesRequest->isSetDeviceName()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingrunInstancesRequestIndex + 1) . '.' . 'DeviceName'] =  $blockDeviceMappingrunInstancesRequest->getDeviceName();
            }
            if ($blockDeviceMappingrunInstancesRequest->isSetVirtualName()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingrunInstancesRequestIndex + 1) . '.' . 'VirtualName'] =  $blockDeviceMappingrunInstancesRequest->getVirtualName();
            }
            if ($blockDeviceMappingrunInstancesRequest->isSetEbs()) {
                $ebsblockDeviceMapping = $blockDeviceMappingrunInstancesRequest->getEbs();
                if ($ebsblockDeviceMapping->isSetSnapshotId()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingrunInstancesRequestIndex + 1) . '.' . 'Ebs' . '.' . 'SnapshotId'] =  $ebsblockDeviceMapping->getSnapshotId();
                }
                if ($ebsblockDeviceMapping->isSetVolumeSize()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingrunInstancesRequestIndex + 1) . '.' . 'Ebs' . '.' . 'VolumeSize'] =  $ebsblockDeviceMapping->getVolumeSize();
                }
                if ($ebsblockDeviceMapping->isSetDeleteOnTermination()) {
                    $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingrunInstancesRequestIndex + 1) . '.' . 'Ebs' . '.' . 'DeleteOnTermination'] =  $ebsblockDeviceMapping->getDeleteOnTermination() ? "true" : "false";
                }
            }
            if ($blockDeviceMappingrunInstancesRequest->isSetNoDevice()) {
                $parameters['BlockDeviceMapping' . '.'  . ($blockDeviceMappingrunInstancesRequestIndex + 1) . '.' . 'NoDevice'] =  $blockDeviceMappingrunInstancesRequest->getNoDevice();
            }

        }
        if ($request->isSetMonitoring()) {
            $monitoringrunInstancesRequest = $request->getMonitoring();
            if ($monitoringrunInstancesRequest->isSetEnabled()) {
                $parameters['Monitoring' . '.' . 'Enabled'] =  $monitoringrunInstancesRequest->getEnabled() ? "true" : "false";
            }
        }
        if ($request->isSetSubnetId()) {
            $parameters['SubnetId'] =  $request->getSubnetId();
        }
        if ($request->isSetAdditionalInfo()) {
            $parameters['AdditionalInfo'] =  $request->getAdditionalInfo();
        }
        if ($request->isSetDisableApiTermination()) {
            $parameters['DisableApiTermination'] =  $request->getDisableApiTermination() ? "true" : "false";
        }
        if ($request->isSetInstanceInitiatedShutdownBehavior()) {
            $parameters['InstanceInitiatedShutdownBehavior'] =  $request->getInstanceInitiatedShutdownBehavior();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert StopInstancesRequest to name value pairs
     */
    private function _convertStopInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'StopInstances';
        foreach  ($request->getInstanceId() as $instanceIdstopInstancesRequestIndex => $instanceIdstopInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIdstopInstancesRequestIndex + 1)] =  $instanceIdstopInstancesRequest;
        }
        if ($request->isSetForce()) {
            $parameters['Force'] =  $request->getForce() ? "true" : "false";
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert StartInstancesRequest to name value pairs
     */
    private function _convertStartInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'StartInstances';
        foreach  ($request->getInstanceId() as $instanceIdstartInstancesRequestIndex => $instanceIdstartInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIdstartInstancesRequestIndex + 1)] =  $instanceIdstartInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert TerminateInstancesRequest to name value pairs
     */
    private function _convertTerminateInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'TerminateInstances';
        foreach  ($request->getInstanceId() as $instanceIdterminateInstancesRequestIndex => $instanceIdterminateInstancesRequest) {
            $parameters['InstanceId' . '.'  . ($instanceIdterminateInstancesRequestIndex + 1)] =  $instanceIdterminateInstancesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteVolumeRequest to name value pairs
     */
    private function _convertDeleteVolume($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteVolume';
        if ($request->isSetVolumeId()) {
            $parameters['VolumeId'] =  $request->getVolumeId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateVolumeRequest to name value pairs
     */
    private function _convertCreateVolume($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateVolume';
        if ($request->isSetSize()) {
            $parameters['Size'] =  $request->getSize();
        }
        if ($request->isSetSnapshotId()) {
            $parameters['SnapshotId'] =  $request->getSnapshotId();
        }
        if ($request->isSetAvailabilityZone()) {
            $parameters['AvailabilityZone'] =  $request->getAvailabilityZone();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeVolumesRequest to name value pairs
     */
    private function _convertDescribeVolumes($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeVolumes';
        foreach  ($request->getVolumeId() as $volumeIddescribeVolumesRequestIndex => $volumeIddescribeVolumesRequest) {
            $parameters['VolumeId' . '.'  . ($volumeIddescribeVolumesRequestIndex + 1)] =  $volumeIddescribeVolumesRequest;
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DetachVolumeRequest to name value pairs
     */
    private function _convertDetachVolume($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DetachVolume';
        if ($request->isSetVolumeId()) {
            $parameters['VolumeId'] =  $request->getVolumeId();
        }
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetDevice()) {
            $parameters['Device'] =  $request->getDevice();
        }
        if ($request->isSetForce()) {
            $parameters['Force'] =  $request->getForce() ? "true" : "false";
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DetachVpnGatewayRequest to name value pairs
     */
    private function _convertDetachVpnGateway($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DetachVpnGateway';
        if ($request->isSetVpnGatewayId()) {
            $parameters['VpnGatewayId'] =  $request->getVpnGatewayId();
        }
        if ($request->isSetVpcId()) {
            $parameters['VpcId'] =  $request->getVpcId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DescribeSnapshotsRequest to name value pairs
     */
    private function _convertDescribeSnapshots($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSnapshots';
        foreach  ($request->getSnapshotId() as $snapshotIddescribeSnapshotsRequestIndex => $snapshotIddescribeSnapshotsRequest) {
            $parameters['SnapshotId' . '.'  . ($snapshotIddescribeSnapshotsRequestIndex + 1)] =  $snapshotIddescribeSnapshotsRequest;
        }
        if ($request->isSetOwner()) {
            $parameters['Owner'] =  $request->getOwner();
        }
        if ($request->isSetRestorableBy()) {
            $parameters['RestorableBy'] =  $request->getRestorableBy();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert DeleteSnapshotRequest to name value pairs
     */
    private function _convertDeleteSnapshot($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteSnapshot';
        if ($request->isSetSnapshotId()) {
            $parameters['SnapshotId'] =  $request->getSnapshotId();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert CreateSnapshotRequest to name value pairs
     */
    private function _convertCreateSnapshot($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateSnapshot';
        if ($request->isSetVolumeId()) {
            $parameters['VolumeId'] =  $request->getVolumeId();
        }
        if ($request->isSetDescription()) {
            $parameters['Description'] =  $request->getDescription();
        }

        return $parameters;
    }
        
                                        
    /**
     * Convert AttachVolumeRequest to name value pairs
     */
    private function _convertAttachVolume($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AttachVolume';
        if ($request->isSetVolumeId()) {
            $parameters['VolumeId'] =  $request->getVolumeId();
        }
        if ($request->isSetInstanceId()) {
            $parameters['InstanceId'] =  $request->getInstanceId();
        }
        if ($request->isSetDevice()) {
            $parameters['Device'] =  $request->getDevice();
        }

        return $parameters;
    }
        
                                                                                                                                                                                                                                                                                                                                                                                
    /**
     * Convert DescribeRegionsRequest to name value pairs
     */
    private function _convertDescribeRegions($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeRegions';
        foreach  ($request->getRegionName() as $regionNamedescribeRegionsRequestIndex => $regionNamedescribeRegionsRequest) {
            $parameters['RegionName' . '.'  . ($regionNamedescribeRegionsRequestIndex + 1)] =  $regionNamedescribeRegionsRequest;
        }

        return $parameters;
    }
        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
    /**
     * Convert RequestSpotInstancesRequest to name value pairs
     */
    private function _convertRequestSpotInstances($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RequestSpotInstances';
        if ($request->isSetSpotPrice()) {
            $parameters['SpotPrice'] =  $request->getSpotPrice();
        }
        if ($request->isSetInstanceCount()) {
            $parameters['InstanceCount'] =  $request->getInstanceCount();
        }
        if ($request->isSetType()) {
            $parameters['Type'] =  $request->getType();
        }
        if ($request->isSetValidFrom()) {
            $parameters['ValidFrom'] =  $request->getValidFrom();
        }
        if ($request->isSetValidUntil()) {
            $parameters['ValidUntil'] =  $request->getValidUntil();
        }
        if ($request->isSetLaunchGroup()) {
            $parameters['LaunchGroup'] =  $request->getLaunchGroup();
        }
        if ($request->isSetAvailabilityZoneGroup()) {
            $parameters['AvailabilityZoneGroup'] =  $request->getAvailabilityZoneGroup();
        }
        if ($request->isSetLaunchSpecification()) {
            $launchSpecificationrequestSpotInstancesRequest = $request->getLaunchSpecification();
            if ($launchSpecificationrequestSpotInstancesRequest->isSetImageId()) {
                $parameters['LaunchSpecification' . '.' . 'ImageId'] =  $launchSpecificationrequestSpotInstancesRequest->getImageId();
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetKeyName()) {
                $parameters['LaunchSpecification' . '.' . 'KeyName'] =  $launchSpecificationrequestSpotInstancesRequest->getKeyName();
            }
            foreach  ($launchSpecificationrequestSpotInstancesRequest->getSecurityGroup() as $securityGrouplaunchSpecificationIndex => $securityGrouplaunchSpecification) {
                $parameters['LaunchSpecification' . '.' . 'SecurityGroup' . '.'  . ($securityGrouplaunchSpecificationIndex + 1)] =  $securityGrouplaunchSpecification;
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetUserData()) {
                $parameters['LaunchSpecification' . '.' . 'UserData'] =  $launchSpecificationrequestSpotInstancesRequest->getUserData();
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetAddressingType()) {
                $parameters['LaunchSpecification' . '.' . 'AddressingType'] =  $launchSpecificationrequestSpotInstancesRequest->getAddressingType();
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetInstanceType()) {
                $parameters['LaunchSpecification' . '.' . 'InstanceType'] =  $launchSpecificationrequestSpotInstancesRequest->getInstanceType();
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetPlacement()) {
                $placementlaunchSpecification = $launchSpecificationrequestSpotInstancesRequest->getPlacement();
                if ($placementlaunchSpecification->isSetAvailabilityZone()) {
                    $parameters['LaunchSpecification' . '.' . 'Placement' . '.' . 'AvailabilityZone'] =  $placementlaunchSpecification->getAvailabilityZone();
                }
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetKernelId()) {
                $parameters['LaunchSpecification' . '.' . 'KernelId'] =  $launchSpecificationrequestSpotInstancesRequest->getKernelId();
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetRamdiskId()) {
                $parameters['LaunchSpecification' . '.' . 'RamdiskId'] =  $launchSpecificationrequestSpotInstancesRequest->getRamdiskId();
            }
            foreach ($launchSpecificationrequestSpotInstancesRequest->getBlockDeviceMapping() as $blockDeviceMappinglaunchSpecificationIndex => $blockDeviceMappinglaunchSpecification) {
                if ($blockDeviceMappinglaunchSpecification->isSetDeviceName()) {
                    $parameters['LaunchSpecification' . '.' . 'BlockDeviceMapping' . '.'  . ($blockDeviceMappinglaunchSpecificationIndex + 1) . '.' . 'DeviceName'] =  $blockDeviceMappinglaunchSpecification->getDeviceName();
                }
                if ($blockDeviceMappinglaunchSpecification->isSetVirtualName()) {
                    $parameters['LaunchSpecification' . '.' . 'BlockDeviceMapping' . '.'  . ($blockDeviceMappinglaunchSpecificationIndex + 1) . '.' . 'VirtualName'] =  $blockDeviceMappinglaunchSpecification->getVirtualName();
                }
                if ($blockDeviceMappinglaunchSpecification->isSetEbs()) {
                    $ebsblockDeviceMapping = $blockDeviceMappinglaunchSpecification->getEbs();
                    if ($ebsblockDeviceMapping->isSetSnapshotId()) {
                        $parameters['LaunchSpecification' . '.' . 'BlockDeviceMapping' . '.'  . ($blockDeviceMappinglaunchSpecificationIndex + 1) . '.' . 'Ebs' . '.' . 'SnapshotId'] =  $ebsblockDeviceMapping->getSnapshotId();
                    }
                    if ($ebsblockDeviceMapping->isSetVolumeSize()) {
                        $parameters['LaunchSpecification' . '.' . 'BlockDeviceMapping' . '.'  . ($blockDeviceMappinglaunchSpecificationIndex + 1) . '.' . 'Ebs' . '.' . 'VolumeSize'] =  $ebsblockDeviceMapping->getVolumeSize();
                    }
                    if ($ebsblockDeviceMapping->isSetDeleteOnTermination()) {
                        $parameters['LaunchSpecification' . '.' . 'BlockDeviceMapping' . '.'  . ($blockDeviceMappinglaunchSpecificationIndex + 1) . '.' . 'Ebs' . '.' . 'DeleteOnTermination'] =  $ebsblockDeviceMapping->getDeleteOnTermination() ? "true" : "false";
                    }
                }
                if ($blockDeviceMappinglaunchSpecification->isSetNoDevice()) {
                    $parameters['LaunchSpecification' . '.' . 'BlockDeviceMapping' . '.'  . ($blockDeviceMappinglaunchSpecificationIndex + 1) . '.' . 'NoDevice'] =  $blockDeviceMappinglaunchSpecification->getNoDevice();
                }

            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetMonitoring()) {
                $monitoringlaunchSpecification = $launchSpecificationrequestSpotInstancesRequest->getMonitoring();
                if ($monitoringlaunchSpecification->isSetEnabled()) {
                    $parameters['LaunchSpecification' . '.' . 'Monitoring' . '.' . 'Enabled'] =  $monitoringlaunchSpecification->getEnabled() ? "true" : "false";
                }
            }
            if ($launchSpecificationrequestSpotInstancesRequest->isSetSubnetId()) {
                $parameters['LaunchSpecification' . '.' . 'SubnetId'] =  $launchSpecificationrequestSpotInstancesRequest->getSubnetId();
            }
        }

        return $parameters;
    }
        
                                                                                
    /**
     * Convert DescribeSpotInstanceRequestsRequest to name value pairs
     */
    private function _convertDescribeSpotInstanceRequests($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSpotInstanceRequests';
        foreach  ($request->getSpotInstanceRequestId() as $spotInstanceRequestIddescribeSpotInstanceRequestsRequestIndex => $spotInstanceRequestIddescribeSpotInstanceRequestsRequest) {
            $parameters['SpotInstanceRequestId' . '.'  . ($spotInstanceRequestIddescribeSpotInstanceRequestsRequestIndex + 1)] =  $spotInstanceRequestIddescribeSpotInstanceRequestsRequest;
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert CancelSpotInstanceRequestsRequest to name value pairs
     */
    private function _convertCancelSpotInstanceRequests($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CancelSpotInstanceRequests';
        foreach  ($request->getSpotInstanceRequestId() as $spotInstanceRequestIdcancelSpotInstanceRequestsRequestIndex => $spotInstanceRequestIdcancelSpotInstanceRequestsRequest) {
            $parameters['SpotInstanceRequestId' . '.'  . ($spotInstanceRequestIdcancelSpotInstanceRequestsRequestIndex + 1)] =  $spotInstanceRequestIdcancelSpotInstanceRequestsRequest;
        }

        return $parameters;
    }
        
                                                        
    /**
     * Convert DescribeSpotPriceHistoryRequest to name value pairs
     */
    private function _convertDescribeSpotPriceHistory($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSpotPriceHistory';
        if ($request->isSetStartTime()) {
            $parameters['StartTime'] =  $request->getStartTime();
        }
        if ($request->isSetEndTime()) {
            $parameters['EndTime'] =  $request->getEndTime();
        }
        foreach  ($request->getInstanceType() as $instanceTypedescribeSpotPriceHistoryRequestIndex => $instanceTypedescribeSpotPriceHistoryRequest) {
            $parameters['InstanceType' . '.'  . ($instanceTypedescribeSpotPriceHistoryRequestIndex + 1)] =  $instanceTypedescribeSpotPriceHistoryRequest;
        }
        foreach  ($request->getProductDescription() as $productDescriptiondescribeSpotPriceHistoryRequestIndex => $productDescriptiondescribeSpotPriceHistoryRequest) {
            $parameters['ProductDescription' . '.'  . ($productDescriptiondescribeSpotPriceHistoryRequestIndex + 1)] =  $productDescriptiondescribeSpotPriceHistoryRequest;
        }

        return $parameters;
    }
        
                                                        
    /**
     * Convert CreateSpotDatafeedSubscriptionRequest to name value pairs
     */
    private function _convertCreateSpotDatafeedSubscription($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateSpotDatafeedSubscription';
        if ($request->isSetBucket()) {
            $parameters['Bucket'] =  $request->getBucket();
        }
        if ($request->isSetPrefix()) {
            $parameters['Prefix'] =  $request->getPrefix();
        }

        return $parameters;
    }
        
                                                        
    /**
     * Convert DescribeSpotDatafeedSubscriptionRequest to name value pairs
     */
    private function _convertDescribeSpotDatafeedSubscription($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DescribeSpotDatafeedSubscription';

        return $parameters;
    }
        
                                                
    /**
     * Convert DeleteSpotDatafeedSubscriptionRequest to name value pairs
     */
    private function _convertDeleteSpotDatafeedSubscription($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteSpotDatafeedSubscription';

        return $parameters;
    }
        
                                        

}