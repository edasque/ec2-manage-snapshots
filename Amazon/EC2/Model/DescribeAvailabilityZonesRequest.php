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
 * Amazon_EC2_Model_DescribeAvailabilityZonesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ZoneName: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeAvailabilityZonesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeAvailabilityZonesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ZoneName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ZoneName' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ZoneName .
     * 
     * @return array of string ZoneName
     */
    public function getZoneName() 
    {
        return $this->_fields['ZoneName']['FieldValue'];
    }

    /**
     * Sets the value of the ZoneName.
     * 
     * @param string or an array of string ZoneName
     * @return this instance
     */
    public function setZoneName($zoneName) 
    {
        if (!$this->_isNumericArray($zoneName)) {
            $zoneName =  array ($zoneName);    
        }
        $this->_fields['ZoneName']['FieldValue'] = $zoneName;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ZoneName list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withZoneName($zoneName1, $zoneName2)</code>
     * 
     * @param string  $stringArgs one or more ZoneName
     * @return Amazon_EC2_Model_DescribeAvailabilityZonesRequest  instance
     */
    public function withZoneName($stringArgs)
    {
        foreach (func_get_args() as $zoneName) {
            $this->_fields['ZoneName']['FieldValue'][] = $zoneName;
        }
        return $this;
    }  
      

    /**
     * Checks if ZoneName list is non-empty
     * 
     * @return bool true if ZoneName list is non-empty
     */
    public function isSetZoneName()
    {
        return count ($this->_fields['ZoneName']['FieldValue']) > 0;
    }




}