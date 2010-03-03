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
 * Amazon_EC2_Model_DescribeCustomerGatewaysRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerGatewayId: string</li>
 * <li>Filter: Amazon_EC2_Model_Filter</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeCustomerGatewaysRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeCustomerGatewaysRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CustomerGatewayId: string</li>
     * <li>Filter: Amazon_EC2_Model_Filter</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CustomerGatewayId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Filter' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Filter')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CustomerGatewayId .
     * 
     * @return array of string CustomerGatewayId
     */
    public function getCustomerGatewayId() 
    {
        return $this->_fields['CustomerGatewayId']['FieldValue'];
    }

    /**
     * Sets the value of the CustomerGatewayId.
     * 
     * @param string or an array of string CustomerGatewayId
     * @return this instance
     */
    public function setCustomerGatewayId($customerGatewayId) 
    {
        if (!$this->_isNumericArray($customerGatewayId)) {
            $customerGatewayId =  array ($customerGatewayId);    
        }
        $this->_fields['CustomerGatewayId']['FieldValue'] = $customerGatewayId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of CustomerGatewayId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withCustomerGatewayId($customerGatewayId1, $customerGatewayId2)</code>
     * 
     * @param string  $stringArgs one or more CustomerGatewayId
     * @return Amazon_EC2_Model_DescribeCustomerGatewaysRequest  instance
     */
    public function withCustomerGatewayId($stringArgs)
    {
        foreach (func_get_args() as $customerGatewayId) {
            $this->_fields['CustomerGatewayId']['FieldValue'][] = $customerGatewayId;
        }
        return $this;
    }  
      

    /**
     * Checks if CustomerGatewayId list is non-empty
     * 
     * @return bool true if CustomerGatewayId list is non-empty
     */
    public function isSetCustomerGatewayId()
    {
        return count ($this->_fields['CustomerGatewayId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Filter.
     * 
     * @return array of Filter Filter
     */
    public function getFilter() 
    {
        return $this->_fields['Filter']['FieldValue'];
    }

    /**
     * Sets the value of the Filter.
     * 
     * @param mixed Filter or an array of Filter Filter
     * @return this instance
     */
    public function setFilter($filter) 
    {
        if (!$this->_isNumericArray($filter)) {
            $filter =  array ($filter);    
        }
        $this->_fields['Filter']['FieldValue'] = $filter;
        return $this;
    }


    /**
     * Sets single or multiple values of Filter list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFilter($filter1, $filter2)</code>
     * 
     * @param Filter  $filterArgs one or more Filter
     * @return Amazon_EC2_Model_DescribeCustomerGatewaysRequest  instance
     */
    public function withFilter($filterArgs)
    {
        foreach (func_get_args() as $filter) {
            $this->_fields['Filter']['FieldValue'][] = $filter;
        }
        return $this;
    }   



    /**
     * Checks if Filter list is non-empty
     * 
     * @return bool true if Filter list is non-empty
     */
    public function isSetFilter()
    {
        return count ($this->_fields['Filter']['FieldValue']) > 0;
    }




}