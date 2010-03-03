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
 * Amazon_EC2_Model_CreateKeyPairResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>KeyPair: Amazon_EC2_Model_KeyPair</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateKeyPairResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateKeyPairResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>KeyPair: Amazon_EC2_Model_KeyPair</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'KeyPair' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_KeyPair'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the KeyPair.
     * 
     * @return KeyPair KeyPair
     */
    public function getKeyPair() 
    {
        return $this->_fields['KeyPair']['FieldValue'];
    }

    /**
     * Sets the value of the KeyPair.
     * 
     * @param KeyPair KeyPair
     * @return void
     */
    public function setKeyPair($value) 
    {
        $this->_fields['KeyPair']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the KeyPair  and returns this instance
     * 
     * @param KeyPair $value KeyPair
     * @return Amazon_EC2_Model_CreateKeyPairResult instance
     */
    public function withKeyPair($value)
    {
        $this->setKeyPair($value);
        return $this;
    }


    /**
     * Checks if KeyPair  is set
     * 
     * @return bool true if KeyPair property is set
     */
    public function isSetKeyPair()
    {
        return !is_null($this->_fields['KeyPair']['FieldValue']);

    }




}