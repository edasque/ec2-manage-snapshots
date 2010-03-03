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
 * Amazon_EC2_Model_DescribeAddressesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Address: Amazon_EC2_Model_Address</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeAddressesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeAddressesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Address: Amazon_EC2_Model_Address</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Address' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Address')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Address.
     * 
     * @return array of Address Address
     */
    public function getAddress() 
    {
        return $this->_fields['Address']['FieldValue'];
    }

    /**
     * Sets the value of the Address.
     * 
     * @param mixed Address or an array of Address Address
     * @return this instance
     */
    public function setAddress($address) 
    {
        if (!$this->_isNumericArray($address)) {
            $address =  array ($address);    
        }
        $this->_fields['Address']['FieldValue'] = $address;
        return $this;
    }


    /**
     * Sets single or multiple values of Address list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAddress($address1, $address2)</code>
     * 
     * @param Address  $addressArgs one or more Address
     * @return Amazon_EC2_Model_DescribeAddressesResult  instance
     */
    public function withAddress($addressArgs)
    {
        foreach (func_get_args() as $address) {
            $this->_fields['Address']['FieldValue'][] = $address;
        }
        return $this;
    }   



    /**
     * Checks if Address list is non-empty
     * 
     * @return bool true if Address list is non-empty
     */
    public function isSetAddress()
    {
        return count ($this->_fields['Address']['FieldValue']) > 0;
    }




}