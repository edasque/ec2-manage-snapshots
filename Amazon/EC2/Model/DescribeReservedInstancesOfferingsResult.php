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
 * Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesOffering: Amazon_EC2_Model_ReservedInstancesOffering</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstancesOffering: Amazon_EC2_Model_ReservedInstancesOffering</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstancesOffering' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_ReservedInstancesOffering')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReservedInstancesOffering.
     * 
     * @return array of ReservedInstancesOffering ReservedInstancesOffering
     */
    public function getReservedInstancesOffering() 
    {
        return $this->_fields['ReservedInstancesOffering']['FieldValue'];
    }

    /**
     * Sets the value of the ReservedInstancesOffering.
     * 
     * @param mixed ReservedInstancesOffering or an array of ReservedInstancesOffering ReservedInstancesOffering
     * @return this instance
     */
    public function setReservedInstancesOffering($reservedInstancesOffering) 
    {
        if (!$this->_isNumericArray($reservedInstancesOffering)) {
            $reservedInstancesOffering =  array ($reservedInstancesOffering);    
        }
        $this->_fields['ReservedInstancesOffering']['FieldValue'] = $reservedInstancesOffering;
        return $this;
    }


    /**
     * Sets single or multiple values of ReservedInstancesOffering list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReservedInstancesOffering($reservedInstancesOffering1, $reservedInstancesOffering2)</code>
     * 
     * @param ReservedInstancesOffering  $reservedInstancesOfferingArgs one or more ReservedInstancesOffering
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult  instance
     */
    public function withReservedInstancesOffering($reservedInstancesOfferingArgs)
    {
        foreach (func_get_args() as $reservedInstancesOffering) {
            $this->_fields['ReservedInstancesOffering']['FieldValue'][] = $reservedInstancesOffering;
        }
        return $this;
    }   



    /**
     * Checks if ReservedInstancesOffering list is non-empty
     * 
     * @return bool true if ReservedInstancesOffering list is non-empty
     */
    public function isSetReservedInstancesOffering()
    {
        return count ($this->_fields['ReservedInstancesOffering']['FieldValue']) > 0;
    }




}