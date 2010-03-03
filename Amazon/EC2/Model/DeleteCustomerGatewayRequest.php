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
 * Amazon_EC2_Model_DeleteCustomerGatewayRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerGatewayId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DeleteCustomerGatewayRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DeleteCustomerGatewayRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CustomerGatewayId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CustomerGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CustomerGatewayId property.
     * 
     * @return string CustomerGatewayId
     */
    public function getCustomerGatewayId() 
    {
        return $this->_fields['CustomerGatewayId']['FieldValue'];
    }

    /**
     * Sets the value of the CustomerGatewayId property.
     * 
     * @param string CustomerGatewayId
     * @return this instance
     */
    public function setCustomerGatewayId($value) 
    {
        $this->_fields['CustomerGatewayId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CustomerGatewayId and returns this instance
     * 
     * @param string $value CustomerGatewayId
     * @return Amazon_EC2_Model_DeleteCustomerGatewayRequest instance
     */
    public function withCustomerGatewayId($value)
    {
        $this->setCustomerGatewayId($value);
        return $this;
    }


    /**
     * Checks if CustomerGatewayId is set
     * 
     * @return bool true if CustomerGatewayId  is set
     */
    public function isSetCustomerGatewayId()
    {
        return !is_null($this->_fields['CustomerGatewayId']['FieldValue']);
    }




}