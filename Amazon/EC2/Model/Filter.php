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
 * Amazon_EC2_Model_Filter
 * 
 * Properties:
 * <ul>
 * 
 * <li>Name: string</li>
 * <li>Value: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Filter extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Filter
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Name: string</li>
     * <li>Value: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Value' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Name property.
     * 
     * @return string Name
     */
    public function getName() 
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Sets the value of the Name property.
     * 
     * @param string Name
     * @return this instance
     */
    public function setName($value) 
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Name and returns this instance
     * 
     * @param string $value Name
     * @return Amazon_EC2_Model_Filter instance
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }


    /**
     * Checks if Name is set
     * 
     * @return bool true if Name  is set
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
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
     * @return Amazon_EC2_Model_Filter  instance
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