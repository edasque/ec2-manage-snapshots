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
 * Amazon_EC2_Model_InstanceEbsBlockDeviceParameter
 * 
 * Properties:
 * <ul>
 * 
 * <li>VolumeId: string</li>
 * <li>DeleteOnTermination: bool</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_InstanceEbsBlockDeviceParameter extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_InstanceEbsBlockDeviceParameter
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VolumeId: string</li>
     * <li>DeleteOnTermination: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VolumeId' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_InstanceEbsBlockDeviceParameter instance
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
     * @return Amazon_EC2_Model_InstanceEbsBlockDeviceParameter instance
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