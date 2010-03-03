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
 * Amazon_EC2_Model_DescribeVpnConnectionsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnConnectionId: string</li>
 * <li>Filter: Amazon_EC2_Model_Filter</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpnConnectionsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpnConnectionsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnConnectionId: string</li>
     * <li>Filter: Amazon_EC2_Model_Filter</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnConnectionId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Filter' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Filter')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnConnectionId .
     * 
     * @return array of string VpnConnectionId
     */
    public function getVpnConnectionId() 
    {
        return $this->_fields['VpnConnectionId']['FieldValue'];
    }

    /**
     * Sets the value of the VpnConnectionId.
     * 
     * @param string or an array of string VpnConnectionId
     * @return this instance
     */
    public function setVpnConnectionId($vpnConnectionId) 
    {
        if (!$this->_isNumericArray($vpnConnectionId)) {
            $vpnConnectionId =  array ($vpnConnectionId);    
        }
        $this->_fields['VpnConnectionId']['FieldValue'] = $vpnConnectionId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of VpnConnectionId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpnConnectionId($vpnConnectionId1, $vpnConnectionId2)</code>
     * 
     * @param string  $stringArgs one or more VpnConnectionId
     * @return Amazon_EC2_Model_DescribeVpnConnectionsRequest  instance
     */
    public function withVpnConnectionId($stringArgs)
    {
        foreach (func_get_args() as $vpnConnectionId) {
            $this->_fields['VpnConnectionId']['FieldValue'][] = $vpnConnectionId;
        }
        return $this;
    }  
      

    /**
     * Checks if VpnConnectionId list is non-empty
     * 
     * @return bool true if VpnConnectionId list is non-empty
     */
    public function isSetVpnConnectionId()
    {
        return count ($this->_fields['VpnConnectionId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Filter.
     * 
     * @return array of Filter Filter
     */
    public function getFilter() 
    {
        return $this->_fields['Filter']['FieldValue'];
    }

    /**
     * Sets the value of the Filter.
     * 
     * @param mixed Filter or an array of Filter Filter
     * @return this instance
     */
    public function setFilter($filter) 
    {
        if (!$this->_isNumericArray($filter)) {
            $filter =  array ($filter);    
        }
        $this->_fields['Filter']['FieldValue'] = $filter;
        return $this;
    }


    /**
     * Sets single or multiple values of Filter list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withFilter($filter1, $filter2)</code>
     * 
     * @param Filter  $filterArgs one or more Filter
     * @return Amazon_EC2_Model_DescribeVpnConnectionsRequest  instance
     */
    public function withFilter($filterArgs)
    {
        foreach (func_get_args() as $filter) {
            $this->_fields['Filter']['FieldValue'][] = $filter;
        }
        return $this;
    }   



    /**
     * Checks if Filter list is non-empty
     * 
     * @return bool true if Filter list is non-empty
     */
    public function isSetFilter()
    {
        return count ($this->_fields['Filter']['FieldValue']) > 0;
    }




}