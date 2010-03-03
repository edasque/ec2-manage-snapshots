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
 * Amazon_EC2_Model_DetachVolumeRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>VolumeId: string</li>
 * <li>InstanceId: string</li>
 * <li>Device: string</li>
 * <li>Force: bool</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DetachVolumeRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DetachVolumeRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VolumeId: string</li>
     * <li>InstanceId: string</li>
     * <li>Device: string</li>
     * <li>Force: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VolumeId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Device' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Force' => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VolumeId property.
     * 
     * @return string VolumeId
     */
    public function getVolumeId() 
    {
        return $this->_fields['VolumeId']['FieldValue'];
    }

    /**
     * Sets the value of the VolumeId property.
     * 
     * @param string VolumeId
     * @return this instance
     */
    public function setVolumeId($value) 
    {
        $this->_fields['VolumeId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VolumeId and returns this instance
     * 
     * @param string $value VolumeId
     * @return Amazon_EC2_Model_DetachVolumeRequest instance
     */
    public function withVolumeId($value)
    {
        $this->setVolumeId($value);
        return $this;
    }


    /**
     * Checks if VolumeId is set
     * 
     * @return bool true if VolumeId  is set
     */
    public function isSetVolumeId()
    {
        return !is_null($this->_fields['VolumeId']['FieldValue']);
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
     * @return Amazon_EC2_Model_DetachVolumeRequest instance
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
     * Gets the value of the Device property.
     * 
     * @return string Device
     */
    public function getDevice() 
    {
        return $this->_fields['Device']['FieldValue'];
    }

    /**
     * Sets the value of the Device property.
     * 
     * @param string Device
     * @return this instance
     */
    public function setDevice($value) 
    {
        $this->_fields['Device']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Device and returns this instance
     * 
     * @param string $value Device
     * @return Amazon_EC2_Model_DetachVolumeRequest instance
     */
    public function withDevice($value)
    {
        $this->setDevice($value);
        return $this;
    }


    /**
     * Checks if Device is set
     * 
     * @return bool true if Device  is set
     */
    public function isSetDevice()
    {
        return !is_null($this->_fields['Device']['FieldValue']);
    }

    /**
     * Gets the value of the Force property.
     * 
     * @return bool Force
     */
    public function getForce() 
    {
        return $this->_fields['Force']['FieldValue'];
    }

    /**
     * Sets the value of the Force property.
     * 
     * @param bool Force
     * @return this instance
     */
    public function setForce($value) 
    {
        $this->_fields['Force']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Force and returns this instance
     * 
     * @param bool $value Force
     * @return Amazon_EC2_Model_DetachVolumeRequest instance
     */
    public function withForce($value)
    {
        $this->setForce($value);
        return $this;
    }


    /**
     * Checks if Force is set
     * 
     * @return bool true if Force  is set
     */
    public function isSetForce()
    {
        return !is_null($this->_fields['Force']['FieldValue']);
    }




}