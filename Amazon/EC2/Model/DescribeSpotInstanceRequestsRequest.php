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
 * Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotInstanceRequestId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotInstanceRequestId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotInstanceRequestId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SpotInstanceRequestId .
     * 
     * @return array of string SpotInstanceRequestId
     */
    public function getSpotInstanceRequestId() 
    {
        return $this->_fields['SpotInstanceRequestId']['FieldValue'];
    }

    /**
     * Sets the value of the SpotInstanceRequestId.
     * 
     * @param string or an array of string SpotInstanceRequestId
     * @return this instance
     */
    public function setSpotInstanceRequestId($spotInstanceRequestId) 
    {
        if (!$this->_isNumericArray($spotInstanceRequestId)) {
            $spotInstanceRequestId =  array ($spotInstanceRequestId);    
        }
        $this->_fields['SpotInstanceRequestId']['FieldValue'] = $spotInstanceRequestId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of SpotInstanceRequestId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSpotInstanceRequestId($spotInstanceRequestId1, $spotInstanceRequestId2)</code>
     * 
     * @param string  $stringArgs one or more SpotInstanceRequestId
     * @return Amazon_EC2_Model_DescribeSpotInstanceRequestsRequest  instance
     */
    public function withSpotInstanceRequestId($stringArgs)
    {
        foreach (func_get_args() as $spotInstanceRequestId) {
            $this->_fields['SpotInstanceRequestId']['FieldValue'][] = $spotInstanceRequestId;
        }
        return $this;
    }  
      

    /**
     * Checks if SpotInstanceRequestId list is non-empty
     * 
     * @return bool true if SpotInstanceRequestId list is non-empty
     */
    public function isSetSpotInstanceRequestId()
    {
        return count ($this->_fields['SpotInstanceRequestId']['FieldValue']) > 0;
    }




}