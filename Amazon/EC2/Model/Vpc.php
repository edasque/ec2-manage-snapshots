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
 * Amazon_EC2_Model_Vpc
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpcId: string</li>
 * <li>VpcState: string</li>
 * <li>CidrBlock: string</li>
 * <li>DhcpOptionsId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Vpc extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Vpc
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpcId: string</li>
     * <li>VpcState: string</li>
     * <li>CidrBlock: string</li>
     * <li>DhcpOptionsId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpcId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpcState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CidrBlock' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DhcpOptionsId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpcId property.
     * 
     * @return string VpcId
     */
    public function getVpcId() 
    {
        return $this->_fields['VpcId']['FieldValue'];
    }

    /**
     * Sets the value of the VpcId property.
     * 
     * @param string VpcId
     * @return this instance
     */
    public function setVpcId($value) 
    {
        $this->_fields['VpcId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpcId and returns this instance
     * 
     * @param string $value VpcId
     * @return Amazon_EC2_Model_Vpc instance
     */
    public function withVpcId($value)
    {
        $this->setVpcId($value);
        return $this;
    }


    /**
     * Checks if VpcId is set
     * 
     * @return bool true if VpcId  is set
     */
    public function isSetVpcId()
    {
        return !is_null($this->_fields['VpcId']['FieldValue']);
    }

    /**
     * Gets the value of the VpcState property.
     * 
     * @return string VpcState
     */
    public function getVpcState() 
    {
        return $this->_fields['VpcState']['FieldValue'];
    }

    /**
     * Sets the value of the VpcState property.
     * 
     * @param string VpcState
     * @return this instance
     */
    public function setVpcState($value) 
    {
        $this->_fields['VpcState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpcState and returns this instance
     * 
     * @param string $value VpcState
     * @return Amazon_EC2_Model_Vpc instance
     */
    public function withVpcState($value)
    {
        $this->setVpcState($value);
        return $this;
    }


    /**
     * Checks if VpcState is set
     * 
     * @return bool true if VpcState  is set
     */
    public function isSetVpcState()
    {
        return !is_null($this->_fields['VpcState']['FieldValue']);
    }

    /**
     * Gets the value of the CidrBlock property.
     * 
     * @return string CidrBlock
     */
    public function getCidrBlock() 
    {
        return $this->_fields['CidrBlock']['FieldValue'];
    }

    /**
     * Sets the value of the CidrBlock property.
     * 
     * @param string CidrBlock
     * @return this instance
     */
    public function setCidrBlock($value) 
    {
        $this->_fields['CidrBlock']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CidrBlock and returns this instance
     * 
     * @param string $value CidrBlock
     * @return Amazon_EC2_Model_Vpc instance
     */
    public function withCidrBlock($value)
    {
        $this->setCidrBlock($value);
        return $this;
    }


    /**
     * Checks if CidrBlock is set
     * 
     * @return bool true if CidrBlock  is set
     */
    public function isSetCidrBlock()
    {
        return !is_null($this->_fields['CidrBlock']['FieldValue']);
    }

    /**
     * Gets the value of the DhcpOptionsId property.
     * 
     * @return string DhcpOptionsId
     */
    public function getDhcpOptionsId() 
    {
        return $this->_fields['DhcpOptionsId']['FieldValue'];
    }

    /**
     * Sets the value of the DhcpOptionsId property.
     * 
     * @param string DhcpOptionsId
     * @return this instance
     */
    public function setDhcpOptionsId($value) 
    {
        $this->_fields['DhcpOptionsId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DhcpOptionsId and returns this instance
     * 
     * @param string $value DhcpOptionsId
     * @return Amazon_EC2_Model_Vpc instance
     */
    public function withDhcpOptionsId($value)
    {
        $this->setDhcpOptionsId($value);
        return $this;
    }


    /**
     * Checks if DhcpOptionsId is set
     * 
     * @return bool true if DhcpOptionsId  is set
     */
    public function isSetDhcpOptionsId()
    {
        return !is_null($this->_fields['DhcpOptionsId']['FieldValue']);
    }




}