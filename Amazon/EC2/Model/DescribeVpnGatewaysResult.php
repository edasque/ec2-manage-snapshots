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
 * Amazon_EC2_Model_DescribeVpnGatewaysResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnGateway: Amazon_EC2_Model_VpnGateway</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpnGatewaysResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpnGatewaysResult
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
        'VpnGateway' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_VpnGateway')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnGateway.
     * 
     * @return array of VpnGateway VpnGateway
     */
    public function getVpnGateway() 
    {
        return $this->_fields['VpnGateway']['FieldValue'];
    }

    /**
     * Sets the value of the VpnGateway.
     * 
     * @param mixed VpnGateway or an array of VpnGateway VpnGateway
     * @return this instance
     */
    public function setVpnGateway($vpnGateway) 
    {
        if (!$this->_isNumericArray($vpnGateway)) {
            $vpnGateway =  array ($vpnGateway);    
        }
        $this->_fields['VpnGateway']['FieldValue'] = $vpnGateway;
        return $this;
    }


    /**
     * Sets single or multiple values of VpnGateway list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpnGateway($vpnGateway1, $vpnGateway2)</code>
     * 
     * @param VpnGateway  $vpnGatewayArgs one or more VpnGateway
     * @return Amazon_EC2_Model_DescribeVpnGatewaysResult  instance
     */
    public function withVpnGateway($vpnGatewayArgs)
    {
        foreach (func_get_args() as $vpnGateway) {
            $this->_fields['VpnGateway']['FieldValue'][] = $vpnGateway;
        }
        return $this;
    }   



    /**
     * Checks if VpnGateway list is non-empty
     * 
     * @return bool true if VpnGateway list is non-empty
     */
    public function isSetVpnGateway()
    {
        return count ($this->_fields['VpnGateway']['FieldValue']) > 0;
    }




}