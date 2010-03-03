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
 * Amazon_EC2_Model_CreateDhcpOptionsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>DhcpOptions: Amazon_EC2_Model_DhcpOptions</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateDhcpOptionsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateDhcpOptionsResult
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
        'DhcpOptions' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_DhcpOptions'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DhcpOptions.
     * 
     * @return DhcpOptions DhcpOptions
     */
    public function getDhcpOptions() 
    {
        return $this->_fields['DhcpOptions']['FieldValue'];
    }

    /**
     * Sets the value of the DhcpOptions.
     * 
     * @param DhcpOptions DhcpOptions
     * @return void
     */
    public function setDhcpOptions($value) 
    {
        $this->_fields['DhcpOptions']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DhcpOptions  and returns this instance
     * 
     * @param DhcpOptions $value DhcpOptions
     * @return Amazon_EC2_Model_CreateDhcpOptionsResult instance
     */
    public function withDhcpOptions($value)
    {
        $this->setDhcpOptions($value);
        return $this;
    }


    /**
     * Checks if DhcpOptions  is set
     * 
     * @return bool true if DhcpOptions property is set
     */
    public function isSetDhcpOptions()
    {
        return !is_null($this->_fields['DhcpOptions']['FieldValue']);

    }




}