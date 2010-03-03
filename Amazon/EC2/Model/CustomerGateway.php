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
 * Amazon_EC2_Model_CustomerGateway
 * 
 * Properties:
 * <ul>
 * 
 * <li>CustomerGatewayId: string</li>
 * <li>CustomerGatewayState: string</li>
 * <li>Type: string</li>
 * <li>IpAddress: string</li>
 * <li>BgpAsn: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CustomerGateway extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CustomerGateway
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CustomerGatewayId: string</li>
     * <li>CustomerGatewayState: string</li>
     * <li>Type: string</li>
     * <li>IpAddress: string</li>
     * <li>BgpAsn: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CustomerGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CustomerGatewayState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'IpAddress' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BgpAsn' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_EC2_Model_CustomerGateway instance
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
     * Gets the value of the CustomerGatewayState property.
     * 
     * @return string CustomerGatewayState
     */
    public function getCustomerGatewayState() 
    {
        return $this->_fields['CustomerGatewayState']['FieldValue'];
    }

    /**
     * Sets the value of the CustomerGatewayState property.
     * 
     * @param string CustomerGatewayState
     * @return this instance
     */
    public function setCustomerGatewayState($value) 
    {
        $this->_fields['CustomerGatewayState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CustomerGatewayState and returns this instance
     * 
     * @param string $value CustomerGatewayState
     * @return Amazon_EC2_Model_CustomerGateway instance
     */
    public function withCustomerGatewayState($value)
    {
        $this->setCustomerGatewayState($value);
        return $this;
    }


    /**
     * Checks if CustomerGatewayState is set
     * 
     * @return bool true if CustomerGatewayState  is set
     */
    public function isSetCustomerGatewayState()
    {
        return !is_null($this->_fields['CustomerGatewayState']['FieldValue']);
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
     * @return Amazon_EC2_Model_CustomerGateway instance
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
     * Gets the value of the IpAddress property.
     * 
     * @return string IpAddress
     */
    public function getIpAddress() 
    {
        return $this->_fields['IpAddress']['FieldValue'];
    }

    /**
     * Sets the value of the IpAddress property.
     * 
     * @param string IpAddress
     * @return this instance
     */
    public function setIpAddress($value) 
    {
        $this->_fields['IpAddress']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the IpAddress and returns this instance
     * 
     * @param string $value IpAddress
     * @return Amazon_EC2_Model_CustomerGateway instance
     */
    public function withIpAddress($value)
    {
        $this->setIpAddress($value);
        return $this;
    }


    /**
     * Checks if IpAddress is set
     * 
     * @return bool true if IpAddress  is set
     */
    public function isSetIpAddress()
    {
        return !is_null($this->_fields['IpAddress']['FieldValue']);
    }

    /**
     * Gets the value of the BgpAsn property.
     * 
     * @return string BgpAsn
     */
    public function getBgpAsn() 
    {
        return $this->_fields['BgpAsn']['FieldValue'];
    }

    /**
     * Sets the value of the BgpAsn property.
     * 
     * @param string BgpAsn
     * @return this instance
     */
    public function setBgpAsn($value) 
    {
        $this->_fields['BgpAsn']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the BgpAsn and returns this instance
     * 
     * @param string $value BgpAsn
     * @return Amazon_EC2_Model_CustomerGateway instance
     */
    public function withBgpAsn($value)
    {
        $this->setBgpAsn($value);
        return $this;
    }


    /**
     * Checks if BgpAsn is set
     * 
     * @return bool true if BgpAsn  is set
     */
    public function isSetBgpAsn()
    {
        return !is_null($this->_fields['BgpAsn']['FieldValue']);
    }




}