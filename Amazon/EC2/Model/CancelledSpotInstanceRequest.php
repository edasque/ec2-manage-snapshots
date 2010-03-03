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
 * Amazon_EC2_Model_CancelledSpotInstanceRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotInstanceRequestId: string</li>
 * <li>State: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CancelledSpotInstanceRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CancelledSpotInstanceRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotInstanceRequestId: string</li>
     * <li>State: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotInstanceRequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'State' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SpotInstanceRequestId property.
     * 
     * @return string SpotInstanceRequestId
     */
    public function getSpotInstanceRequestId() 
    {
        return $this->_fields['SpotInstanceRequestId']['FieldValue'];
    }

    /**
     * Sets the value of the SpotInstanceRequestId property.
     * 
     * @param string SpotInstanceRequestId
     * @return this instance
     */
    public function setSpotInstanceRequestId($value) 
    {
        $this->_fields['SpotInstanceRequestId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SpotInstanceRequestId and returns this instance
     * 
     * @param string $value SpotInstanceRequestId
     * @return Amazon_EC2_Model_CancelledSpotInstanceRequest instance
     */
    public function withSpotInstanceRequestId($value)
    {
        $this->setSpotInstanceRequestId($value);
        return $this;
    }


    /**
     * Checks if SpotInstanceRequestId is set
     * 
     * @return bool true if SpotInstanceRequestId  is set
     */
    public function isSetSpotInstanceRequestId()
    {
        return !is_null($this->_fields['SpotInstanceRequestId']['FieldValue']);
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
     * @return Amazon_EC2_Model_CancelledSpotInstanceRequest instance
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




}