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
 * Amazon_EC2_Model_RunInstancesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageId: string</li>
 * <li>MinCount: int</li>
 * <li>MaxCount: int</li>
 * <li>KeyName: string</li>
 * <li>SecurityGroup: string</li>
 * <li>UserData: string</li>
 * <li>InstanceType: string</li>
 * <li>Placement: Amazon_EC2_Model_Placement</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
 * <li>Monitoring: Amazon_EC2_Model_MonitoringSpecification</li>
 * <li>SubnetId: string</li>
 * <li>AdditionalInfo: string</li>
 * <li>DisableApiTermination: bool</li>
 * <li>InstanceInitiatedShutdownBehavior: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RunInstancesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RunInstancesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageId: string</li>
     * <li>MinCount: int</li>
     * <li>MaxCount: int</li>
     * <li>KeyName: string</li>
     * <li>SecurityGroup: string</li>
     * <li>UserData: string</li>
     * <li>InstanceType: string</li>
     * <li>Placement: Amazon_EC2_Model_Placement</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
     * <li>Monitoring: Amazon_EC2_Model_MonitoringSpecification</li>
     * <li>SubnetId: string</li>
     * <li>AdditionalInfo: string</li>
     * <li>DisableApiTermination: bool</li>
     * <li>InstanceInitiatedShutdownBehavior: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MinCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        'MaxCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        'KeyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SecurityGroup' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'UserData' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Placement' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Placement'),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMapping' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_BlockDeviceMapping')),
        'Monitoring' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_MonitoringSpecification'),
        'SubnetId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AdditionalInfo' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DisableApiTermination' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'InstanceInitiatedShutdownBehavior' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * Gets the value of the MinCount property.
     * 
     * @return int MinCount
     */
    public function getMinCount() 
    {
        return $this->_fields['MinCount']['FieldValue'];
    }

    /**
     * Sets the value of the MinCount property.
     * 
     * @param int MinCount
     * @return this instance
     */
    public function setMinCount($value) 
    {
        $this->_fields['MinCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MinCount and returns this instance
     * 
     * @param int $value MinCount
     * @return Amazon_EC2_Model_RunInstancesRequest instance
     */
    public function withMinCount($value)
    {
        $this->setMinCount($value);
        return $this;
    }


    /**
     * Checks if MinCount is set
     * 
     * @return bool true if MinCount  is set
     */
    public function isSetMinCount()
    {
        return !is_null($this->_fields['MinCount']['FieldValue']);
    }

    /**
     * Gets the value of the MaxCount property.
     * 
     * @return int MaxCount
     */
    public function getMaxCount() 
    {
        return $this->_fields['MaxCount']['FieldValue'];
    }

    /**
     * Sets the value of the MaxCount property.
     * 
     * @param int MaxCount
     * @return this instance
     */
    public function setMaxCount($value) 
    {
        $this->_fields['MaxCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxCount and returns this instance
     * 
     * @param int $value MaxCount
     * @return Amazon_EC2_Model_RunInstancesRequest instance
     */
    public function withMaxCount($value)
    {
        $this->setMaxCount($value);
        return $this;
    }


    /**
     * Checks if MaxCount is set
     * 
     * @return bool true if MaxCount  is set
     */
    public function isSetMaxCount()
    {
        return !is_null($this->_fields['MaxCount']['FieldValue']);
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * Gets the value of the SecurityGroup .
     * 
     * @return array of string SecurityGroup
     */
    public function getSecurityGroup() 
    {
        return $this->_fields['SecurityGroup']['FieldValue'];
    }

    /**
     * Sets the value of the SecurityGroup.
     * 
     * @param string or an array of string SecurityGroup
     * @return this instance
     */
    public function setSecurityGroup($securityGroup) 
    {
        if (!$this->_isNumericArray($securityGroup)) {
            $securityGroup =  array ($securityGroup);    
        }
        $this->_fields['SecurityGroup']['FieldValue'] = $securityGroup;
        return $this;
    }
  

    /**
     * Sets single or multiple values of SecurityGroup list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSecurityGroup($securityGroup1, $securityGroup2)</code>
     * 
     * @param string  $stringArgs one or more SecurityGroup
     * @return Amazon_EC2_Model_RunInstancesRequest  instance
     */
    public function withSecurityGroup($stringArgs)
    {
        foreach (func_get_args() as $securityGroup) {
            $this->_fields['SecurityGroup']['FieldValue'][] = $securityGroup;
        }
        return $this;
    }  
      

    /**
     * Checks if SecurityGroup list is non-empty
     * 
     * @return bool true if SecurityGroup list is non-empty
     */
    public function isSetSecurityGroup()
    {
        return count ($this->_fields['SecurityGroup']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the UserData property.
     * 
     * @return string UserData
     */
    public function getUserData() 
    {
        return $this->_fields['UserData']['FieldValue'];
    }

    /**
     * Sets the value of the UserData property.
     * 
     * @param string UserData
     * @return this instance
     */
    public function setUserData($value) 
    {
        $this->_fields['UserData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UserData and returns this instance
     * 
     * @param string $value UserData
     * @return Amazon_EC2_Model_RunInstancesRequest instance
     */
    public function withUserData($value)
    {
        $this->setUserData($value);
        return $this;
    }


    /**
     * Checks if UserData is set
     * 
     * @return bool true if UserData  is set
     */
    public function isSetUserData()
    {
        return !is_null($this->_fields['UserData']['FieldValue']);
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * Gets the value of the BlockDeviceMapping.
     * 
     * @return array of BlockDeviceMapping BlockDeviceMapping
     */
    public function getBlockDeviceMapping() 
    {
        return $this->_fields['BlockDeviceMapping']['FieldValue'];
    }

    /**
     * Sets the value of the BlockDeviceMapping.
     * 
     * @param mixed BlockDeviceMapping or an array of BlockDeviceMapping BlockDeviceMapping
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
     * @param BlockDeviceMapping  $blockDeviceMappingArgs one or more BlockDeviceMapping
     * @return Amazon_EC2_Model_RunInstancesRequest  instance
     */
    public function withBlockDeviceMapping($blockDeviceMappingArgs)
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
     * Gets the value of the Monitoring.
     * 
     * @return MonitoringSpecification Monitoring
     */
    public function getMonitoring() 
    {
        return $this->_fields['Monitoring']['FieldValue'];
    }

    /**
     * Sets the value of the Monitoring.
     * 
     * @param MonitoringSpecification Monitoring
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
     * @param MonitoringSpecification $value Monitoring
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * @return Amazon_EC2_Model_RunInstancesRequest instance
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
     * Gets the value of the AdditionalInfo property.
     * 
     * @return string AdditionalInfo
     */
    public function getAdditionalInfo() 
    {
        return $this->_fields['AdditionalInfo']['FieldValue'];
    }

    /**
     * Sets the value of the AdditionalInfo property.
     * 
     * @param string AdditionalInfo
     * @return this instance
     */
    public function setAdditionalInfo($value) 
    {
        $this->_fields['AdditionalInfo']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AdditionalInfo and returns this instance
     * 
     * @param string $value AdditionalInfo
     * @return Amazon_EC2_Model_RunInstancesRequest instance
     */
    public function withAdditionalInfo($value)
    {
        $this->setAdditionalInfo($value);
        return $this;
    }


    /**
     * Checks if AdditionalInfo is set
     * 
     * @return bool true if AdditionalInfo  is set
     */
    public function isSetAdditionalInfo()
    {
        return !is_null($this->_fields['AdditionalInfo']['FieldValue']);
    }

    /**
     * Gets the value of the DisableApiTermination property.
     * 
     * @return bool DisableApiTermination
     */
    public function getDisableApiTermination() 
    {
        return $this->_fields['DisableApiTermination']['FieldValue'];
    }

    /**
     * Sets the value of the DisableApiTermination property.
     * 
     * @param bool DisableApiTermination
     * @return this instance
     */
    public function setDisableApiTermination($value) 
    {
        $this->_fields['DisableApiTermination']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DisableApiTermination and returns this instance
     * 
     * @param bool $value DisableApiTermination
     * @return Amazon_EC2_Model_RunInstancesRequest instance
     */
    public function withDisableApiTermination($value)
    {
        $this->setDisableApiTermination($value);
        return $this;
    }


    /**
     * Checks if DisableApiTermination is set
     * 
     * @return bool true if DisableApiTermination  is set
     */
    public function isSetDisableApiTermination()
    {
        return !is_null($this->_fields['DisableApiTermination']['FieldValue']);
    }

    /**
     * Gets the value of the InstanceInitiatedShutdownBehavior property.
     * 
     * @return string InstanceInitiatedShutdownBehavior
     */
    public function getInstanceInitiatedShutdownBehavior() 
    {
        return $this->_fields['InstanceInitiatedShutdownBehavior']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceInitiatedShutdownBehavior property.
     * 
     * @param string InstanceInitiatedShutdownBehavior
     * @return this instance
     */
    public function setInstanceInitiatedShutdownBehavior($value) 
    {
        $this->_fields['InstanceInitiatedShutdownBehavior']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceInitiatedShutdownBehavior and returns this instance
     * 
     * @param string $value InstanceInitiatedShutdownBehavior
     * @return Amazon_EC2_Model_RunInstancesRequest instance
     */
    public function withInstanceInitiatedShutdownBehavior($value)
    {
        $this->setInstanceInitiatedShutdownBehavior($value);
        return $this;
    }


    /**
     * Checks if InstanceInitiatedShutdownBehavior is set
     * 
     * @return bool true if InstanceInitiatedShutdownBehavior  is set
     */
    public function isSetInstanceInitiatedShutdownBehavior()
    {
        return !is_null($this->_fields['InstanceInitiatedShutdownBehavior']['FieldValue']);
    }




}