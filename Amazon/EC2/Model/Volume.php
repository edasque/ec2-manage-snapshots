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
 * Amazon_EC2_Model_Volume
 * 
 * Properties:
 * <ul>
 * 
 * <li>VolumeId: string</li>
 * <li>Size: string</li>
 * <li>SnapshotId: string</li>
 * <li>AvailabilityZone: string</li>
 * <li>Status: string</li>
 * <li>CreateTime: string</li>
 * <li>Attachment: Amazon_EC2_Model_Attachment</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Volume extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Volume
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VolumeId: string</li>
     * <li>Size: string</li>
     * <li>SnapshotId: string</li>
     * <li>AvailabilityZone: string</li>
     * <li>Status: string</li>
     * <li>CreateTime: string</li>
     * <li>Attachment: Amazon_EC2_Model_Attachment</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VolumeId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Size' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SnapshotId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Attachment' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Attachment')),
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
     * @return Amazon_EC2_Model_Volume instance
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
     * Gets the value of the Size property.
     * 
     * @return string Size
     */
    public function getSize() 
    {
        return $this->_fields['Size']['FieldValue'];
    }

    /**
     * Sets the value of the Size property.
     * 
     * @param string Size
     * @return this instance
     */
    public function setSize($value) 
    {
        $this->_fields['Size']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Size and returns this instance
     * 
     * @param string $value Size
     * @return Amazon_EC2_Model_Volume instance
     */
    public function withSize($value)
    {
        $this->setSize($value);
        return $this;
    }


    /**
     * Checks if Size is set
     * 
     * @return bool true if Size  is set
     */
    public function isSetSize()
    {
        return !is_null($this->_fields['Size']['FieldValue']);
    }

    /**
     * Gets the value of the SnapshotId property.
     * 
     * @return string SnapshotId
     */
    public function getSnapshotId() 
    {
        return $this->_fields['SnapshotId']['FieldValue'];
    }

    /**
     * Sets the value of the SnapshotId property.
     * 
     * @param string SnapshotId
     * @return this instance
     */
    public function setSnapshotId($value) 
    {
        $this->_fields['SnapshotId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SnapshotId and returns this instance
     * 
     * @param string $value SnapshotId
     * @return Amazon_EC2_Model_Volume instance
     */
    public function withSnapshotId($value)
    {
        $this->setSnapshotId($value);
        return $this;
    }


    /**
     * Checks if SnapshotId is set
     * 
     * @return bool true if SnapshotId  is set
     */
    public function isSetSnapshotId()
    {
        return !is_null($this->_fields['SnapshotId']['FieldValue']);
    }

    /**
     * Gets the value of the AvailabilityZone property.
     * 
     * @return string AvailabilityZone
     */
    public function getAvailabilityZone() 
    {
        return $this->_fields['AvailabilityZone']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZone property.
     * 
     * @param string AvailabilityZone
     * @return this instance
     */
    public function setAvailabilityZone($value) 
    {
        $this->_fields['AvailabilityZone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AvailabilityZone and returns this instance
     * 
     * @param string $value AvailabilityZone
     * @return Amazon_EC2_Model_Volume instance
     */
    public function withAvailabilityZone($value)
    {
        $this->setAvailabilityZone($value);
        return $this;
    }


    /**
     * Checks if AvailabilityZone is set
     * 
     * @return bool true if AvailabilityZone  is set
     */
    public function isSetAvailabilityZone()
    {
        return !is_null($this->_fields['AvailabilityZone']['FieldValue']);
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
     * @return Amazon_EC2_Model_Volume instance
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
     * Gets the value of the CreateTime property.
     * 
     * @return string CreateTime
     */
    public function getCreateTime() 
    {
        return $this->_fields['CreateTime']['FieldValue'];
    }

    /**
     * Sets the value of the CreateTime property.
     * 
     * @param string CreateTime
     * @return this instance
     */
    public function setCreateTime($value) 
    {
        $this->_fields['CreateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreateTime and returns this instance
     * 
     * @param string $value CreateTime
     * @return Amazon_EC2_Model_Volume instance
     */
    public function withCreateTime($value)
    {
        $this->setCreateTime($value);
        return $this;
    }


    /**
     * Checks if CreateTime is set
     * 
     * @return bool true if CreateTime  is set
     */
    public function isSetCreateTime()
    {
        return !is_null($this->_fields['CreateTime']['FieldValue']);
    }

    /**
     * Gets the value of the Attachment.
     * 
     * @return array of Attachment Attachment
     */
    public function getAttachment() 
    {
        return $this->_fields['Attachment']['FieldValue'];
    }

    /**
     * Sets the value of the Attachment.
     * 
     * @param mixed Attachment or an array of Attachment Attachment
     * @return this instance
     */
    public function setAttachment($attachment) 
    {
        if (!$this->_isNumericArray($attachment)) {
            $attachment =  array ($attachment);    
        }
        $this->_fields['Attachment']['FieldValue'] = $attachment;
        return $this;
    }


    /**
     * Sets single or multiple values of Attachment list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAttachment($attachment1, $attachment2)</code>
     * 
     * @param Attachment  $attachmentArgs one or more Attachment
     * @return Amazon_EC2_Model_Volume  instance
     */
    public function withAttachment($attachmentArgs)
    {
        foreach (func_get_args() as $attachment) {
            $this->_fields['Attachment']['FieldValue'][] = $attachment;
        }
        return $this;
    }   



    /**
     * Checks if Attachment list is non-empty
     * 
     * @return bool true if Attachment list is non-empty
     */
    public function isSetAttachment()
    {
        return count ($this->_fields['Attachment']['FieldValue']) > 0;
    }




}