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
 * Amazon_EC2_Model_SpotDatafeedSubscription
 * 
 * Properties:
 * <ul>
 * 
 * <li>OwnerId: string</li>
 * <li>Bucket: string</li>
 * <li>Prefix: string</li>
 * <li>State: string</li>
 * <li>Fault: Amazon_EC2_Model_SpotInstanceStateFault</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_SpotDatafeedSubscription extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_SpotDatafeedSubscription
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>OwnerId: string</li>
     * <li>Bucket: string</li>
     * <li>Prefix: string</li>
     * <li>State: string</li>
     * <li>Fault: Amazon_EC2_Model_SpotInstanceStateFault</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'OwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Bucket' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Prefix' => array('FieldValue' => null, 'FieldType' => 'string'),
        'State' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Fault' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_SpotInstanceStateFault'),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_SpotDatafeedSubscription instance
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
     * Gets the value of the Bucket property.
     * 
     * @return string Bucket
     */
    public function getBucket() 
    {
        return $this->_fields['Bucket']['FieldValue'];
    }

    /**
     * Sets the value of the Bucket property.
     * 
     * @param string Bucket
     * @return this instance
     */
    public function setBucket($value) 
    {
        $this->_fields['Bucket']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Bucket and returns this instance
     * 
     * @param string $value Bucket
     * @return Amazon_EC2_Model_SpotDatafeedSubscription instance
     */
    public function withBucket($value)
    {
        $this->setBucket($value);
        return $this;
    }


    /**
     * Checks if Bucket is set
     * 
     * @return bool true if Bucket  is set
     */
    public function isSetBucket()
    {
        return !is_null($this->_fields['Bucket']['FieldValue']);
    }

    /**
     * Gets the value of the Prefix property.
     * 
     * @return string Prefix
     */
    public function getPrefix() 
    {
        return $this->_fields['Prefix']['FieldValue'];
    }

    /**
     * Sets the value of the Prefix property.
     * 
     * @param string Prefix
     * @return this instance
     */
    public function setPrefix($value) 
    {
        $this->_fields['Prefix']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Prefix and returns this instance
     * 
     * @param string $value Prefix
     * @return Amazon_EC2_Model_SpotDatafeedSubscription instance
     */
    public function withPrefix($value)
    {
        $this->setPrefix($value);
        return $this;
    }


    /**
     * Checks if Prefix is set
     * 
     * @return bool true if Prefix  is set
     */
    public function isSetPrefix()
    {
        return !is_null($this->_fields['Prefix']['FieldValue']);
    }

    /**
     * Gets the value of the State property.
     * 
     * @return string State
     */
    public function getState() 
    {
        return $this->_fields['State']['FieldValue'];
    }

    /**
     * Sets the value of the State property.
     * 
     * @param string State
     * @return this instance
     */
    public function setState($value) 
    {
        $this->_fields['State']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the State and returns this instance
     * 
     * @param string $value State
     * @return Amazon_EC2_Model_SpotDatafeedSubscription instance
     */
    public function withState($value)
    {
        $this->setState($value);
        return $this;
    }


    /**
     * Checks if State is set
     * 
     * @return bool true if State  is set
     */
    public function isSetState()
    {
        return !is_null($this->_fields['State']['FieldValue']);
    }

    /**
     * Gets the value of the Fault.
     * 
     * @return SpotInstanceStateFault Fault
     */
    public function getFault() 
    {
        return $this->_fields['Fault']['FieldValue'];
    }

    /**
     * Sets the value of the Fault.
     * 
     * @param SpotInstanceStateFault Fault
     * @return void
     */
    public function setFault($value) 
    {
        $this->_fields['Fault']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Fault  and returns this instance
     * 
     * @param SpotInstanceStateFault $value Fault
     * @return Amazon_EC2_Model_SpotDatafeedSubscription instance
     */
    public function withFault($value)
    {
        $this->setFault($value);
        return $this;
    }


    /**
     * Checks if Fault  is set
     * 
     * @return bool true if Fault property is set
     */
    public function isSetFault()
    {
        return !is_null($this->_fields['Fault']['FieldValue']);

    }




}