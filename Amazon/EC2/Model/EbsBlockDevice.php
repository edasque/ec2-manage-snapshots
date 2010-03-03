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
 * Amazon_EC2_Model_EbsBlockDevice
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotId: string</li>
 * <li>VolumeSize: int</li>
 * <li>DeleteOnTermination: bool</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_EbsBlockDevice extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_EbsBlockDevice
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotId: string</li>
     * <li>VolumeSize: int</li>
     * <li>DeleteOnTermination: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VolumeSize' => array('FieldValue' => null, 'FieldType' => 'int'),
        'DeleteOnTermination' => array('FieldValue' => null, 'FieldType' => 'bool'),
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
     * @return Amazon_EC2_Model_EbsBlockDevice instance
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
     * Gets the value of the VolumeSize property.
     * 
     * @return int VolumeSize
     */
    public function getVolumeSize() 
    {
        return $this->_fields['VolumeSize']['FieldValue'];
    }

    /**
     * Sets the value of the VolumeSize property.
     * 
     * @param int VolumeSize
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
     * @param int $value VolumeSize
     * @return Amazon_EC2_Model_EbsBlockDevice instance
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
     * @return Amazon_EC2_Model_EbsBlockDevice instance
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