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
 * Amazon_EC2_Model_CreateCustomerGatewayRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Type: string</li>
 * <li>IpAddress: string</li>
 * <li>BgpAsn: int</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateCustomerGatewayRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateCustomerGatewayRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Type: string</li>
     * <li>IpAddress: string</li>
     * <li>BgpAsn: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'IpAddress' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BgpAsn' => array('FieldValue' => null, 'FieldType' => 'int'),
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
     * @return Amazon_EC2_Model_CreateCustomerGatewayRequest instance
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
     * @return Amazon_EC2_Model_CreateCustomerGatewayRequest instance
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
     * @return int BgpAsn
     */
    public function getBgpAsn() 
    {
        return $this->_fields['BgpAsn']['FieldValue'];
    }

    /**
     * Sets the value of the BgpAsn property.
     * 
     * @param int BgpAsn
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
     * @param int $value BgpAsn
     * @return Amazon_EC2_Model_CreateCustomerGatewayRequest instance
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