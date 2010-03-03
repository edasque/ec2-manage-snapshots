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
 * Amazon_EC2_Model_CreateVpnConnectionRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Type: string</li>
 * <li>CustomerGatewayId: string</li>
 * <li>VpnGatewayId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateVpnConnectionRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateVpnConnectionRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Type: string</li>
     * <li>CustomerGatewayId: string</li>
     * <li>VpnGatewayId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomerGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpnGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_CreateVpnConnectionRequest instance
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
     * @return Amazon_EC2_Model_CreateVpnConnectionRequest instance
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

    /**
     * Gets the value of the VpnGatewayId property.
     * 
     * @return string VpnGatewayId
     */
    public function getVpnGatewayId() 
    {
        return $this->_fields['VpnGatewayId']['FieldValue'];
    }

    /**
     * Sets the value of the VpnGatewayId property.
     * 
     * @param string VpnGatewayId
     * @return this instance
     */
    public function setVpnGatewayId($value) 
    {
        $this->_fields['VpnGatewayId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpnGatewayId and returns this instance
     * 
     * @param string $value VpnGatewayId
     * @return Amazon_EC2_Model_CreateVpnConnectionRequest instance
     */
    public function withVpnGatewayId($value)
    {
        $this->setVpnGatewayId($value);
        return $this;
    }


    /**
     * Checks if VpnGatewayId is set
     * 
     * @return bool true if VpnGatewayId  is set
     */
    public function isSetVpnGatewayId()
    {
        return !is_null($this->_fields['VpnGatewayId']['FieldValue']);
    }




}