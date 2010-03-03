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
 * Amazon_EC2_Model_DescribeVpnGatewaysRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnGatewayId: string</li>
 * <li>Filter: Amazon_EC2_Model_Filter</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpnGatewaysRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpnGatewaysRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnGatewayId: string</li>
     * <li>Filter: Amazon_EC2_Model_Filter</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnGatewayId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Filter' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Filter')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnGatewayId .
     * 
     * @return array of string VpnGatewayId
     */
    public function getVpnGatewayId() 
    {
        return $this->_fields['VpnGatewayId']['FieldValue'];
    }

    /**
     * Sets the value of the VpnGatewayId.
     * 
     * @param string or an array of string VpnGatewayId
     * @return this instance
     */
    public function setVpnGatewayId($vpnGatewayId) 
    {
        if (!$this->_isNumericArray($vpnGatewayId)) {
            $vpnGatewayId =  array ($vpnGatewayId);    
        }
        $this->_fields['VpnGatewayId']['FieldValue'] = $vpnGatewayId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of VpnGatewayId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpnGatewayId($vpnGatewayId1, $vpnGatewayId2)</code>
     * 
     * @param string  $stringArgs one or more VpnGatewayId
     * @return Amazon_EC2_Model_DescribeVpnGatewaysRequest  instance
     */
    public function withVpnGatewayId($stringArgs)
    {
        foreach (func_get_args() as $vpnGatewayId) {
            $this->_fields['VpnGatewayId']['FieldValue'][] = $vpnGatewayId;
        }
        return $this;
    }  
      

    /**
     * Checks if VpnGatewayId list is non-empty
     * 
     * @return bool true if VpnGatewayId list is non-empty
     */
    public function isSetVpnGatewayId()
    {
        return count ($this->_fields['VpnGatewayId']['FieldValue']) > 0;
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
     * @return Amazon_EC2_Model_DescribeVpnGatewaysRequest  instance
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