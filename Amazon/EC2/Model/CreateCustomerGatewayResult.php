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
 * Amazon_EC2_Model_CreateCustomerGatewayResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerGateway: Amazon_EC2_Model_CustomerGateway</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateCustomerGatewayResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateCustomerGatewayResult
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
        'CustomerGateway' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_CustomerGateway'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CustomerGateway.
     * 
     * @return CustomerGateway CustomerGateway
     */
    public function getCustomerGateway() 
    {
        return $this->_fields['CustomerGateway']['FieldValue'];
    }

    /**
     * Sets the value of the CustomerGateway.
     * 
     * @param CustomerGateway CustomerGateway
     * @return void
     */
    public function setCustomerGateway($value) 
    {
        $this->_fields['CustomerGateway']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CustomerGateway  and returns this instance
     * 
     * @param CustomerGateway $value CustomerGateway
     * @return Amazon_EC2_Model_CreateCustomerGatewayResult instance
     */
    public function withCustomerGateway($value)
    {
        $this->setCustomerGateway($value);
        return $this;
    }


    /**
     * Checks if CustomerGateway  is set
     * 
     * @return bool true if CustomerGateway property is set
     */
    public function isSetCustomerGateway()
    {
        return !is_null($this->_fields['CustomerGateway']['FieldValue']);

    }




}