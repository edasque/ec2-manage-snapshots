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
 * Amazon_EC2_Model_Snapshot
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotId: string</li>
 * <li>VolumeId: string</li>
 * <li>Status: string</li>
 * <li>StartTime: string</li>
 * <li>Progress: string</li>
 * <li>OwnerId: string</li>
 * <li>VolumeSize: string</li>
 * <li>Description: string</li>
 * <li>OwnerAlias: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Snapshot extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Snapshot
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotId: string</li>
     * <li>VolumeId: string</li>
     * <li>Status: string</li>
     * <li>StartTime: string</li>
     * <li>Progress: string</li>
     * <li>OwnerId: string</li>
     * <li>VolumeSize: string</li>
     * <li>Description: string</li>
     * <li>OwnerAlias: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VolumeId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Progress' => array('FieldValue' => null, 'FieldType' => 'string'),
        'OwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VolumeSize' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
        'OwnerAlias' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_Snapshot instance
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
     * @return Amazon_EC2_Model_Snapshot instance
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
     * @return Amazon_EC2_Model_Snapshot instance
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
     * Gets the value of the StartTime property.
     * 
     * @return string StartTime
     */
    public function getStartTime() 
    {
        return $this->_fields['StartTime']['FieldValue'];
    }

    /**
     * Sets the value of the StartTime property.
     * 
     * @param string StartTime
     * @return this instance
     */
    public function setStartTime($value) 
    {
        $this->_fields['StartTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StartTime and returns this instance
     * 
     * @param string $value StartTime
     * @return Amazon_EC2_Model_Snapshot instance
     */
    public function withStartTime($value)
    {
        $this->setStartTime($value);
        return $this;
    }


    /**
     * Checks if StartTime is set
     * 
     * @return bool true if StartTime  is set
     */
    public function isSetStartTime()
    {
        return !is_null($this->_fields['StartTime']['FieldValue']);
    }

    /**
     * Gets the value of the Progress property.
     * 
     * @return string Progress
     */
    public function getProgress() 
    {
        return $this->_fields['Progress']['FieldValue'];
    }

    /**
     * Sets the value of the Progress property.
     * 
     * @param string Progress
     * @return this instance
     */
    public function setProgress($value) 
    {
        $this->_fields['Progress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Progress and returns this instance
     * 
     * @param string $value Progress
     * @return Amazon_EC2_Model_Snapshot instance
     */
    public function withProgress($value)
    {
        $this->setProgress($value);
        return $this;
    }


    /**
     * Checks if Progress is set
     * 
     * @return bool true if Progress  is set
     */
    public function isSetProgress()
    {
        return !is_null($this->_fields['Progress']['FieldValue']);
    }

    /**
     * Gets the value of the OwnerId property.
     * 
     * @return string OwnerId
     */
    public function getOwnerId() 
    {
        return $this->_fields['OwnerId']['FieldValue'];
    }

    /**
     * Sets the value of the OwnerId property.
     * 
     * @param string OwnerId
     * @return this instance
     */
    public function setOwnerId($value) 
    {
        $this->_fields['OwnerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the OwnerId and returns this instance
     * 
     * @param string $value OwnerId
     * @return Amazon_EC2_Model_Snapshot instance
     */
    public function withOwnerId($value)
    {
        $this->setOwnerId($value);
        return $this;
    }


    /**
     * Checks if OwnerId is set
     * 
     * @return bool true if OwnerId  is set
     */
    public function isSetOwnerId()
    {
        return !is_null($this->_fields['OwnerId']['FieldValue']);
    }

    /**
     * Gets the value of the VolumeSize property.
     * 
     * @return string VolumeSize
     */
    public function getVolumeSize() 
    {
        return $this->_fields['VolumeSize']['FieldValue'];
    }

    /**
     * Sets the value of the VolumeSize property.
     * 
     * @param string VolumeSize
     * @return this instance
     */
    public function setVolumeSize($value) 
    {
        $this->_fields['VolumeSize']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VolumeSize and returns this instance
     * 
     * @param string $value VolumeSize
     * @return Amazon_EC2_Model_Snapshot instance
     */
    public function withVolumeSize($value)
    {
        $this->setVolumeSize($value);
        return $this;
    }


    /**
     * Checks if VolumeSize is set
     * 
     * @return bool true if VolumeSize  is set
     */
    public function isSetVolumeSize()
    {
        return !is_null($this->_fields['VolumeSize']['FieldValue']);
    }

    /**
     * Gets the value of the Description property.
     * 
     * @return string Description
     */
    public function getDescription() 
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Sets the value of the Description property.
     * 
     * @param string Description
     * @return this instance
     */
    public function setDescription($value) 
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Description and returns this instance
     * 
     * @param string $value Description
     * @return Amazon_EC2_Model_Snapshot instance
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }


    /**
     * Checks if Description is set
     * 
     * @return bool true if Description  is set
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }

    /**
     * Gets the value of the OwnerAlias property.
     * 
     * @return string OwnerAlias
     */
    public function getOwnerAlias() 
    {
        return $this->_fields['OwnerAlias']['FieldValue'];
    }

    /**
     * Sets the value of the OwnerAlias property.
     * 
     * @param string OwnerAlias
     * @return this instance
     */
    public function setOwnerAlias($value) 
    {
        $this->_fields['OwnerAlias']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the OwnerAlias and returns this instance
     * 
     * @param string $value OwnerAlias
     * @return Amazon_EC2_Model_Snapshot instance
     */
    public function withOwnerAlias($value)
    {
        $this->setOwnerAlias($value);
        return $this;
    }


    /**
     * Checks if OwnerAlias is set
     * 
     * @return bool true if OwnerAlias  is set
     */
    public function isSetOwnerAlias()
    {
        return !is_null($this->_fields['OwnerAlias']['FieldValue']);
    }




}