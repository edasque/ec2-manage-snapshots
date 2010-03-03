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
 * Amazon_EC2_Model_DescribeDhcpOptionsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>DhcpOptionsId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeDhcpOptionsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeDhcpOptionsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DhcpOptionsId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DhcpOptionsId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DhcpOptionsId .
     * 
     * @return array of string DhcpOptionsId
     */
    public function getDhcpOptionsId() 
    {
        return $this->_fields['DhcpOptionsId']['FieldValue'];
    }

    /**
     * Sets the value of the DhcpOptionsId.
     * 
     * @param string or an array of string DhcpOptionsId
     * @return this instance
     */
    public function setDhcpOptionsId($dhcpOptionsId) 
    {
        if (!$this->_isNumericArray($dhcpOptionsId)) {
            $dhcpOptionsId =  array ($dhcpOptionsId);    
        }
        $this->_fields['DhcpOptionsId']['FieldValue'] = $dhcpOptionsId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of DhcpOptionsId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withDhcpOptionsId($dhcpOptionsId1, $dhcpOptionsId2)</code>
     * 
     * @param string  $stringArgs one or more DhcpOptionsId
     * @return Amazon_EC2_Model_DescribeDhcpOptionsRequest  instance
     */
    public function withDhcpOptionsId($stringArgs)
    {
        foreach (func_get_args() as $dhcpOptionsId) {
            $this->_fields['DhcpOptionsId']['FieldValue'][] = $dhcpOptionsId;
        }
        return $this;
    }  
      

    /**
     * Checks if DhcpOptionsId list is non-empty
     * 
     * @return bool true if DhcpOptionsId list is non-empty
     */
    public function isSetDhcpOptionsId()
    {
        return count ($this->_fields['DhcpOptionsId']['FieldValue']) > 0;
    }




}