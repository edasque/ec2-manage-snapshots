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
 * Amazon_EC2_Model_KeyPair
 * 
 * Properties:
 * <ul>
 * 
 * <li>KeyName: string</li>
 * <li>KeyFingerprint: string</li>
 * <li>KeyMaterial: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_KeyPair extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_KeyPair
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>KeyName: string</li>
     * <li>KeyFingerprint: string</li>
     * <li>KeyMaterial: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'KeyName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KeyFingerprint' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KeyMaterial' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the KeyName property.
     * 
     * @return string KeyName
     */
    public function getKeyName() 
    {
        return $this->_fields['KeyName']['FieldValue'];
    }

    /**
     * Sets the value of the KeyName property.
     * 
     * @param string KeyName
     * @return this instance
     */
    public function setKeyName($value) 
    {
        $this->_fields['KeyName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KeyName and returns this instance
     * 
     * @param string $value KeyName
     * @return Amazon_EC2_Model_KeyPair instance
     */
    public function withKeyName($value)
    {
        $this->setKeyName($value);
        return $this;
    }


    /**
     * Checks if KeyName is set
     * 
     * @return bool true if KeyName  is set
     */
    public function isSetKeyName()
    {
        return !is_null($this->_fields['KeyName']['FieldValue']);
    }

    /**
     * Gets the value of the KeyFingerprint property.
     * 
     * @return string KeyFingerprint
     */
    public function getKeyFingerprint() 
    {
        return $this->_fields['KeyFingerprint']['FieldValue'];
    }

    /**
     * Sets the value of the KeyFingerprint property.
     * 
     * @param string KeyFingerprint
     * @return this instance
     */
    public function setKeyFingerprint($value) 
    {
        $this->_fields['KeyFingerprint']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KeyFingerprint and returns this instance
     * 
     * @param string $value KeyFingerprint
     * @return Amazon_EC2_Model_KeyPair instance
     */
    public function withKeyFingerprint($value)
    {
        $this->setKeyFingerprint($value);
        return $this;
    }


    /**
     * Checks if KeyFingerprint is set
     * 
     * @return bool true if KeyFingerprint  is set
     */
    public function isSetKeyFingerprint()
    {
        return !is_null($this->_fields['KeyFingerprint']['FieldValue']);
    }

    /**
     * Gets the value of the KeyMaterial property.
     * 
     * @return string KeyMaterial
     */
    public function getKeyMaterial() 
    {
        return $this->_fields['KeyMaterial']['FieldValue'];
    }

    /**
     * Sets the value of the KeyMaterial property.
     * 
     * @param string KeyMaterial
     * @return this instance
     */
    public function setKeyMaterial($value) 
    {
        $this->_fields['KeyMaterial']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KeyMaterial and returns this instance
     * 
     * @param string $value KeyMaterial
     * @return Amazon_EC2_Model_KeyPair instance
     */
    public function withKeyMaterial($value)
    {
        $this->setKeyMaterial($value);
        return $this;
    }


    /**
     * Checks if KeyMaterial is set
     * 
     * @return bool true if KeyMaterial  is set
     */
    public function isSetKeyMaterial()
    {
        return !is_null($this->_fields['KeyMaterial']['FieldValue']);
    }




}