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
 * Amazon_EC2_Model_DescribeVpnConnectionsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnConnection: Amazon_EC2_Model_VpnConnection</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpnConnectionsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpnConnectionsResult
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
        'VpnConnection' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_VpnConnection')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnConnection.
     * 
     * @return array of VpnConnection VpnConnection
     */
    public function getVpnConnection() 
    {
        return $this->_fields['VpnConnection']['FieldValue'];
    }

    /**
     * Sets the value of the VpnConnection.
     * 
     * @param mixed VpnConnection or an array of VpnConnection VpnConnection
     * @return this instance
     */
    public function setVpnConnection($vpnConnection) 
    {
        if (!$this->_isNumericArray($vpnConnection)) {
            $vpnConnection =  array ($vpnConnection);    
        }
        $this->_fields['VpnConnection']['FieldValue'] = $vpnConnection;
        return $this;
    }


    /**
     * Sets single or multiple values of VpnConnection list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpnConnection($vpnConnection1, $vpnConnection2)</code>
     * 
     * @param VpnConnection  $vpnConnectionArgs one or more VpnConnection
     * @return Amazon_EC2_Model_DescribeVpnConnectionsResult  instance
     */
    public function withVpnConnection($vpnConnectionArgs)
    {
        foreach (func_get_args() as $vpnConnection) {
            $this->_fields['VpnConnection']['FieldValue'][] = $vpnConnection;
        }
        return $this;
    }   



    /**
     * Checks if VpnConnection list is non-empty
     * 
     * @return bool true if VpnConnection list is non-empty
     */
    public function isSetVpnConnection()
    {
        return count ($this->_fields['VpnConnection']['FieldValue']) > 0;
    }




}