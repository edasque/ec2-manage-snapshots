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
 * Amazon_EC2_Model_AvailabilityZone
 * 
 * Properties:
 * <ul>
 * 
 * <li>ZoneName: string</li>
 * <li>ZoneState: string</li>
 * <li>RegionName: string</li>
 * <li>Message: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_AvailabilityZone extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_AvailabilityZone
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ZoneName: string</li>
     * <li>ZoneState: string</li>
     * <li>RegionName: string</li>
     * <li>Message: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ZoneName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ZoneState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RegionName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Message' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ZoneName property.
     * 
     * @return string ZoneName
     */
    public function getZoneName() 
    {
        return $this->_fields['ZoneName']['FieldValue'];
    }

    /**
     * Sets the value of the ZoneName property.
     * 
     * @param string ZoneName
     * @return this instance
     */
    public function setZoneName($value) 
    {
        $this->_fields['ZoneName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ZoneName and returns this instance
     * 
     * @param string $value ZoneName
     * @return Amazon_EC2_Model_AvailabilityZone instance
     */
    public function withZoneName($value)
    {
        $this->setZoneName($value);
        return $this;
    }


    /**
     * Checks if ZoneName is set
     * 
     * @return bool true if ZoneName  is set
     */
    public function isSetZoneName()
    {
        return !is_null($this->_fields['ZoneName']['FieldValue']);
    }

    /**
     * Gets the value of the ZoneState property.
     * 
     * @return string ZoneState
     */
    public function getZoneState() 
    {
        return $this->_fields['ZoneState']['FieldValue'];
    }

    /**
     * Sets the value of the ZoneState property.
     * 
     * @param string ZoneState
     * @return this instance
     */
    public function setZoneState($value) 
    {
        $this->_fields['ZoneState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ZoneState and returns this instance
     * 
     * @param string $value ZoneState
     * @return Amazon_EC2_Model_AvailabilityZone instance
     */
    public function withZoneState($value)
    {
        $this->setZoneState($value);
        return $this;
    }


    /**
     * Checks if ZoneState is set
     * 
     * @return bool true if ZoneState  is set
     */
    public function isSetZoneState()
    {
        return !is_null($this->_fields['ZoneState']['FieldValue']);
    }

    /**
     * Gets the value of the RegionName property.
     * 
     * @return string RegionName
     */
    public function getRegionName() 
    {
        return $this->_fields['RegionName']['FieldValue'];
    }

    /**
     * Sets the value of the RegionName property.
     * 
     * @param string RegionName
     * @return this instance
     */
    public function setRegionName($value) 
    {
        $this->_fields['RegionName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RegionName and returns this instance
     * 
     * @param string $value RegionName
     * @return Amazon_EC2_Model_AvailabilityZone instance
     */
    public function withRegionName($value)
    {
        $this->setRegionName($value);
        return $this;
    }


    /**
     * Checks if RegionName is set
     * 
     * @return bool true if RegionName  is set
     */
    public function isSetRegionName()
    {
        return !is_null($this->_fields['RegionName']['FieldValue']);
    }

    /**
     * Gets the value of the Message .
     * 
     * @return array of string Message
     */
    public function getMessage() 
    {
        return $this->_fields['Message']['FieldValue'];
    }

    /**
     * Sets the value of the Message.
     * 
     * @param string or an array of string Message
     * @return this instance
     */
    public function setMessage($message) 
    {
        if (!$this->_isNumericArray($message)) {
            $message =  array ($message);    
        }
        $this->_fields['Message']['FieldValue'] = $message;
        return $this;
    }
  

    /**
     * Sets single or multiple values of Message list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withMessage($message1, $message2)</code>
     * 
     * @param string  $stringArgs one or more Message
     * @return Amazon_EC2_Model_AvailabilityZone  instance
     */
    public function withMessage($stringArgs)
    {
        foreach (func_get_args() as $message) {
            $this->_fields['Message']['FieldValue'][] = $message;
        }
        return $this;
    }  
      

    /**
     * Checks if Message list is non-empty
     * 
     * @return bool true if Message list is non-empty
     */
    public function isSetMessage()
    {
        return count ($this->_fields['Message']['FieldValue']) > 0;
    }




}