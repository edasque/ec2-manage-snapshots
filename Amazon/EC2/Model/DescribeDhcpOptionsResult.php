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
 * Amazon_EC2_Model_DescribeDhcpOptionsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>DhcpOptions: Amazon_EC2_Model_DhcpOptions</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeDhcpOptionsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeDhcpOptionsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DhcpOptions: Amazon_EC2_Model_DhcpOptions</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DhcpOptions' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_DhcpOptions')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DhcpOptions.
     * 
     * @return array of DhcpOptions DhcpOptions
     */
    public function getDhcpOptions() 
    {
        return $this->_fields['DhcpOptions']['FieldValue'];
    }

    /**
     * Sets the value of the DhcpOptions.
     * 
     * @param mixed DhcpOptions or an array of DhcpOptions DhcpOptions
     * @return this instance
     */
    public function setDhcpOptions($dhcpOptions) 
    {
        if (!$this->_isNumericArray($dhcpOptions)) {
            $dhcpOptions =  array ($dhcpOptions);    
        }
        $this->_fields['DhcpOptions']['FieldValue'] = $dhcpOptions;
        return $this;
    }


    /**
     * Sets single or multiple values of DhcpOptions list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withDhcpOptions($dhcpOptions1, $dhcpOptions2)</code>
     * 
     * @param DhcpOptions  $dhcpOptionsArgs one or more DhcpOptions
     * @return Amazon_EC2_Model_DescribeDhcpOptionsResult  instance
     */
    public function withDhcpOptions($dhcpOptionsArgs)
    {
        foreach (func_get_args() as $dhcpOptions) {
            $this->_fields['DhcpOptions']['FieldValue'][] = $dhcpOptions;
        }
        return $this;
    }   



    /**
     * Checks if DhcpOptions list is non-empty
     * 
     * @return bool true if DhcpOptions list is non-empty
     */
    public function isSetDhcpOptions()
    {
        return count ($this->_fields['DhcpOptions']['FieldValue']) > 0;
    }




}