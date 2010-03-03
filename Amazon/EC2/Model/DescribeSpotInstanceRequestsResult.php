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
 * Amazon_EC2_Model_DescribeSpotInstanceRequestsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotInstanceRequest: Amazon_EC2_Model_SpotInstanceRequest</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSpotInstanceRequestsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSpotInstanceRequestsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotInstanceRequest: Amazon_EC2_Model_SpotInstanceRequest</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotInstanceRequest' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_SpotInstanceRequest')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SpotInstanceRequest.
     * 
     * @return array of SpotInstanceRequest SpotInstanceRequest
     */
    public function getSpotInstanceRequest() 
    {
        return $this->_fields['SpotInstanceRequest']['FieldValue'];
    }

    /**
     * Sets the value of the SpotInstanceRequest.
     * 
     * @param mixed SpotInstanceRequest or an array of SpotInstanceRequest SpotInstanceRequest
     * @return this instance
     */
    public function setSpotInstanceRequest($spotInstanceRequest) 
    {
        if (!$this->_isNumericArray($spotInstanceRequest)) {
            $spotInstanceRequest =  array ($spotInstanceRequest);    
        }
        $this->_fields['SpotInstanceRequest']['FieldValue'] = $spotInstanceRequest;
        return $this;
    }


    /**
     * Sets single or multiple values of SpotInstanceRequest list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSpotInstanceRequest($spotInstanceRequest1, $spotInstanceRequest2)</code>
     * 
     * @param SpotInstanceRequest  $spotInstanceRequestArgs one or more SpotInstanceRequest
     * @return Amazon_EC2_Model_DescribeSpotInstanceRequestsResult  instance
     */
    public function withSpotInstanceRequest($spotInstanceRequestArgs)
    {
        foreach (func_get_args() as $spotInstanceRequest) {
            $this->_fields['SpotInstanceRequest']['FieldValue'][] = $spotInstanceRequest;
        }
        return $this;
    }   



    /**
     * Checks if SpotInstanceRequest list is non-empty
     * 
     * @return bool true if SpotInstanceRequest list is non-empty
     */
    public function isSetSpotInstanceRequest()
    {
        return count ($this->_fields['SpotInstanceRequest']['FieldValue']) > 0;
    }




}