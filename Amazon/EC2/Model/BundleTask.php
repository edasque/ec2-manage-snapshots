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
 * Amazon_EC2_Model_BundleTask
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>BundleId: string</li>
 * <li>BundleState: string</li>
 * <li>StartTime: string</li>
 * <li>UpdateTime: string</li>
 * <li>Storage: Amazon_EC2_Model_Storage</li>
 * <li>Progress: string</li>
 * <li>BundleTaskError: Amazon_EC2_Model_BundleTaskError</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_BundleTask extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_BundleTask
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>BundleId: string</li>
     * <li>BundleState: string</li>
     * <li>StartTime: string</li>
     * <li>UpdateTime: string</li>
     * <li>Storage: Amazon_EC2_Model_Storage</li>
     * <li>Progress: string</li>
     * <li>BundleTaskError: Amazon_EC2_Model_BundleTaskError</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BundleId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BundleState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UpdateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Storage' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Storage'),
        'Progress' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BundleTaskError' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_BundleTaskError'),
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
     * @return Amazon_EC2_Model_BundleTask instance
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
     * Gets the value of the BundleId property.
     * 
     * @return string BundleId
     */
    public function getBundleId() 
    {
        return $this->_fields['BundleId']['FieldValue'];
    }

    /**
     * Sets the value of the BundleId property.
     * 
     * @param string BundleId
     * @return this instance
     */
    public function setBundleId($value) 
    {
        $this->_fields['BundleId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the BundleId and returns this instance
     * 
     * @param string $value BundleId
     * @return Amazon_EC2_Model_BundleTask instance
     */
    public function withBundleId($value)
    {
        $this->setBundleId($value);
        return $this;
    }


    /**
     * Checks if BundleId is set
     * 
     * @return bool true if BundleId  is set
     */
    public function isSetBundleId()
    {
        return !is_null($this->_fields['BundleId']['FieldValue']);
    }

    /**
     * Gets the value of the BundleState property.
     * 
     * @return string BundleState
     */
    public function getBundleState() 
    {
        return $this->_fields['BundleState']['FieldValue'];
    }

    /**
     * Sets the value of the BundleState property.
     * 
     * @param string BundleState
     * @return this instance
     */
    public function setBundleState($value) 
    {
        $this->_fields['BundleState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the BundleState and returns this instance
     * 
     * @param string $value BundleState
     * @return Amazon_EC2_Model_BundleTask instance
     */
    public function withBundleState($value)
    {
        $this->setBundleState($value);
        return $this;
    }


    /**
     * Checks if BundleState is set
     * 
     * @return bool true if BundleState  is set
     */
    public function isSetBundleState()
    {
        return !is_null($this->_fields['BundleState']['FieldValue']);
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
     * @return Amazon_EC2_Model_BundleTask instance
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
     * Gets the value of the UpdateTime property.
     * 
     * @return string UpdateTime
     */
    public function getUpdateTime() 
    {
        return $this->_fields['UpdateTime']['FieldValue'];
    }

    /**
     * Sets the value of the UpdateTime property.
     * 
     * @param string UpdateTime
     * @return this instance
     */
    public function setUpdateTime($value) 
    {
        $this->_fields['UpdateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UpdateTime and returns this instance
     * 
     * @param string $value UpdateTime
     * @return Amazon_EC2_Model_BundleTask instance
     */
    public function withUpdateTime($value)
    {
        $this->setUpdateTime($value);
        return $this;
    }


    /**
     * Checks if UpdateTime is set
     * 
     * @return bool true if UpdateTime  is set
     */
    public function isSetUpdateTime()
    {
        return !is_null($this->_fields['UpdateTime']['FieldValue']);
    }

    /**
     * Gets the value of the Storage.
     * 
     * @return Storage Storage
     */
    public function getStorage() 
    {
        return $this->_fields['Storage']['FieldValue'];
    }

    /**
     * Sets the value of the Storage.
     * 
     * @param Storage Storage
     * @return void
     */
    public function setStorage($value) 
    {
        $this->_fields['Storage']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Storage  and returns this instance
     * 
     * @param Storage $value Storage
     * @return Amazon_EC2_Model_BundleTask instance
     */
    public function withStorage($value)
    {
        $this->setStorage($value);
        return $this;
    }


    /**
     * Checks if Storage  is set
     * 
     * @return bool true if Storage property is set
     */
    public function isSetStorage()
    {
        return !is_null($this->_fields['Storage']['FieldValue']);

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
     * @return Amazon_EC2_Model_BundleTask instance
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
     * Gets the value of the BundleTaskError.
     * 
     * @return BundleTaskError BundleTaskError
     */
    public function getBundleTaskError() 
    {
        return $this->_fields['BundleTaskError']['FieldValue'];
    }

    /**
     * Sets the value of the BundleTaskError.
     * 
     * @param BundleTaskError BundleTaskError
     * @return void
     */
    public function setBundleTaskError($value) 
    {
        $this->_fields['BundleTaskError']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the BundleTaskError  and returns this instance
     * 
     * @param BundleTaskError $value BundleTaskError
     * @return Amazon_EC2_Model_BundleTask instance
     */
    public function withBundleTaskError($value)
    {
        $this->setBundleTaskError($value);
        return $this;
    }


    /**
     * Checks if BundleTaskError  is set
     * 
     * @return bool true if BundleTaskError property is set
     */
    public function isSetBundleTaskError()
    {
        return !is_null($this->_fields['BundleTaskError']['FieldValue']);

    }




}