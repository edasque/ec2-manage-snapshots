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
 * Amazon_EC2_Model_ReservedInstances
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesId: string</li>
 * <li>InstanceType: string</li>
 * <li>AvailabilityZone: string</li>
 * <li>Duration: int</li>
 * <li>UsagePrice: string</li>
 * <li>FixedPrice: string</li>
 * <li>InstanceCount: int</li>
 * <li>ProductDescription: string</li>
 * <li>PurchaseState: string</li>
 * <li>StartTime: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ReservedInstances extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ReservedInstances
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstancesId: string</li>
     * <li>InstanceType: string</li>
     * <li>AvailabilityZone: string</li>
     * <li>Duration: int</li>
     * <li>UsagePrice: string</li>
     * <li>FixedPrice: string</li>
     * <li>InstanceCount: int</li>
     * <li>ProductDescription: string</li>
     * <li>PurchaseState: string</li>
     * <li>StartTime: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstancesId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Duration' => array('FieldValue' => null, 'FieldType' => 'int'),
        'UsagePrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FixedPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        'PurchaseState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StartTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReservedInstancesId property.
     * 
     * @return string ReservedInstancesId
     */
    public function getReservedInstancesId() 
    {
        return $this->_fields['ReservedInstancesId']['FieldValue'];
    }

    /**
     * Sets the value of the ReservedInstancesId property.
     * 
     * @param string ReservedInstancesId
     * @return this instance
     */
    public function setReservedInstancesId($value) 
    {
        $this->_fields['ReservedInstancesId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ReservedInstancesId and returns this instance
     * 
     * @param string $value ReservedInstancesId
     * @return Amazon_EC2_Model_ReservedInstances instance
     */
    public function withReservedInstancesId($value)
    {
        $this->setReservedInstancesId($value);
        return $this;
    }


    /**
     * Checks if ReservedInstancesId is set
     * 
     * @return bool true if ReservedInstancesId  is set
     */
    public function isSetReservedInstancesId()
    {
        return !is_null($this->_fields['ReservedInstancesId']['FieldValue']);
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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
     * Gets the value of the InstanceCount property.
     * 
     * @return int InstanceCount
     */
    public function getInstanceCount() 
    {
        return $this->_fields['InstanceCount']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceCount property.
     * 
     * @param int InstanceCount
     * @return this instance
     */
    public function setInstanceCount($value) 
    {
        $this->_fields['InstanceCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceCount and returns this instance
     * 
     * @param int $value InstanceCount
     * @return Amazon_EC2_Model_ReservedInstances instance
     */
    public function withInstanceCount($value)
    {
        $this->setInstanceCount($value);
        return $this;
    }


    /**
     * Checks if InstanceCount is set
     * 
     * @return bool true if InstanceCount  is set
     */
    public function isSetInstanceCount()
    {
        return !is_null($this->_fields['InstanceCount']['FieldValue']);
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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

    /**
     * Gets the value of the PurchaseState property.
     * 
     * @return string PurchaseState
     */
    public function getPurchaseState() 
    {
        return $this->_fields['PurchaseState']['FieldValue'];
    }

    /**
     * Sets the value of the PurchaseState property.
     * 
     * @param string PurchaseState
     * @return this instance
     */
    public function setPurchaseState($value) 
    {
        $this->_fields['PurchaseState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PurchaseState and returns this instance
     * 
     * @param string $value PurchaseState
     * @return Amazon_EC2_Model_ReservedInstances instance
     */
    public function withPurchaseState($value)
    {
        $this->setPurchaseState($value);
        return $this;
    }


    /**
     * Checks if PurchaseState is set
     * 
     * @return bool true if PurchaseState  is set
     */
    public function isSetPurchaseState()
    {
        return !is_null($this->_fields['PurchaseState']['FieldValue']);
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
     * @return Amazon_EC2_Model_ReservedInstances instance
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




}