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
 * Amazon_EC2_Model_DhcpOptions
 * 
 * Properties:
 * <ul>
 * 
 * <li>DhcpOptionsId: string</li>
 * <li>Configuration: Amazon_EC2_Model_DhcpConfiguration</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DhcpOptions extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DhcpOptions
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DhcpOptionsId: string</li>
     * <li>Configuration: Amazon_EC2_Model_DhcpConfiguration</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DhcpOptionsId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Configuration' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_DhcpConfiguration')),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_DhcpOptions instance
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

    /**
     * Gets the value of the Configuration.
     * 
     * @return array of DhcpConfiguration Configuration
     */
    public function getConfiguration() 
    {
        return $this->_fields['Configuration']['FieldValue'];
    }

    /**
     * Sets the value of the Configuration.
     * 
     * @param mixed DhcpConfiguration or an array of DhcpConfiguration Configuration
     * @return this instance
     */
    public function setConfiguration($configuration) 
    {
        if (!$this->_isNumericArray($configuration)) {
            $configuration =  array ($configuration);    
        }
        $this->_fields['Configuration']['FieldValue'] = $configuration;
        return $this;
    }


    /**
     * Sets single or multiple values of Configuration list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withConfiguration($configuration1, $configuration2)</code>
     * 
     * @param DhcpConfiguration  $dhcpConfigurationArgs one or more Configuration
     * @return Amazon_EC2_Model_DhcpOptions  instance
     */
    public function withConfiguration($dhcpConfigurationArgs)
    {
        foreach (func_get_args() as $configuration) {
            $this->_fields['Configuration']['FieldValue'][] = $configuration;
        }
        return $this;
    }   



    /**
     * Checks if Configuration list is non-empty
     * 
     * @return bool true if Configuration list is non-empty
     */
    public function isSetConfiguration()
    {
        return count ($this->_fields['Configuration']['FieldValue']) > 0;
    }




}