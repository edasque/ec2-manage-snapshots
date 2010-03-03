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
 * Amazon_EC2_Model_DescribeReservedInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstances: Amazon_EC2_Model_ReservedInstances</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeReservedInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeReservedInstancesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservedInstances: Amazon_EC2_Model_ReservedInstances</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservedInstances' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_ReservedInstances')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReservedInstances.
     * 
     * @return array of ReservedInstances ReservedInstances
     */
    public function getReservedInstances() 
    {
        return $this->_fields['ReservedInstances']['FieldValue'];
    }

    /**
     * Sets the value of the ReservedInstances.
     * 
     * @param mixed ReservedInstances or an array of ReservedInstances ReservedInstances
     * @return this instance
     */
    public function setReservedInstances($reservedInstances) 
    {
        if (!$this->_isNumericArray($reservedInstances)) {
            $reservedInstances =  array ($reservedInstances);    
        }
        $this->_fields['ReservedInstances']['FieldValue'] = $reservedInstances;
        return $this;
    }


    /**
     * Sets single or multiple values of ReservedInstances list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReservedInstances($reservedInstances1, $reservedInstances2)</code>
     * 
     * @param ReservedInstances  $reservedInstancesArgs one or more ReservedInstances
     * @return Amazon_EC2_Model_DescribeReservedInstancesResult  instance
     */
    public function withReservedInstances($reservedInstancesArgs)
    {
        foreach (func_get_args() as $reservedInstances) {
            $this->_fields['ReservedInstances']['FieldValue'][] = $reservedInstances;
        }
        return $this;
    }   



    /**
     * Checks if ReservedInstances list is non-empty
     * 
     * @return bool true if ReservedInstances list is non-empty
     */
    public function isSetReservedInstances()
    {
        return count ($this->_fields['ReservedInstances']['FieldValue']) > 0;
    }




}