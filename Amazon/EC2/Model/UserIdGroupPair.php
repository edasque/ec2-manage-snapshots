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
 * Amazon_EC2_Model_UserIdGroupPair
 * 
 * Properties:
 * <ul>
 * 
 * <li>UserId: string</li>
 * <li>GroupName: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_UserIdGroupPair extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_UserIdGroupPair
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>UserId: string</li>
     * <li>GroupName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'UserId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'GroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the UserId property.
     * 
     * @return string UserId
     */
    public function getUserId() 
    {
        return $this->_fields['UserId']['FieldValue'];
    }

    /**
     * Sets the value of the UserId property.
     * 
     * @param string UserId
     * @return this instance
     */
    public function setUserId($value) 
    {
        $this->_fields['UserId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UserId and returns this instance
     * 
     * @param string $value UserId
     * @return Amazon_EC2_Model_UserIdGroupPair instance
     */
    public function withUserId($value)
    {
        $this->setUserId($value);
        return $this;
    }


    /**
     * Checks if UserId is set
     * 
     * @return bool true if UserId  is set
     */
    public function isSetUserId()
    {
        return !is_null($this->_fields['UserId']['FieldValue']);
    }

    /**
     * Gets the value of the GroupName property.
     * 
     * @return string GroupName
     */
    public function getGroupName() 
    {
        return $this->_fields['GroupName']['FieldValue'];
    }

    /**
     * Sets the value of the GroupName property.
     * 
     * @param string GroupName
     * @return this instance
     */
    public function setGroupName($value) 
    {
        $this->_fields['GroupName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the GroupName and returns this instance
     * 
     * @param string $value GroupName
     * @return Amazon_EC2_Model_UserIdGroupPair instance
     */
    public function withGroupName($value)
    {
        $this->setGroupName($value);
        return $this;
    }


    /**
     * Checks if GroupName is set
     * 
     * @return bool true if GroupName  is set
     */
    public function isSetGroupName()
    {
        return !is_null($this->_fields['GroupName']['FieldValue']);
    }




}