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
 * Amazon_EC2_Model_DescribeVpcsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpcId: string</li>
 * <li>Filter: Amazon_EC2_Model_Filter</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpcsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpcsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpcId: string</li>
     * <li>Filter: Amazon_EC2_Model_Filter</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpcId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Filter' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Filter')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpcId .
     * 
     * @return array of string VpcId
     */
    public function getVpcId() 
    {
        return $this->_fields['VpcId']['FieldValue'];
    }

    /**
     * Sets the value of the VpcId.
     * 
     * @param string or an array of string VpcId
     * @return this instance
     */
    public function setVpcId($vpcId) 
    {
        if (!$this->_isNumericArray($vpcId)) {
            $vpcId =  array ($vpcId);    
        }
        $this->_fields['VpcId']['FieldValue'] = $vpcId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of VpcId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpcId($vpcId1, $vpcId2)</code>
     * 
     * @param string  $stringArgs one or more VpcId
     * @return Amazon_EC2_Model_DescribeVpcsRequest  instance
     */
    public function withVpcId($stringArgs)
    {
        foreach (func_get_args() as $vpcId) {
            $this->_fields['VpcId']['FieldValue'][] = $vpcId;
        }
        return $this;
    }  
      

    /**
     * Checks if VpcId list is non-empty
     * 
     * @return bool true if VpcId list is non-empty
     */
    public function isSetVpcId()
    {
        return count ($this->_fields['VpcId']['FieldValue']) > 0;
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
     * @return Amazon_EC2_Model_DescribeVpcsRequest  instance
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