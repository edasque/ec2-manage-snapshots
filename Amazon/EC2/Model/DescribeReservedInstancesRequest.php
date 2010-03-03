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
 * Amazon_EC2_Model_DescribeReservedInstancesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservedInstancesId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeReservedInstancesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeReservedInstancesRequest
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
        'ReservedInstancesId' => array('FieldValue' => array(), 'FieldType' => array('string')),
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
     * @return Amazon_EC2_Model_DescribeReservedInstancesRequest  instance
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




}