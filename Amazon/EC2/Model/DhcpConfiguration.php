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
 * Amazon_EC2_Model_DhcpConfiguration
 * 
 * Properties:
 * <ul>
 * 
 * <li>Key: string</li>
 * <li>Value: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DhcpConfiguration extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DhcpConfiguration
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Key: string</li>
     * <li>Value: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Key' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Value' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Key property.
     * 
     * @return string Key
     */
    public function getKey() 
    {
        return $this->_fields['Key']['FieldValue'];
    }

    /**
     * Sets the value of the Key property.
     * 
     * @param string Key
     * @return this instance
     */
    public function setKey($value) 
    {
        $this->_fields['Key']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Key and returns this instance
     * 
     * @param string $value Key
     * @return Amazon_EC2_Model_DhcpConfiguration instance
     */
    public function withKey($value)
    {
        $this->setKey($value);
        return $this;
    }


    /**
     * Checks if Key is set
     * 
     * @return bool true if Key  is set
     */
    public function isSetKey()
    {
        return !is_null($this->_fields['Key']['FieldValue']);
    }

    /**
     * Gets the value of the Value .
     * 
     * @return array of string Value
     */
    public function getValue() 
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Sets the value of the Value.
     * 
     * @param string or an array of string Value
     * @return this instance
     */
    public function setValue($value) 
    {
        if (!$this->_isNumericArray($value)) {
            $value =  array ($value);    
        }
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }
  

    /**
     * Sets single or multiple values of Value list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withValue($value1, $value2)</code>
     * 
     * @param string  $stringArgs one or more Value
     * @return Amazon_EC2_Model_DhcpConfiguration  instance
     */
    public function withValue($stringArgs)
    {
        foreach (func_get_args() as $value) {
            $this->_fields['Value']['FieldValue'][] = $value;
        }
        return $this;
    }  
      

    /**
     * Checks if Value list is non-empty
     * 
     * @return bool true if Value list is non-empty
     */
    public function isSetValue()
    {
        return count ($this->_fields['Value']['FieldValue']) > 0;
    }




}