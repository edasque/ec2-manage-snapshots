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
 * Amazon_EC2_Model_VpnConnection
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnConnectionId: string</li>
 * <li>VpnConnectionState: string</li>
 * <li>CustomerGatewayConfiguration: string</li>
 * <li>Type: string</li>
 * <li>CustomerGatewayId: string</li>
 * <li>VpnGatewayId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_VpnConnection extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_VpnConnection
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnConnectionId: string</li>
     * <li>VpnConnectionState: string</li>
     * <li>CustomerGatewayConfiguration: string</li>
     * <li>Type: string</li>
     * <li>CustomerGatewayId: string</li>
     * <li>VpnGatewayId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnConnectionId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpnConnectionState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomerGatewayConfiguration' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomerGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpnGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnConnectionId property.
     * 
     * @return string VpnConnectionId
     */
    public function getVpnConnectionId() 
    {
        return $this->_fields['VpnConnectionId']['FieldValue'];
    }

    /**
     * Sets the value of the VpnConnectionId property.
     * 
     * @param string VpnConnectionId
     * @return this instance
     */
    public function setVpnConnectionId($value) 
    {
        $this->_fields['VpnConnectionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpnConnectionId and returns this instance
     * 
     * @param string $value VpnConnectionId
     * @return Amazon_EC2_Model_VpnConnection instance
     */
    public function withVpnConnectionId($value)
    {
        $this->setVpnConnectionId($value);
        return $this;
    }


    /**
     * Checks if VpnConnectionId is set
     * 
     * @return bool true if VpnConnectionId  is set
     */
    public function isSetVpnConnectionId()
    {
        return !is_null($this->_fields['VpnConnectionId']['FieldValue']);
    }

    /**
     * Gets the value of the VpnConnectionState property.
     * 
     * @return string VpnConnectionState
     */
    public function getVpnConnectionState() 
    {
        return $this->_fields['VpnConnectionState']['FieldValue'];
    }

    /**
     * Sets the value of the VpnConnectionState property.
     * 
     * @param string VpnConnectionState
     * @return this instance
     */
    public function setVpnConnectionState($value) 
    {
        $this->_fields['VpnConnectionState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpnConnectionState and returns this instance
     * 
     * @param string $value VpnConnectionState
     * @return Amazon_EC2_Model_VpnConnection instance
     */
    public function withVpnConnectionState($value)
    {
        $this->setVpnConnectionState($value);
        return $this;
    }


    /**
     * Checks if VpnConnectionState is set
     * 
     * @return bool true if VpnConnectionState  is set
     */
    public function isSetVpnConnectionState()
    {
        return !is_null($this->_fields['VpnConnectionState']['FieldValue']);
    }

    /**
     * Gets the value of the CustomerGatewayConfiguration property.
     * 
     * @return string CustomerGatewayConfiguration
     */
    public function getCustomerGatewayConfiguration() 
    {
        return $this->_fields['CustomerGatewayConfiguration']['FieldValue'];
    }

    /**
     * Sets the value of the CustomerGatewayConfiguration property.
     * 
     * @param string CustomerGatewayConfiguration
     * @return this instance
     */
    public function setCustomerGatewayConfiguration($value) 
    {
        $this->_fields['CustomerGatewayConfiguration']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CustomerGatewayConfiguration and returns this instance
     * 
     * @param string $value CustomerGatewayConfiguration
     * @return Amazon_EC2_Model_VpnConnection instance
     */
    public function withCustomerGatewayConfiguration($value)
    {
        $this->setCustomerGatewayConfiguration($value);
        return $this;
    }


    /**
     * Checks if CustomerGatewayConfiguration is set
     * 
     * @return bool true if CustomerGatewayConfiguration  is set
     */
    public function isSetCustomerGatewayConfiguration()
    {
        return !is_null($this->_fields['CustomerGatewayConfiguration']['FieldValue']);
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
     * @return Amazon_EC2_Model_VpnConnection instance
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
     * @return Amazon_EC2_Model_VpnConnection instance
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
     * @return Amazon_EC2_Model_VpnConnection instance
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