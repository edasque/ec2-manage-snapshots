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
 * Amazon_EC2_Model_Attachment
 * 
 * Properties:
 * <ul>
 * 
 * <li>VolumeId: string</li>
 * <li>InstanceId: string</li>
 * <li>Device: string</li>
 * <li>Status: string</li>
 * <li>AttachTime: string</li>
 * <li>DeleteOnTermination: bool</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Attachment extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Attachment
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VolumeId: string</li>
     * <li>InstanceId: string</li>
     * <li>Device: string</li>
     * <li>Status: string</li>
     * <li>AttachTime: string</li>
     * <li>DeleteOnTermination: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VolumeId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Device' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AttachTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DeleteOnTermination' => array('FieldValue' => null, 'FieldType' => 'bool'),
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
     * @return Amazon_EC2_Model_Attachment instance
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
     * @return Amazon_EC2_Model_Attachment instance
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
     * @return Amazon_EC2_Model_Attachment instance
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
     * Gets the value of the Status property.
     * 
     * @return string Status
     */
    public function getStatus() 
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Sets the value of the Status property.
     * 
     * @param string Status
     * @return this instance
     */
    public function setStatus($value) 
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Status and returns this instance
     * 
     * @param string $value Status
     * @return Amazon_EC2_Model_Attachment instance
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }


    /**
     * Checks if Status is set
     * 
     * @return bool true if Status  is set
     */
    public function isSetStatus()
    {
        return !is_null($this->_fields['Status']['FieldValue']);
    }

    /**
     * Gets the value of the AttachTime property.
     * 
     * @return string AttachTime
     */
    public function getAttachTime() 
    {
        return $this->_fields['AttachTime']['FieldValue'];
    }

    /**
     * Sets the value of the AttachTime property.
     * 
     * @param string AttachTime
     * @return this instance
     */
    public function setAttachTime($value) 
    {
        $this->_fields['AttachTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AttachTime and returns this instance
     * 
     * @param string $value AttachTime
     * @return Amazon_EC2_Model_Attachment instance
     */
    public function withAttachTime($value)
    {
        $this->setAttachTime($value);
        return $this;
    }


    /**
     * Checks if AttachTime is set
     * 
     * @return bool true if AttachTime  is set
     */
    public function isSetAttachTime()
    {
        return !is_null($this->_fields['AttachTime']['FieldValue']);
    }

    /**
     * Gets the value of the DeleteOnTermination property.
     * 
     * @return bool DeleteOnTermination
     */
    public function getDeleteOnTermination() 
    {
        return $this->_fields['DeleteOnTermination']['FieldValue'];
    }

    /**
     * Sets the value of the DeleteOnTermination property.
     * 
     * @param bool DeleteOnTermination
     * @return this instance
     */
    public function setDeleteOnTermination($value) 
    {
        $this->_fields['DeleteOnTermination']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DeleteOnTermination and returns this instance
     * 
     * @param bool $value DeleteOnTermination
     * @return Amazon_EC2_Model_Attachment instance
     */
    public function withDeleteOnTermination($value)
    {
        $this->setDeleteOnTermination($value);
        return $this;
    }


    /**
     * Checks if DeleteOnTermination is set
     * 
     * @return bool true if DeleteOnTermination  is set
     */
    public function isSetDeleteOnTermination()
    {
        return !is_null($this->_fields['DeleteOnTermination']['FieldValue']);
    }




}