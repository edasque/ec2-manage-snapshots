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
 * Amazon_EC2_Model_SpotInstanceRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotInstanceRequestId: string</li>
 * <li>SpotPrice: string</li>
 * <li>Type: string</li>
 * <li>State: string</li>
 * <li>Fault: Amazon_EC2_Model_SpotInstanceStateFault</li>
 * <li>ValidFrom: string</li>
 * <li>ValidUntil: string</li>
 * <li>LaunchGroup: string</li>
 * <li>AvailabilityZoneGroup: string</li>
 * <li>LaunchSpecification: Amazon_EC2_Model_LaunchSpecification</li>
 * <li>InstanceId: string</li>
 * <li>CreateTime: string</li>
 * <li>ProductDescription: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_SpotInstanceRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_SpotInstanceRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotInstanceRequestId: string</li>
     * <li>SpotPrice: string</li>
     * <li>Type: string</li>
     * <li>State: string</li>
     * <li>Fault: Amazon_EC2_Model_SpotInstanceStateFault</li>
     * <li>ValidFrom: string</li>
     * <li>ValidUntil: string</li>
     * <li>LaunchGroup: string</li>
     * <li>AvailabilityZoneGroup: string</li>
     * <li>LaunchSpecification: Amazon_EC2_Model_LaunchSpecification</li>
     * <li>InstanceId: string</li>
     * <li>CreateTime: string</li>
     * <li>ProductDescription: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotInstanceRequestId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SpotPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'State' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Fault' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_SpotInstanceStateFault'),
        'ValidFrom' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ValidUntil' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchGroup' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZoneGroup' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchSpecification' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_LaunchSpecification'),
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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
     * Gets the value of the CreateTime property.
     * 
     * @return string CreateTime
     */
    public function getCreateTime() 
    {
        return $this->_fields['CreateTime']['FieldValue'];
    }

    /**
     * Sets the value of the CreateTime property.
     * 
     * @param string CreateTime
     * @return this instance
     */
    public function setCreateTime($value) 
    {
        $this->_fields['CreateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CreateTime and returns this instance
     * 
     * @param string $value CreateTime
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
     */
    public function withCreateTime($value)
    {
        $this->setCreateTime($value);
        return $this;
    }


    /**
     * Checks if CreateTime is set
     * 
     * @return bool true if CreateTime  is set
     */
    public function isSetCreateTime()
    {
        return !is_null($this->_fields['CreateTime']['FieldValue']);
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
     * @return Amazon_EC2_Model_SpotInstanceRequest instance
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