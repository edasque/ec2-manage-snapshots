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
 * Amazon_EC2_Model_CreateVpnGatewayResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnGateway: Amazon_EC2_Model_VpnGateway</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateVpnGatewayResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateVpnGatewayResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnGateway: Amazon_EC2_Model_VpnGateway</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnGateway' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_VpnGateway'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnGateway.
     * 
     * @return VpnGateway VpnGateway
     */
    public function getVpnGateway() 
    {
        return $this->_fields['VpnGateway']['FieldValue'];
    }

    /**
     * Sets the value of the VpnGateway.
     * 
     * @param VpnGateway VpnGateway
     * @return void
     */
    public function setVpnGateway($value) 
    {
        $this->_fields['VpnGateway']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the VpnGateway  and returns this instance
     * 
     * @param VpnGateway $value VpnGateway
     * @return Amazon_EC2_Model_CreateVpnGatewayResult instance
     */
    public function withVpnGateway($value)
    {
        $this->setVpnGateway($value);
        return $this;
    }


    /**
     * Checks if VpnGateway  is set
     * 
     * @return bool true if VpnGateway property is set
     */
    public function isSetVpnGateway()
    {
        return !is_null($this->_fields['VpnGateway']['FieldValue']);

    }




}