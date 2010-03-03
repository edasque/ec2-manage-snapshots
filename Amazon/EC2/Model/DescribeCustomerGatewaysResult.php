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
 * Amazon_EC2_Model_DescribeCustomerGatewaysResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerGateway: Amazon_EC2_Model_CustomerGateway</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeCustomerGatewaysResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeCustomerGatewaysResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CustomerGateway: Amazon_EC2_Model_CustomerGateway</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CustomerGateway' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_CustomerGateway')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CustomerGateway.
     * 
     * @return array of CustomerGateway CustomerGateway
     */
    public function getCustomerGateway() 
    {
        return $this->_fields['CustomerGateway']['FieldValue'];
    }

    /**
     * Sets the value of the CustomerGateway.
     * 
     * @param mixed CustomerGateway or an array of CustomerGateway CustomerGateway
     * @return this instance
     */
    public function setCustomerGateway($customerGateway) 
    {
        if (!$this->_isNumericArray($customerGateway)) {
            $customerGateway =  array ($customerGateway);    
        }
        $this->_fields['CustomerGateway']['FieldValue'] = $customerGateway;
        return $this;
    }


    /**
     * Sets single or multiple values of CustomerGateway list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withCustomerGateway($customerGateway1, $customerGateway2)</code>
     * 
     * @param CustomerGateway  $customerGatewayArgs one or more CustomerGateway
     * @return Amazon_EC2_Model_DescribeCustomerGatewaysResult  instance
     */
    public function withCustomerGateway($customerGatewayArgs)
    {
        foreach (func_get_args() as $customerGateway) {
            $this->_fields['CustomerGateway']['FieldValue'][] = $customerGateway;
        }
        return $this;
    }   



    /**
     * Checks if CustomerGateway list is non-empty
     * 
     * @return bool true if CustomerGateway list is non-empty
     */
    public function isSetCustomerGateway()
    {
        return count ($this->_fields['CustomerGateway']['FieldValue']) > 0;
    }




}