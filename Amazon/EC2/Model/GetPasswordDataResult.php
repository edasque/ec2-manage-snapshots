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
 * Amazon_EC2_Model_GetPasswordDataResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>PasswordData: Amazon_EC2_Model_PasswordData</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_GetPasswordDataResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_GetPasswordDataResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PasswordData: Amazon_EC2_Model_PasswordData</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PasswordData' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_PasswordData'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the PasswordData.
     * 
     * @return PasswordData PasswordData
     */
    public function getPasswordData() 
    {
        return $this->_fields['PasswordData']['FieldValue'];
    }

    /**
     * Sets the value of the PasswordData.
     * 
     * @param PasswordData PasswordData
     * @return void
     */
    public function setPasswordData($value) 
    {
        $this->_fields['PasswordData']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the PasswordData  and returns this instance
     * 
     * @param PasswordData $value PasswordData
     * @return Amazon_EC2_Model_GetPasswordDataResult instance
     */
    public function withPasswordData($value)
    {
        $this->setPasswordData($value);
        return $this;
    }


    /**
     * Checks if PasswordData  is set
     * 
     * @return bool true if PasswordData property is set
     */
    public function isSetPasswordData()
    {
        return !is_null($this->_fields['PasswordData']['FieldValue']);

    }




}