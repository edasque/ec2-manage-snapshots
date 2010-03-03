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
 * Amazon_EC2_Model_DescribeRegionsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Region: Amazon_EC2_Model_Region</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeRegionsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeRegionsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Region: Amazon_EC2_Model_Region</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Region' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Region')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Region.
     * 
     * @return array of Region Region
     */
    public function getRegion() 
    {
        return $this->_fields['Region']['FieldValue'];
    }

    /**
     * Sets the value of the Region.
     * 
     * @param mixed Region or an array of Region Region
     * @return this instance
     */
    public function setRegion($region) 
    {
        if (!$this->_isNumericArray($region)) {
            $region =  array ($region);    
        }
        $this->_fields['Region']['FieldValue'] = $region;
        return $this;
    }


    /**
     * Sets single or multiple values of Region list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withRegion($region1, $region2)</code>
     * 
     * @param Region  $regionArgs one or more Region
     * @return Amazon_EC2_Model_DescribeRegionsResult  instance
     */
    public function withRegion($regionArgs)
    {
        foreach (func_get_args() as $region) {
            $this->_fields['Region']['FieldValue'][] = $region;
        }
        return $this;
    }   



    /**
     * Checks if Region list is non-empty
     * 
     * @return bool true if Region list is non-empty
     */
    public function isSetRegion()
    {
        return count ($this->_fields['Region']['FieldValue']) > 0;
    }




}