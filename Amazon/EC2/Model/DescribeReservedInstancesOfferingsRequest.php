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
 * Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesId: string</li>
 * <li>InstanceType: string</li>
 * <li>AvailabilityZone: string</li>
 * <li>ProductDescription: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstancesId: string</li>
     * <li>InstanceType: string</li>
     * <li>AvailabilityZone: string</li>
     * <li>ProductDescription: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstancesId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReservedInstancesId .
     * 
     * @return array of string ReservedInstancesId
     */
    public function getReservedInstancesId() 
    {
        return $this->_fields['ReservedInstancesId']['FieldValue'];
    }

    /**
     * Sets the value of the ReservedInstancesId.
     * 
     * @param string or an array of string ReservedInstancesId
     * @return this instance
     */
    public function setReservedInstancesId($reservedInstancesId) 
    {
        if (!$this->_isNumericArray($reservedInstancesId)) {
            $reservedInstancesId =  array ($reservedInstancesId);    
        }
        $this->_fields['ReservedInstancesId']['FieldValue'] = $reservedInstancesId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ReservedInstancesId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReservedInstancesId($reservedInstancesId1, $reservedInstancesId2)</code>
     * 
     * @param string  $stringArgs one or more ReservedInstancesId
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest  instance
     */
    public function withReservedInstancesId($stringArgs)
    {
        foreach (func_get_args() as $reservedInstancesId) {
            $this->_fields['ReservedInstancesId']['FieldValue'][] = $reservedInstancesId;
        }
        return $this;
    }  
      

    /**
     * Checks if ReservedInstancesId list is non-empty
     * 
     * @return bool true if ReservedInstancesId list is non-empty
     */
    public function isSetReservedInstancesId()
    {
        return count ($this->_fields['ReservedInstancesId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the InstanceType property.
     * 
     * @return string InstanceType
     */
    public function getInstanceType() 
    {
        return $this->_fields['InstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceType property.
     * 
     * @param string InstanceType
     * @return this instance
     */
    public function setInstanceType($value) 
    {
        $this->_fields['InstanceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceType and returns this instance
     * 
     * @param string $value InstanceType
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest instance
     */
    public function withInstanceType($value)
    {
        $this->setInstanceType($value);
        return $this;
    }


    /**
     * Checks if InstanceType is set
     * 
     * @return bool true if InstanceType  is set
     */
    public function isSetInstanceType()
    {
        return !is_null($this->_fields['InstanceType']['FieldValue']);
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
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest instance
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
     * Gets the value of the ProductDescription property.
     * 
     * @return string ProductDescription
     */
    public function getProductDescription() 
    {
        return $this->_fields['ProductDescription']['FieldValue'];
    }

    /**
     * Sets the value of the ProductDescription property.
     * 
     * @param string ProductDescription
     * @return this instance
     */
    public function setProductDescription($value) 
    {
        $this->_fields['ProductDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProductDescription and returns this instance
     * 
     * @param string $value ProductDescription
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsRequest instance
     */
    public function withProductDescription($value)
    {
        $this->setProductDescription($value);
        return $this;
    }


    /**
     * Checks if ProductDescription is set
     * 
     * @return bool true if ProductDescription  is set
     */
    public function isSetProductDescription()
    {
        return !is_null($this->_fields['ProductDescription']['FieldValue']);
    }




}