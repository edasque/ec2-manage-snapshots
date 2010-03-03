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
 * Amazon_EC2_Model_RequestSpotInstancesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotPrice: string</li>
 * <li>InstanceCount: int</li>
 * <li>Type: string</li>
 * <li>ValidFrom: string</li>
 * <li>ValidUntil: string</li>
 * <li>LaunchGroup: string</li>
 * <li>AvailabilityZoneGroup: string</li>
 * <li>LaunchSpecification: Amazon_EC2_Model_LaunchSpecification</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RequestSpotInstancesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RequestSpotInstancesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotPrice: string</li>
     * <li>InstanceCount: int</li>
     * <li>Type: string</li>
     * <li>ValidFrom: string</li>
     * <li>ValidUntil: string</li>
     * <li>LaunchGroup: string</li>
     * <li>AvailabilityZoneGroup: string</li>
     * <li>LaunchSpecification: Amazon_EC2_Model_LaunchSpecification</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceCount' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ValidFrom' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ValidUntil' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchGroup' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZoneGroup' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchSpecification' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_LaunchSpecification'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SpotPrice property.
     * 
     * @return string SpotPrice
     */
    public function getSpotPrice() 
    {
        return $this->_fields['SpotPrice']['FieldValue'];
    }

    /**
     * Sets the value of the SpotPrice property.
     * 
     * @param string SpotPrice
     * @return this instance
     */
    public function setSpotPrice($value) 
    {
        $this->_fields['SpotPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SpotPrice and returns this instance
     * 
     * @param string $value SpotPrice
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withSpotPrice($value)
    {
        $this->setSpotPrice($value);
        return $this;
    }


    /**
     * Checks if SpotPrice is set
     * 
     * @return bool true if SpotPrice  is set
     */
    public function isSetSpotPrice()
    {
        return !is_null($this->_fields['SpotPrice']['FieldValue']);
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
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
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
     * Gets the value of the Type property.
     * 
     * @return string Type
     */
    public function getType() 
    {
        return $this->_fields['Type']['FieldValue'];
    }

    /**
     * Sets the value of the Type property.
     * 
     * @param string Type
     * @return this instance
     */
    public function setType($value) 
    {
        $this->_fields['Type']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Type and returns this instance
     * 
     * @param string $value Type
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withType($value)
    {
        $this->setType($value);
        return $this;
    }


    /**
     * Checks if Type is set
     * 
     * @return bool true if Type  is set
     */
    public function isSetType()
    {
        return !is_null($this->_fields['Type']['FieldValue']);
    }

    /**
     * Gets the value of the ValidFrom property.
     * 
     * @return string ValidFrom
     */
    public function getValidFrom() 
    {
        return $this->_fields['ValidFrom']['FieldValue'];
    }

    /**
     * Sets the value of the ValidFrom property.
     * 
     * @param string ValidFrom
     * @return this instance
     */
    public function setValidFrom($value) 
    {
        $this->_fields['ValidFrom']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ValidFrom and returns this instance
     * 
     * @param string $value ValidFrom
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withValidFrom($value)
    {
        $this->setValidFrom($value);
        return $this;
    }


    /**
     * Checks if ValidFrom is set
     * 
     * @return bool true if ValidFrom  is set
     */
    public function isSetValidFrom()
    {
        return !is_null($this->_fields['ValidFrom']['FieldValue']);
    }

    /**
     * Gets the value of the ValidUntil property.
     * 
     * @return string ValidUntil
     */
    public function getValidUntil() 
    {
        return $this->_fields['ValidUntil']['FieldValue'];
    }

    /**
     * Sets the value of the ValidUntil property.
     * 
     * @param string ValidUntil
     * @return this instance
     */
    public function setValidUntil($value) 
    {
        $this->_fields['ValidUntil']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ValidUntil and returns this instance
     * 
     * @param string $value ValidUntil
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withValidUntil($value)
    {
        $this->setValidUntil($value);
        return $this;
    }


    /**
     * Checks if ValidUntil is set
     * 
     * @return bool true if ValidUntil  is set
     */
    public function isSetValidUntil()
    {
        return !is_null($this->_fields['ValidUntil']['FieldValue']);
    }

    /**
     * Gets the value of the LaunchGroup property.
     * 
     * @return string LaunchGroup
     */
    public function getLaunchGroup() 
    {
        return $this->_fields['LaunchGroup']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchGroup property.
     * 
     * @param string LaunchGroup
     * @return this instance
     */
    public function setLaunchGroup($value) 
    {
        $this->_fields['LaunchGroup']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the LaunchGroup and returns this instance
     * 
     * @param string $value LaunchGroup
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withLaunchGroup($value)
    {
        $this->setLaunchGroup($value);
        return $this;
    }


    /**
     * Checks if LaunchGroup is set
     * 
     * @return bool true if LaunchGroup  is set
     */
    public function isSetLaunchGroup()
    {
        return !is_null($this->_fields['LaunchGroup']['FieldValue']);
    }

    /**
     * Gets the value of the AvailabilityZoneGroup property.
     * 
     * @return string AvailabilityZoneGroup
     */
    public function getAvailabilityZoneGroup() 
    {
        return $this->_fields['AvailabilityZoneGroup']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZoneGroup property.
     * 
     * @param string AvailabilityZoneGroup
     * @return this instance
     */
    public function setAvailabilityZoneGroup($value) 
    {
        $this->_fields['AvailabilityZoneGroup']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AvailabilityZoneGroup and returns this instance
     * 
     * @param string $value AvailabilityZoneGroup
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withAvailabilityZoneGroup($value)
    {
        $this->setAvailabilityZoneGroup($value);
        return $this;
    }


    /**
     * Checks if AvailabilityZoneGroup is set
     * 
     * @return bool true if AvailabilityZoneGroup  is set
     */
    public function isSetAvailabilityZoneGroup()
    {
        return !is_null($this->_fields['AvailabilityZoneGroup']['FieldValue']);
    }

    /**
     * Gets the value of the LaunchSpecification.
     * 
     * @return LaunchSpecification LaunchSpecification
     */
    public function getLaunchSpecification() 
    {
        return $this->_fields['LaunchSpecification']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchSpecification.
     * 
     * @param LaunchSpecification LaunchSpecification
     * @return void
     */
    public function setLaunchSpecification($value) 
    {
        $this->_fields['LaunchSpecification']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the LaunchSpecification  and returns this instance
     * 
     * @param LaunchSpecification $value LaunchSpecification
     * @return Amazon_EC2_Model_RequestSpotInstancesRequest instance
     */
    public function withLaunchSpecification($value)
    {
        $this->setLaunchSpecification($value);
        return $this;
    }


    /**
     * Checks if LaunchSpecification  is set
     * 
     * @return bool true if LaunchSpecification property is set
     */
    public function isSetLaunchSpecification()
    {
        return !is_null($this->_fields['LaunchSpecification']['FieldValue']);

    }




}