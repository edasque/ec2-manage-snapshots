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
 * Amazon_EC2_Model_ReservedInstancesOffering
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesOfferingId: string</li>
 * <li>InstanceType: string</li>
 * <li>AvailabilityZone: string</li>
 * <li>Duration: int</li>
 * <li>UsagePrice: string</li>
 * <li>FixedPrice: string</li>
 * <li>ProductDescription: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ReservedInstancesOffering extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ReservedInstancesOffering
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstancesOfferingId: string</li>
     * <li>InstanceType: string</li>
     * <li>AvailabilityZone: string</li>
     * <li>Duration: int</li>
     * <li>UsagePrice: string</li>
     * <li>FixedPrice: string</li>
     * <li>ProductDescription: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstancesOfferingId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Duration' => array('FieldValue' => null, 'FieldType' => 'int'),
        'UsagePrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FixedPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReservedInstancesOfferingId property.
     * 
     * @return string ReservedInstancesOfferingId
     */
    public function getReservedInstancesOfferingId() 
    {
        return $this->_fields['ReservedInstancesOfferingId']['FieldValue'];
    }

    /**
     * Sets the value of the ReservedInstancesOfferingId property.
     * 
     * @param string ReservedInstancesOfferingId
     * @return this instance
     */
    public function setReservedInstancesOfferingId($value) 
    {
        $this->_fields['ReservedInstancesOfferingId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ReservedInstancesOfferingId and returns this instance
     * 
     * @param string $value ReservedInstancesOfferingId
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
     */
    public function withReservedInstancesOfferingId($value)
    {
        $this->setReservedInstancesOfferingId($value);
        return $this;
    }


    /**
     * Checks if ReservedInstancesOfferingId is set
     * 
     * @return bool true if ReservedInstancesOfferingId  is set
     */
    public function isSetReservedInstancesOfferingId()
    {
        return !is_null($this->_fields['ReservedInstancesOfferingId']['FieldValue']);
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
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
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
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
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
     * Gets the value of the Duration property.
     * 
     * @return int Duration
     */
    public function getDuration() 
    {
        return $this->_fields['Duration']['FieldValue'];
    }

    /**
     * Sets the value of the Duration property.
     * 
     * @param int Duration
     * @return this instance
     */
    public function setDuration($value) 
    {
        $this->_fields['Duration']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Duration and returns this instance
     * 
     * @param int $value Duration
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
     */
    public function withDuration($value)
    {
        $this->setDuration($value);
        return $this;
    }


    /**
     * Checks if Duration is set
     * 
     * @return bool true if Duration  is set
     */
    public function isSetDuration()
    {
        return !is_null($this->_fields['Duration']['FieldValue']);
    }

    /**
     * Gets the value of the UsagePrice property.
     * 
     * @return string UsagePrice
     */
    public function getUsagePrice() 
    {
        return $this->_fields['UsagePrice']['FieldValue'];
    }

    /**
     * Sets the value of the UsagePrice property.
     * 
     * @param string UsagePrice
     * @return this instance
     */
    public function setUsagePrice($value) 
    {
        $this->_fields['UsagePrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UsagePrice and returns this instance
     * 
     * @param string $value UsagePrice
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
     */
    public function withUsagePrice($value)
    {
        $this->setUsagePrice($value);
        return $this;
    }


    /**
     * Checks if UsagePrice is set
     * 
     * @return bool true if UsagePrice  is set
     */
    public function isSetUsagePrice()
    {
        return !is_null($this->_fields['UsagePrice']['FieldValue']);
    }

    /**
     * Gets the value of the FixedPrice property.
     * 
     * @return string FixedPrice
     */
    public function getFixedPrice() 
    {
        return $this->_fields['FixedPrice']['FieldValue'];
    }

    /**
     * Sets the value of the FixedPrice property.
     * 
     * @param string FixedPrice
     * @return this instance
     */
    public function setFixedPrice($value) 
    {
        $this->_fields['FixedPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FixedPrice and returns this instance
     * 
     * @param string $value FixedPrice
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
     */
    public function withFixedPrice($value)
    {
        $this->setFixedPrice($value);
        return $this;
    }


    /**
     * Checks if FixedPrice is set
     * 
     * @return bool true if FixedPrice  is set
     */
    public function isSetFixedPrice()
    {
        return !is_null($this->_fields['FixedPrice']['FieldValue']);
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
     * @return Amazon_EC2_Model_ReservedInstancesOffering instance
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