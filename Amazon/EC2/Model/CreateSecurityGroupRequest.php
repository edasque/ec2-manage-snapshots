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
 * Amazon_EC2_Model_CreateSecurityGroupRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>GroupName: string</li>
 * <li>GroupDescription: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateSecurityGroupRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateSecurityGroupRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GroupName: string</li>
     * <li>GroupDescription: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'GroupDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_CreateSecurityGroupRequest instance
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

    /**
     * Gets the value of the GroupDescription property.
     * 
     * @return string GroupDescription
     */
    public function getGroupDescription() 
    {
        return $this->_fields['GroupDescription']['FieldValue'];
    }

    /**
     * Sets the value of the GroupDescription property.
     * 
     * @param string GroupDescription
     * @return this instance
     */
    public function setGroupDescription($value) 
    {
        $this->_fields['GroupDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the GroupDescription and returns this instance
     * 
     * @param string $value GroupDescription
     * @return Amazon_EC2_Model_CreateSecurityGroupRequest instance
     */
    public function withGroupDescription($value)
    {
        $this->setGroupDescription($value);
        return $this;
    }


    /**
     * Checks if GroupDescription is set
     * 
     * @return bool true if GroupDescription  is set
     */
    public function isSetGroupDescription()
    {
        return !is_null($this->_fields['GroupDescription']['FieldValue']);
    }




}