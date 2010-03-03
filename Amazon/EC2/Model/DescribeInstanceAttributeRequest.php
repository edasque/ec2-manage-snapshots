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
 * Amazon_EC2_Model_DescribeInstanceAttributeRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>Attribute: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeInstanceAttributeRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeInstanceAttributeRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>Attribute: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Attribute' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_DescribeInstanceAttributeRequest instance
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
     * Gets the value of the Attribute property.
     * 
     * @return string Attribute
     */
    public function getAttribute() 
    {
        return $this->_fields['Attribute']['FieldValue'];
    }

    /**
     * Sets the value of the Attribute property.
     * 
     * @param string Attribute
     * @return this instance
     */
    public function setAttribute($value) 
    {
        $this->_fields['Attribute']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Attribute and returns this instance
     * 
     * @param string $value Attribute
     * @return Amazon_EC2_Model_DescribeInstanceAttributeRequest instance
     */
    public function withAttribute($value)
    {
        $this->setAttribute($value);
        return $this;
    }


    /**
     * Checks if Attribute is set
     * 
     * @return bool true if Attribute  is set
     */
    public function isSetAttribute()
    {
        return !is_null($this->_fields['Attribute']['FieldValue']);
    }




}