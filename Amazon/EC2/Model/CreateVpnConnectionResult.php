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
 * Amazon_EC2_Model_CreateVpnConnectionResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnConnection: Amazon_EC2_Model_VpnConnection</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateVpnConnectionResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateVpnConnectionResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnConnection: Amazon_EC2_Model_VpnConnection</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnConnection' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_VpnConnection'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnConnection.
     * 
     * @return VpnConnection VpnConnection
     */
    public function getVpnConnection() 
    {
        return $this->_fields['VpnConnection']['FieldValue'];
    }

    /**
     * Sets the value of the VpnConnection.
     * 
     * @param VpnConnection VpnConnection
     * @return void
     */
    public function setVpnConnection($value) 
    {
        $this->_fields['VpnConnection']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the VpnConnection  and returns this instance
     * 
     * @param VpnConnection $value VpnConnection
     * @return Amazon_EC2_Model_CreateVpnConnectionResult instance
     */
    public function withVpnConnection($value)
    {
        $this->setVpnConnection($value);
        return $this;
    }


    /**
     * Checks if VpnConnection  is set
     * 
     * @return bool true if VpnConnection property is set
     */
    public function isSetVpnConnection()
    {
        return !is_null($this->_fields['VpnConnection']['FieldValue']);

    }




}