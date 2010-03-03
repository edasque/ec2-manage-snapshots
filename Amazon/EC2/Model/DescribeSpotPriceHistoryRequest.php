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
 * Amazon_EC2_Model_DescribeSpotPriceHistoryRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>StartTime: string</li>
 * <li>EndTime: string</li>
 * <li>InstanceType: string</li>
 * <li>ProductDescription: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSpotPriceHistoryRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSpotPriceHistoryRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>StartTime: string</li>
     * <li>EndTime: string</li>
     * <li>InstanceType: string</li>
     * <li>ProductDescription: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'StartTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'EndTime' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceType' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'ProductDescription' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the StartTime property.
     * 
     * @return string StartTime
     */
    public function getStartTime() 
    {
        return $this->_fields['StartTime']['FieldValue'];
    }

    /**
     * Sets the value of the StartTime property.
     * 
     * @param string StartTime
     * @return this instance
     */
    public function setStartTime($value) 
    {
        $this->_fields['StartTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the StartTime and returns this instance
     * 
     * @param string $value StartTime
     * @return Amazon_EC2_Model_DescribeSpotPriceHistoryRequest instance
     */
    public function withStartTime($value)
    {
        $this->setStartTime($value);
        return $this;
    }


    /**
     * Checks if StartTime is set
     * 
     * @return bool true if StartTime  is set
     */
    public function isSetStartTime()
    {
        return !is_null($this->_fields['StartTime']['FieldValue']);
    }

    /**
     * Gets the value of the EndTime property.
     * 
     * @return string EndTime
     */
    public function getEndTime() 
    {
        return $this->_fields['EndTime']['FieldValue'];
    }

    /**
     * Sets the value of the EndTime property.
     * 
     * @param string EndTime
     * @return this instance
     */
    public function setEndTime($value) 
    {
        $this->_fields['EndTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the EndTime and returns this instance
     * 
     * @param string $value EndTime
     * @return Amazon_EC2_Model_DescribeSpotPriceHistoryRequest instance
     */
    public function withEndTime($value)
    {
        $this->setEndTime($value);
        return $this;
    }


    /**
     * Checks if EndTime is set
     * 
     * @return bool true if EndTime  is set
     */
    public function isSetEndTime()
    {
        return !is_null($this->_fields['EndTime']['FieldValue']);
    }

    /**
     * Gets the value of the InstanceType .
     * 
     * @return array of string InstanceType
     */
    public function getInstanceType() 
    {
        return $this->_fields['InstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceType.
     * 
     * @param string or an array of string InstanceType
     * @return this instance
     */
    public function setInstanceType($instanceType) 
    {
        if (!$this->_isNumericArray($instanceType)) {
            $instanceType =  array ($instanceType);    
        }
        $this->_fields['InstanceType']['FieldValue'] = $instanceType;
        return $this;
    }
  

    /**
     * Sets single or multiple values of InstanceType list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withInstanceType($instanceType1, $instanceType2)</code>
     * 
     * @param string  $stringArgs one or more InstanceType
     * @return Amazon_EC2_Model_DescribeSpotPriceHistoryRequest  instance
     */
    public function withInstanceType($stringArgs)
    {
        foreach (func_get_args() as $instanceType) {
            $this->_fields['InstanceType']['FieldValue'][] = $instanceType;
        }
        return $this;
    }  
      

    /**
     * Checks if InstanceType list is non-empty
     * 
     * @return bool true if InstanceType list is non-empty
     */
    public function isSetInstanceType()
    {
        return count ($this->_fields['InstanceType']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the ProductDescription .
     * 
     * @return array of string ProductDescription
     */
    public function getProductDescription() 
    {
        return $this->_fields['ProductDescription']['FieldValue'];
    }

    /**
     * Sets the value of the ProductDescription.
     * 
     * @param string or an array of string ProductDescription
     * @return this instance
     */
    public function setProductDescription($productDescription) 
    {
        if (!$this->_isNumericArray($productDescription)) {
            $productDescription =  array ($productDescription);    
        }
        $this->_fields['ProductDescription']['FieldValue'] = $productDescription;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ProductDescription list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withProductDescription($productDescription1, $productDescription2)</code>
     * 
     * @param string  $stringArgs one or more ProductDescription
     * @return Amazon_EC2_Model_DescribeSpotPriceHistoryRequest  instance
     */
    public function withProductDescription($stringArgs)
    {
        foreach (func_get_args() as $productDescription) {
            $this->_fields['ProductDescription']['FieldValue'][] = $productDescription;
        }
        return $this;
    }  
      

    /**
     * Checks if ProductDescription list is non-empty
     * 
     * @return bool true if ProductDescription list is non-empty
     */
    public function isSetProductDescription()
    {
        return count ($this->_fields['ProductDescription']['FieldValue']) > 0;
    }




}