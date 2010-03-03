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
 * Amazon_EC2_Model_DescribeRegionsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>RegionName: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeRegionsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeRegionsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>RegionName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'RegionName' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the RegionName .
     * 
     * @return array of string RegionName
     */
    public function getRegionName() 
    {
        return $this->_fields['RegionName']['FieldValue'];
    }

    /**
     * Sets the value of the RegionName.
     * 
     * @param string or an array of string RegionName
     * @return this instance
     */
    public function setRegionName($regionName) 
    {
        if (!$this->_isNumericArray($regionName)) {
            $regionName =  array ($regionName);    
        }
        $this->_fields['RegionName']['FieldValue'] = $regionName;
        return $this;
    }
  

    /**
     * Sets single or multiple values of RegionName list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withRegionName($regionName1, $regionName2)</code>
     * 
     * @param string  $stringArgs one or more RegionName
     * @return Amazon_EC2_Model_DescribeRegionsRequest  instance
     */
    public function withRegionName($stringArgs)
    {
        foreach (func_get_args() as $regionName) {
            $this->_fields['RegionName']['FieldValue'][] = $regionName;
        }
        return $this;
    }  
      

    /**
     * Checks if RegionName list is non-empty
     * 
     * @return bool true if RegionName list is non-empty
     */
    public function isSetRegionName()
    {
        return count ($this->_fields['RegionName']['FieldValue']) > 0;
    }




}