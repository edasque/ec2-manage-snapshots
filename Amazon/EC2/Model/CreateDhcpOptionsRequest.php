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
 * Amazon_EC2_Model_CreateDhcpOptionsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>DhcpConfiguration: Amazon_EC2_Model_DhcpConfiguration</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateDhcpOptionsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateDhcpOptionsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DhcpConfiguration: Amazon_EC2_Model_DhcpConfiguration</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DhcpConfiguration' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_DhcpConfiguration')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DhcpConfiguration.
     * 
     * @return array of DhcpConfiguration DhcpConfiguration
     */
    public function getDhcpConfiguration() 
    {
        return $this->_fields['DhcpConfiguration']['FieldValue'];
    }

    /**
     * Sets the value of the DhcpConfiguration.
     * 
     * @param mixed DhcpConfiguration or an array of DhcpConfiguration DhcpConfiguration
     * @return this instance
     */
    public function setDhcpConfiguration($dhcpConfiguration) 
    {
        if (!$this->_isNumericArray($dhcpConfiguration)) {
            $dhcpConfiguration =  array ($dhcpConfiguration);    
        }
        $this->_fields['DhcpConfiguration']['FieldValue'] = $dhcpConfiguration;
        return $this;
    }


    /**
     * Sets single or multiple values of DhcpConfiguration list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withDhcpConfiguration($dhcpConfiguration1, $dhcpConfiguration2)</code>
     * 
     * @param DhcpConfiguration  $dhcpConfigurationArgs one or more DhcpConfiguration
     * @return Amazon_EC2_Model_CreateDhcpOptionsRequest  instance
     */
    public function withDhcpConfiguration($dhcpConfigurationArgs)
    {
        foreach (func_get_args() as $dhcpConfiguration) {
            $this->_fields['DhcpConfiguration']['FieldValue'][] = $dhcpConfiguration;
        }
        return $this;
    }   



    /**
     * Checks if DhcpConfiguration list is non-empty
     * 
     * @return bool true if DhcpConfiguration list is non-empty
     */
    public function isSetDhcpConfiguration()
    {
        return count ($this->_fields['DhcpConfiguration']['FieldValue']) > 0;
    }




}