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
 *  @see Amazon_EC2_Model
 */
require_once ('Amazon/EC2/Model.php');  

    

/**
 * Amazon_EC2_Model_RunningInstance
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>ImageId: string</li>
 * <li>InstanceState: Amazon_EC2_Model_InstanceState</li>
 * <li>PrivateDnsName: string</li>
 * <li>PublicDnsName: string</li>
 * <li>StateTransitionReason: string</li>
 * <li>KeyName: string</li>
 * <li>AmiLaunchIndex: string</li>
 * <li>ProductCode: string</li>
 * <li>InstanceType: string</li>
 * <li>LaunchTime: string</li>
 * <li>Placement: Amazon_EC2_Model_Placement</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>Platform: string</li>
 * <li>Monitoring: Amazon_EC2_Model_Monitoring</li>
 * <li>SubnetId: string</li>
 * <li>VpcId: string</li>
 * <li>PrivateIpAddress: string</li>
 * <li>IpAddress: string</li>
 * <li>StateReason: Amazon_EC2_Model_StateReason</li>
 * <li>Architecture: string</li>
 * <li>RootDeviceType: string</li>
 * <li>RootDeviceName: string</li>
 * <li>BlockDeviceMapping: Amazon_EC2_Model_InstanceBlockDeviceMapping</li>
 * <li>InstanceLifecycle: string</li>
 * <li>SpotInstanceRequestId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RunningInstance extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RunningInstance
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>ImageId: string</li>
     * <li>InstanceState: Amazon_EC2_Model_InstanceState</li>
     * <li>PrivateDnsName: string</li>
     * <li>PublicDnsName: string</li>
     * <li>StateTransitionReason: string</li>
     * <li>KeyName: string</li>
     * <li>AmiLaunchIndex: string</li>
     * <li>ProductCode: string</li>
     * <li>InstanceType: string</li>
     * <li>LaunchTime: string</li>
     * <li>Placement: Amazon_EC2_Model_Placement</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>Platform: string</li>
     * <li>Monitoring: Amazon_EC2_Model_Monitoring</li>
     * <li>SubnetId: string</li>
     * <li>VpcId: string</li>
     * <li>PrivateIpAddress: string</li>
     * <li>IpAddress: string</li>
     * <li>StateReason: Amazon_EC2_Model_StateReason</li>
     * <li>Architecture: string</li>
     * <li>RootDeviceType: string</li>
     * <li>RootDeviceName: string</li>
     * <li>BlockDeviceMapping: Amazon_EC2_Model_InstanceBlockDeviceMapping</li>
     * <li>InstanceLifecycle: string</li>
     * <li>SpotInstanceRequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ImageId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceState' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_InstanceState'),
        'PrivateDnsName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'PublicDnsName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StateTransitionReason' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KeyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AmiLaunchIndex' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductCode' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Placement' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Placement'),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Platform' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Monitoring' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Monitoring'),
        'SubnetId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpcId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'PrivateIpAddress' => array('FieldValue' => null, 'FieldType' => 'string'),
        'IpAddress' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StateReason' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_StateReason'),
        'Architecture' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RootDeviceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RootDeviceName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMapping' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_InstanceBlockDeviceMapping')),
        'InstanceLifecycle' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SpotInstanceRequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceId property.
     * 
     * @return string InstanceId
     */
    public function getInstanceId() 
    {
        return $this->_fields['InstanceId']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceId property.
     * 
     * @param string InstanceId
     * @return this instance
     */
    public function setInstanceId($value) 
    {
        $this->_fields['InstanceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceId and returns this instance
     * 
     * @param string $value InstanceId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withInstanceId($value)
    {
        $this->setInstanceId($value);
        return $this;
    }


    /**
     * Checks if InstanceId is set
     * 
     * @return bool true if InstanceId  is set
     */
    public function isSetInstanceId()
    {
        return !is_null($this->_fields['InstanceId']['FieldValue']);
    }

    /**
     * Gets the value of the ImageId property.
     * 
     * @return string ImageId
     */
    public function getImageId() 
    {
        return $this->_fields['ImageId']['FieldValue'];
    }

    /**
     * Sets the value of the ImageId property.
     * 
     * @param string ImageId
     * @return this instance
     */
    public function setImageId($value) 
    {
        $this->_fields['ImageId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageId and returns this instance
     * 
     * @param string $value ImageId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withImageId($value)
    {
        $this->setImageId($value);
        return $this;
    }


    /**
     * Checks if ImageId is set
     * 
     * @return bool true if ImageId  is set
     */
    public function isSetImageId()
    {
        return !is_null($this->_fields['ImageId']['FieldValue']);
    }

    /**
     * Gets the value of the InstanceState.
     * 
     * @return InstanceState InstanceState
     */
    public function getInstanceState() 
    {
        return $this->_fields['InstanceState']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceState.
     * 
     * @param InstanceState InstanceState
     * @return void
     */
    public function setInstanceState($value) 
    {
        $this->_fields['InstanceState']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the InstanceState  and returns this instance
     * 
     * @param InstanceState $value InstanceState
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withInstanceState($value)
    {
        $this->setInstanceState($value);
        return $this;
    }


    /**
     * Checks if InstanceState  is set
     * 
     * @return bool true if InstanceState property is set
     */
    public function isSetInstanceState()
    {
        return !is_null($this->_fields['InstanceState']['FieldValue']);

    }

    /**
     * Gets the value of the PrivateDnsName property.
     * 
     * @return string PrivateDnsName
     */
    public function getPrivateDnsName() 
    {
        return $this->_fields['PrivateDnsName']['FieldValue'];
    }

    /**
     * Sets the value of the PrivateDnsName property.
     * 
     * @param string PrivateDnsName
     * @return this instance
     */
    public function setPrivateDnsName($value) 
    {
        $this->_fields['PrivateDnsName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PrivateDnsName and returns this instance
     * 
     * @param string $value PrivateDnsName
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withPrivateDnsName($value)
    {
        $this->setPrivateDnsName($value);
        return $this;
    }


    /**
     * Checks if PrivateDnsName is set
     * 
     * @return bool true if PrivateDnsName  is set
     */
    public function isSetPrivateDnsName()
    {
        return !is_null($this->_fields['PrivateDnsName']['FieldValue']);
    }

    /**
     * Gets the value of the PublicDnsName property.
     * 
     * @return string PublicDnsName
     */
    public function getPublicDnsName() 
    {
        return $this->_fields['PublicDnsName']['FieldValue'];
    }

    /**
     * Sets the value of the PublicDnsName property.
     * 
     * @param string PublicDnsName
     * @return this instance
     */
    public function setPublicDnsName($value) 
    {
        $this->_fields['PublicDnsName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PublicDnsName and returns this instance
     * 
     * @param string $value PublicDnsName
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withPublicDnsName($value)
    {
        $this->setPublicDnsName($value);
        return $this;
    }


    /**
     * Checks if PublicDnsName is set
     * 
     * @return bool true if PublicDnsName  is set
     */
    public function isSetPublicDnsName()
    {
        return !is_null($this->_fields['PublicDnsName']['FieldValue']);
    }

    /**
     * Gets the value of the StateTransitionReason property.
     * 
     * @return string StateTransitionReason
     */
    public function getStateTransitionReason() 
    {
        return $this->_fields['StateTransitionReason']['FieldValue'];
    }

    /**
     * Sets the value of the StateTransitionReason property.
     * 
     * @param string StateTransitionReason
     * @return this instance
     */
    public function setStateTransitionReason($value) 
    {
        $this->_fields['StateTransitionReason']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StateTransitionReason and returns this instance
     * 
     * @param string $value StateTransitionReason
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withStateTransitionReason($value)
    {
        $this->setStateTransitionReason($value);
        return $this;
    }


    /**
     * Checks if StateTransitionReason is set
     * 
     * @return bool true if StateTransitionReason  is set
     */
    public function isSetStateTransitionReason()
    {
        return !is_null($this->_fields['StateTransitionReason']['FieldValue']);
    }

    /**
     * Gets the value of the KeyName property.
     * 
     * @return string KeyName
     */
    public function getKeyName() 
    {
        return $this->_fields['KeyName']['FieldValue'];
    }

    /**
     * Sets the value of the KeyName property.
     * 
     * @param string KeyName
     * @return this instance
     */
    public function setKeyName($value) 
    {
        $this->_fields['KeyName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KeyName and returns this instance
     * 
     * @param string $value KeyName
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withKeyName($value)
    {
        $this->setKeyName($value);
        return $this;
    }


    /**
     * Checks if KeyName is set
     * 
     * @return bool true if KeyName  is set
     */
    public function isSetKeyName()
    {
        return !is_null($this->_fields['KeyName']['FieldValue']);
    }

    /**
     * Gets the value of the AmiLaunchIndex property.
     * 
     * @return string AmiLaunchIndex
     */
    public function getAmiLaunchIndex() 
    {
        return $this->_fields['AmiLaunchIndex']['FieldValue'];
    }

    /**
     * Sets the value of the AmiLaunchIndex property.
     * 
     * @param string AmiLaunchIndex
     * @return this instance
     */
    public function setAmiLaunchIndex($value) 
    {
        $this->_fields['AmiLaunchIndex']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AmiLaunchIndex and returns this instance
     * 
     * @param string $value AmiLaunchIndex
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withAmiLaunchIndex($value)
    {
        $this->setAmiLaunchIndex($value);
        return $this;
    }


    /**
     * Checks if AmiLaunchIndex is set
     * 
     * @return bool true if AmiLaunchIndex  is set
     */
    public function isSetAmiLaunchIndex()
    {
        return !is_null($this->_fields['AmiLaunchIndex']['FieldValue']);
    }

    /**
     * Gets the value of the ProductCode .
     * 
     * @return array of string ProductCode
     */
    public function getProductCode() 
    {
        return $this->_fields['ProductCode']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCode.
     * 
     * @param string or an array of string ProductCode
     * @return this instance
     */
    public function setProductCode($productCode) 
    {
        if (!$this->_isNumericArray($productCode)) {
            $productCode =  array ($productCode);    
        }
        $this->_fields['ProductCode']['FieldValue'] = $productCode;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ProductCode list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withProductCode($productCode1, $productCode2)</code>
     * 
     * @param string  $stringArgs one or more ProductCode
     * @return Amazon_EC2_Model_RunningInstance  instance
     */
    public function withProductCode($stringArgs)
    {
        foreach (func_get_args() as $productCode) {
            $this->_fields['ProductCode']['FieldValue'][] = $productCode;
        }
        return $this;
    }  
      

    /**
     * Checks if ProductCode list is non-empty
     * 
     * @return bool true if ProductCode list is non-empty
     */
    public function isSetProductCode()
    {
        return count ($this->_fields['ProductCode']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the InstanceType property.
     * 
     * @return string InstanceType
     */
    public function getInstanceType() 
    {
        return $this->_fields['InstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceType property.
     * 
     * @param string InstanceType
     * @return this instance
     */
    public function setInstanceType($value) 
    {
        $this->_fields['InstanceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceType and returns this instance
     * 
     * @param string $value InstanceType
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withInstanceType($value)
    {
        $this->setInstanceType($value);
        return $this;
    }


    /**
     * Checks if InstanceType is set
     * 
     * @return bool true if InstanceType  is set
     */
    public function isSetInstanceType()
    {
        return !is_null($this->_fields['InstanceType']['FieldValue']);
    }

    /**
     * Gets the value of the LaunchTime property.
     * 
     * @return string LaunchTime
     */
    public function getLaunchTime() 
    {
        return $this->_fields['LaunchTime']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchTime property.
     * 
     * @param string LaunchTime
     * @return this instance
     */
    public function setLaunchTime($value) 
    {
        $this->_fields['LaunchTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LaunchTime and returns this instance
     * 
     * @param string $value LaunchTime
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withLaunchTime($value)
    {
        $this->setLaunchTime($value);
        return $this;
    }


    /**
     * Checks if LaunchTime is set
     * 
     * @return bool true if LaunchTime  is set
     */
    public function isSetLaunchTime()
    {
        return !is_null($this->_fields['LaunchTime']['FieldValue']);
    }

    /**
     * Gets the value of the Placement.
     * 
     * @return Placement Placement
     */
    public function getPlacement() 
    {
        return $this->_fields['Placement']['FieldValue'];
    }

    /**
     * Sets the value of the Placement.
     * 
     * @param Placement Placement
     * @return void
     */
    public function setPlacement($value) 
    {
        $this->_fields['Placement']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Placement  and returns this instance
     * 
     * @param Placement $value Placement
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withPlacement($value)
    {
        $this->setPlacement($value);
        return $this;
    }


    /**
     * Checks if Placement  is set
     * 
     * @return bool true if Placement property is set
     */
    public function isSetPlacement()
    {
        return !is_null($this->_fields['Placement']['FieldValue']);

    }

    /**
     * Gets the value of the KernelId property.
     * 
     * @return string KernelId
     */
    public function getKernelId() 
    {
        return $this->_fields['KernelId']['FieldValue'];
    }

    /**
     * Sets the value of the KernelId property.
     * 
     * @param string KernelId
     * @return this instance
     */
    public function setKernelId($value) 
    {
        $this->_fields['KernelId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KernelId and returns this instance
     * 
     * @param string $value KernelId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withKernelId($value)
    {
        $this->setKernelId($value);
        return $this;
    }


    /**
     * Checks if KernelId is set
     * 
     * @return bool true if KernelId  is set
     */
    public function isSetKernelId()
    {
        return !is_null($this->_fields['KernelId']['FieldValue']);
    }

    /**
     * Gets the value of the RamdiskId property.
     * 
     * @return string RamdiskId
     */
    public function getRamdiskId() 
    {
        return $this->_fields['RamdiskId']['FieldValue'];
    }

    /**
     * Sets the value of the RamdiskId property.
     * 
     * @param string RamdiskId
     * @return this instance
     */
    public function setRamdiskId($value) 
    {
        $this->_fields['RamdiskId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RamdiskId and returns this instance
     * 
     * @param string $value RamdiskId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withRamdiskId($value)
    {
        $this->setRamdiskId($value);
        return $this;
    }


    /**
     * Checks if RamdiskId is set
     * 
     * @return bool true if RamdiskId  is set
     */
    public function isSetRamdiskId()
    {
        return !is_null($this->_fields['RamdiskId']['FieldValue']);
    }

    /**
     * Gets the value of the Platform property.
     * 
     * @return string Platform
     */
    public function getPlatform() 
    {
        return $this->_fields['Platform']['FieldValue'];
    }

    /**
     * Sets the value of the Platform property.
     * 
     * @param string Platform
     * @return this instance
     */
    public function setPlatform($value) 
    {
        $this->_fields['Platform']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Platform and returns this instance
     * 
     * @param string $value Platform
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withPlatform($value)
    {
        $this->setPlatform($value);
        return $this;
    }


    /**
     * Checks if Platform is set
     * 
     * @return bool true if Platform  is set
     */
    public function isSetPlatform()
    {
        return !is_null($this->_fields['Platform']['FieldValue']);
    }

    /**
     * Gets the value of the Monitoring.
     * 
     * @return Monitoring Monitoring
     */
    public function getMonitoring() 
    {
        return $this->_fields['Monitoring']['FieldValue'];
    }

    /**
     * Sets the value of the Monitoring.
     * 
     * @param Monitoring Monitoring
     * @return void
     */
    public function setMonitoring($value) 
    {
        $this->_fields['Monitoring']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Monitoring  and returns this instance
     * 
     * @param Monitoring $value Monitoring
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withMonitoring($value)
    {
        $this->setMonitoring($value);
        return $this;
    }


    /**
     * Checks if Monitoring  is set
     * 
     * @return bool true if Monitoring property is set
     */
    public function isSetMonitoring()
    {
        return !is_null($this->_fields['Monitoring']['FieldValue']);

    }

    /**
     * Gets the value of the SubnetId property.
     * 
     * @return string SubnetId
     */
    public function getSubnetId() 
    {
        return $this->_fields['SubnetId']['FieldValue'];
    }

    /**
     * Sets the value of the SubnetId property.
     * 
     * @param string SubnetId
     * @return this instance
     */
    public function setSubnetId($value) 
    {
        $this->_fields['SubnetId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SubnetId and returns this instance
     * 
     * @param string $value SubnetId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withSubnetId($value)
    {
        $this->setSubnetId($value);
        return $this;
    }


    /**
     * Checks if SubnetId is set
     * 
     * @return bool true if SubnetId  is set
     */
    public function isSetSubnetId()
    {
        return !is_null($this->_fields['SubnetId']['FieldValue']);
    }

    /**
     * Gets the value of the VpcId property.
     * 
     * @return string VpcId
     */
    public function getVpcId() 
    {
        return $this->_fields['VpcId']['FieldValue'];
    }

    /**
     * Sets the value of the VpcId property.
     * 
     * @param string VpcId
     * @return this instance
     */
    public function setVpcId($value) 
    {
        $this->_fields['VpcId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpcId and returns this instance
     * 
     * @param string $value VpcId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withVpcId($value)
    {
        $this->setVpcId($value);
        return $this;
    }


    /**
     * Checks if VpcId is set
     * 
     * @return bool true if VpcId  is set
     */
    public function isSetVpcId()
    {
        return !is_null($this->_fields['VpcId']['FieldValue']);
    }

    /**
     * Gets the value of the PrivateIpAddress property.
     * 
     * @return string PrivateIpAddress
     */
    public function getPrivateIpAddress() 
    {
        return $this->_fields['PrivateIpAddress']['FieldValue'];
    }

    /**
     * Sets the value of the PrivateIpAddress property.
     * 
     * @param string PrivateIpAddress
     * @return this instance
     */
    public function setPrivateIpAddress($value) 
    {
        $this->_fields['PrivateIpAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PrivateIpAddress and returns this instance
     * 
     * @param string $value PrivateIpAddress
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withPrivateIpAddress($value)
    {
        $this->setPrivateIpAddress($value);
        return $this;
    }


    /**
     * Checks if PrivateIpAddress is set
     * 
     * @return bool true if PrivateIpAddress  is set
     */
    public function isSetPrivateIpAddress()
    {
        return !is_null($this->_fields['PrivateIpAddress']['FieldValue']);
    }

    /**
     * Gets the value of the IpAddress property.
     * 
     * @return string IpAddress
     */
    public function getIpAddress() 
    {
        return $this->_fields['IpAddress']['FieldValue'];
    }

    /**
     * Sets the value of the IpAddress property.
     * 
     * @param string IpAddress
     * @return this instance
     */
    public function setIpAddress($value) 
    {
        $this->_fields['IpAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the IpAddress and returns this instance
     * 
     * @param string $value IpAddress
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withIpAddress($value)
    {
        $this->setIpAddress($value);
        return $this;
    }


    /**
     * Checks if IpAddress is set
     * 
     * @return bool true if IpAddress  is set
     */
    public function isSetIpAddress()
    {
        return !is_null($this->_fields['IpAddress']['FieldValue']);
    }

    /**
     * Gets the value of the StateReason.
     * 
     * @return StateReason StateReason
     */
    public function getStateReason() 
    {
        return $this->_fields['StateReason']['FieldValue'];
    }

    /**
     * Sets the value of the StateReason.
     * 
     * @param StateReason StateReason
     * @return void
     */
    public function setStateReason($value) 
    {
        $this->_fields['StateReason']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the StateReason  and returns this instance
     * 
     * @param StateReason $value StateReason
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withStateReason($value)
    {
        $this->setStateReason($value);
        return $this;
    }


    /**
     * Checks if StateReason  is set
     * 
     * @return bool true if StateReason property is set
     */
    public function isSetStateReason()
    {
        return !is_null($this->_fields['StateReason']['FieldValue']);

    }

    /**
     * Gets the value of the Architecture property.
     * 
     * @return string Architecture
     */
    public function getArchitecture() 
    {
        return $this->_fields['Architecture']['FieldValue'];
    }

    /**
     * Sets the value of the Architecture property.
     * 
     * @param string Architecture
     * @return this instance
     */
    public function setArchitecture($value) 
    {
        $this->_fields['Architecture']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Architecture and returns this instance
     * 
     * @param string $value Architecture
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withArchitecture($value)
    {
        $this->setArchitecture($value);
        return $this;
    }


    /**
     * Checks if Architecture is set
     * 
     * @return bool true if Architecture  is set
     */
    public function isSetArchitecture()
    {
        return !is_null($this->_fields['Architecture']['FieldValue']);
    }

    /**
     * Gets the value of the RootDeviceType property.
     * 
     * @return string RootDeviceType
     */
    public function getRootDeviceType() 
    {
        return $this->_fields['RootDeviceType']['FieldValue'];
    }

    /**
     * Sets the value of the RootDeviceType property.
     * 
     * @param string RootDeviceType
     * @return this instance
     */
    public function setRootDeviceType($value) 
    {
        $this->_fields['RootDeviceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RootDeviceType and returns this instance
     * 
     * @param string $value RootDeviceType
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withRootDeviceType($value)
    {
        $this->setRootDeviceType($value);
        return $this;
    }


    /**
     * Checks if RootDeviceType is set
     * 
     * @return bool true if RootDeviceType  is set
     */
    public function isSetRootDeviceType()
    {
        return !is_null($this->_fields['RootDeviceType']['FieldValue']);
    }

    /**
     * Gets the value of the RootDeviceName property.
     * 
     * @return string RootDeviceName
     */
    public function getRootDeviceName() 
    {
        return $this->_fields['RootDeviceName']['FieldValue'];
    }

    /**
     * Sets the value of the RootDeviceName property.
     * 
     * @param string RootDeviceName
     * @return this instance
     */
    public function setRootDeviceName($value) 
    {
        $this->_fields['RootDeviceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RootDeviceName and returns this instance
     * 
     * @param string $value RootDeviceName
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withRootDeviceName($value)
    {
        $this->setRootDeviceName($value);
        return $this;
    }


    /**
     * Checks if RootDeviceName is set
     * 
     * @return bool true if RootDeviceName  is set
     */
    public function isSetRootDeviceName()
    {
        return !is_null($this->_fields['RootDeviceName']['FieldValue']);
    }

    /**
     * Gets the value of the BlockDeviceMapping.
     * 
     * @return array of InstanceBlockDeviceMapping BlockDeviceMapping
     */
    public function getBlockDeviceMapping() 
    {
        return $this->_fields['BlockDeviceMapping']['FieldValue'];
    }

    /**
     * Sets the value of the BlockDeviceMapping.
     * 
     * @param mixed InstanceBlockDeviceMapping or an array of InstanceBlockDeviceMapping BlockDeviceMapping
     * @return this instance
     */
    public function setBlockDeviceMapping($blockDeviceMapping) 
    {
        if (!$this->_isNumericArray($blockDeviceMapping)) {
            $blockDeviceMapping =  array ($blockDeviceMapping);    
        }
        $this->_fields['BlockDeviceMapping']['FieldValue'] = $blockDeviceMapping;
        return $this;
    }


    /**
     * Sets single or multiple values of BlockDeviceMapping list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withBlockDeviceMapping($blockDeviceMapping1, $blockDeviceMapping2)</code>
     * 
     * @param InstanceBlockDeviceMapping  $instanceBlockDeviceMappingArgs one or more BlockDeviceMapping
     * @return Amazon_EC2_Model_RunningInstance  instance
     */
    public function withBlockDeviceMapping($instanceBlockDeviceMappingArgs)
    {
        foreach (func_get_args() as $blockDeviceMapping) {
            $this->_fields['BlockDeviceMapping']['FieldValue'][] = $blockDeviceMapping;
        }
        return $this;
    }   



    /**
     * Checks if BlockDeviceMapping list is non-empty
     * 
     * @return bool true if BlockDeviceMapping list is non-empty
     */
    public function isSetBlockDeviceMapping()
    {
        return count ($this->_fields['BlockDeviceMapping']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the InstanceLifecycle property.
     * 
     * @return string InstanceLifecycle
     */
    public function getInstanceLifecycle() 
    {
        return $this->_fields['InstanceLifecycle']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceLifecycle property.
     * 
     * @param string InstanceLifecycle
     * @return this instance
     */
    public function setInstanceLifecycle($value) 
    {
        $this->_fields['InstanceLifecycle']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceLifecycle and returns this instance
     * 
     * @param string $value InstanceLifecycle
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withInstanceLifecycle($value)
    {
        $this->setInstanceLifecycle($value);
        return $this;
    }


    /**
     * Checks if InstanceLifecycle is set
     * 
     * @return bool true if InstanceLifecycle  is set
     */
    public function isSetInstanceLifecycle()
    {
        return !is_null($this->_fields['InstanceLifecycle']['FieldValue']);
    }

    /**
     * Gets the value of the SpotInstanceRequestId property.
     * 
     * @return string SpotInstanceRequestId
     */
    public function getSpotInstanceRequestId() 
    {
        return $this->_fields['SpotInstanceRequestId']['FieldValue'];
    }

    /**
     * Sets the value of the SpotInstanceRequestId property.
     * 
     * @param string SpotInstanceRequestId
     * @return this instance
     */
    public function setSpotInstanceRequestId($value) 
    {
        $this->_fields['SpotInstanceRequestId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SpotInstanceRequestId and returns this instance
     * 
     * @param string $value SpotInstanceRequestId
     * @return Amazon_EC2_Model_RunningInstance instance
     */
    public function withSpotInstanceRequestId($value)
    {
        $this->setSpotInstanceRequestId($value);
        return $this;
    }


    /**
     * Checks if SpotInstanceRequestId is set
     * 
     * @return bool true if SpotInstanceRequestId  is set
     */
    public function isSetSpotInstanceRequestId()
    {
        return !is_null($this->_fields['SpotInstanceRequestId']['FieldValue']);
    }




}