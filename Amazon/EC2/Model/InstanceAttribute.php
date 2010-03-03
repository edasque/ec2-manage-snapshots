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
 * Amazon_EC2_Model_InstanceAttribute
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>InstanceType: string</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>UserData: string</li>
 * <li>DisableApiTermination: bool</li>
 * <li>InstanceInitiatedShutdownBehavior: string</li>
 * <li>RootDeviceName: string</li>
 * <li>BlockDeviceMapping: Amazon_EC2_Model_InstanceBlockDeviceMapping</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_InstanceAttribute extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_InstanceAttribute
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>InstanceType: string</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>UserData: string</li>
     * <li>DisableApiTermination: bool</li>
     * <li>InstanceInitiatedShutdownBehavior: string</li>
     * <li>RootDeviceName: string</li>
     * <li>BlockDeviceMapping: Amazon_EC2_Model_InstanceBlockDeviceMapping</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UserData' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DisableApiTermination' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'InstanceInitiatedShutdownBehavior' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RootDeviceName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMapping' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_InstanceBlockDeviceMapping')),
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute instance
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
     * @return Amazon_EC2_Model_InstanceAttribute  instance
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




}