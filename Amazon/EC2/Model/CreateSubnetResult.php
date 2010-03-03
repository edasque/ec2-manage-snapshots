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
 * Amazon_EC2_Model_CreateSubnetResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Subnet: Amazon_EC2_Model_Subnet</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateSubnetResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateSubnetResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Subnet: Amazon_EC2_Model_Subnet</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Subnet' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Subnet'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Subnet.
     * 
     * @return Subnet Subnet
     */
    public function getSubnet() 
    {
        return $this->_fields['Subnet']['FieldValue'];
    }

    /**
     * Sets the value of the Subnet.
     * 
     * @param Subnet Subnet
     * @return void
     */
    public function setSubnet($value) 
    {
        $this->_fields['Subnet']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Subnet  and returns this instance
     * 
     * @param Subnet $value Subnet
     * @return Amazon_EC2_Model_CreateSubnetResult instance
     */
    public function withSubnet($value)
    {
        $this->setSubnet($value);
        return $this;
    }


    /**
     * Checks if Subnet  is set
     * 
     * @return bool true if Subnet property is set
     */
    public function isSetSubnet()
    {
        return !is_null($this->_fields['Subnet']['FieldValue']);

    }




}