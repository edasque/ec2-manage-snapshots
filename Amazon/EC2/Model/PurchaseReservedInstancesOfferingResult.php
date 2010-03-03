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
 * Amazon_EC2_Model_PurchaseReservedInstancesOfferingResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_PurchaseReservedInstancesOfferingResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_PurchaseReservedInstancesOfferingResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstancesId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstancesId' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_PurchaseReservedInstancesOfferingResult instance
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




}