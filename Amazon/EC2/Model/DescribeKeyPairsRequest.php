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
 * Amazon_EC2_Model_DescribeKeyPairsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>KeyName: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeKeyPairsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeKeyPairsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>KeyName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'KeyName' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the KeyName .
     * 
     * @return array of string KeyName
     */
    public function getKeyName() 
    {
        return $this->_fields['KeyName']['FieldValue'];
    }

    /**
     * Sets the value of the KeyName.
     * 
     * @param string or an array of string KeyName
     * @return this instance
     */
    public function setKeyName($keyName) 
    {
        if (!$this->_isNumericArray($keyName)) {
            $keyName =  array ($keyName);    
        }
        $this->_fields['KeyName']['FieldValue'] = $keyName;
        return $this;
    }
  

    /**
     * Sets single or multiple values of KeyName list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withKeyName($keyName1, $keyName2)</code>
     * 
     * @param string  $stringArgs one or more KeyName
     * @return Amazon_EC2_Model_DescribeKeyPairsRequest  instance
     */
    public function withKeyName($stringArgs)
    {
        foreach (func_get_args() as $keyName) {
            $this->_fields['KeyName']['FieldValue'][] = $keyName;
        }
        return $this;
    }  
      

    /**
     * Checks if KeyName list is non-empty
     * 
     * @return bool true if KeyName list is non-empty
     */
    public function isSetKeyName()
    {
        return count ($this->_fields['KeyName']['FieldValue']) > 0;
    }




}