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
 * Amazon_EC2_Model_PasswordData
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>Timestamp: string</li>
 * <li>Data: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_PasswordData extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_PasswordData
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>Timestamp: string</li>
     * <li>Data: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Data' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_PasswordData instance
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
     * Gets the value of the Timestamp property.
     * 
     * @return string Timestamp
     */
    public function getTimestamp() 
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Sets the value of the Timestamp property.
     * 
     * @param string Timestamp
     * @return this instance
     */
    public function setTimestamp($value) 
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Timestamp and returns this instance
     * 
     * @param string $value Timestamp
     * @return Amazon_EC2_Model_PasswordData instance
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);
        return $this;
    }


    /**
     * Checks if Timestamp is set
     * 
     * @return bool true if Timestamp  is set
     */
    public function isSetTimestamp()
    {
        return !is_null($this->_fields['Timestamp']['FieldValue']);
    }

    /**
     * Gets the value of the Data property.
     * 
     * @return string Data
     */
    public function getData() 
    {
        return $this->_fields['Data']['FieldValue'];
    }

    /**
     * Sets the value of the Data property.
     * 
     * @param string Data
     * @return this instance
     */
    public function setData($value) 
    {
        $this->_fields['Data']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Data and returns this instance
     * 
     * @param string $value Data
     * @return Amazon_EC2_Model_PasswordData instance
     */
    public function withData($value)
    {
        $this->setData($value);
        return $this;
    }


    /**
     * Checks if Data is set
     * 
     * @return bool true if Data  is set
     */
    public function isSetData()
    {
        return !is_null($this->_fields['Data']['FieldValue']);
    }




}