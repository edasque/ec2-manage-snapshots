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
 * Amazon_EC2_Model_InstanceBlockDeviceMappingParameter
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeviceName: string</li>
 * <li>VirtualName: string</li>
 * <li>Ebs: Amazon_EC2_Model_InstanceEbsBlockDeviceParameter</li>
 * <li>NoDevice: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_InstanceBlockDeviceMappingParameter extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_InstanceBlockDeviceMappingParameter
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DeviceName: string</li>
     * <li>VirtualName: string</li>
     * <li>Ebs: Amazon_EC2_Model_InstanceEbsBlockDeviceParameter</li>
     * <li>NoDevice: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DeviceName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VirtualName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Ebs' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_InstanceEbsBlockDeviceParameter'),
        'NoDevice' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DeviceName property.
     * 
     * @return string DeviceName
     */
    public function getDeviceName() 
    {
        return $this->_fields['DeviceName']['FieldValue'];
    }

    /**
     * Sets the value of the DeviceName property.
     * 
     * @param string DeviceName
     * @return this instance
     */
    public function setDeviceName($value) 
    {
        $this->_fields['DeviceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DeviceName and returns this instance
     * 
     * @param string $value DeviceName
     * @return Amazon_EC2_Model_InstanceBlockDeviceMappingParameter instance
     */
    public function withDeviceName($value)
    {
        $this->setDeviceName($value);
        return $this;
    }


    /**
     * Checks if DeviceName is set
     * 
     * @return bool true if DeviceName  is set
     */
    public function isSetDeviceName()
    {
        return !is_null($this->_fields['DeviceName']['FieldValue']);
    }

    /**
     * Gets the value of the VirtualName property.
     * 
     * @return string VirtualName
     */
    public function getVirtualName() 
    {
        return $this->_fields['VirtualName']['FieldValue'];
    }

    /**
     * Sets the value of the VirtualName property.
     * 
     * @param string VirtualName
     * @return this instance
     */
    public function setVirtualName($value) 
    {
        $this->_fields['VirtualName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VirtualName and returns this instance
     * 
     * @param string $value VirtualName
     * @return Amazon_EC2_Model_InstanceBlockDeviceMappingParameter instance
     */
    public function withVirtualName($value)
    {
        $this->setVirtualName($value);
        return $this;
    }


    /**
     * Checks if VirtualName is set
     * 
     * @return bool true if VirtualName  is set
     */
    public function isSetVirtualName()
    {
        return !is_null($this->_fields['VirtualName']['FieldValue']);
    }

    /**
     * Gets the value of the Ebs.
     * 
     * @return InstanceEbsBlockDeviceParameter Ebs
     */
    public function getEbs() 
    {
        return $this->_fields['Ebs']['FieldValue'];
    }

    /**
     * Sets the value of the Ebs.
     * 
     * @param InstanceEbsBlockDeviceParameter Ebs
     * @return void
     */
    public function setEbs($value) 
    {
        $this->_fields['Ebs']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Ebs  and returns this instance
     * 
     * @param InstanceEbsBlockDeviceParameter $value Ebs
     * @return Amazon_EC2_Model_InstanceBlockDeviceMappingParameter instance
     */
    public function withEbs($value)
    {
        $this->setEbs($value);
        return $this;
    }


    /**
     * Checks if Ebs  is set
     * 
     * @return bool true if Ebs property is set
     */
    public function isSetEbs()
    {
        return !is_null($this->_fields['Ebs']['FieldValue']);

    }

    /**
     * Gets the value of the NoDevice property.
     * 
     * @return string NoDevice
     */
    public function getNoDevice() 
    {
        return $this->_fields['NoDevice']['FieldValue'];
    }

    /**
     * Sets the value of the NoDevice property.
     * 
     * @param string NoDevice
     * @return this instance
     */
    public function setNoDevice($value) 
    {
        $this->_fields['NoDevice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the NoDevice and returns this instance
     * 
     * @param string $value NoDevice
     * @return Amazon_EC2_Model_InstanceBlockDeviceMappingParameter instance
     */
    public function withNoDevice($value)
    {
        $this->setNoDevice($value);
        return $this;
    }


    /**
     * Checks if NoDevice is set
     * 
     * @return bool true if NoDevice  is set
     */
    public function isSetNoDevice()
    {
        return !is_null($this->_fields['NoDevice']['FieldValue']);
    }




}