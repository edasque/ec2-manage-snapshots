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
 * Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesOfferingId: string</li>
 * <li>InstanceCount: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstancesOfferingId: string</li>
     * <li>InstanceCount: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstancesOfferingId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceCount' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest instance
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
     * Gets the value of the InstanceCount property.
     * 
     * @return string InstanceCount
     */
    public function getInstanceCount() 
    {
        return $this->_fields['InstanceCount']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceCount property.
     * 
     * @param string InstanceCount
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
     * @param string $value InstanceCount
     * @return Amazon_EC2_Model_PurchaseReservedInstancesOfferingRequest instance
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




}