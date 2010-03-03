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
 * Amazon_EC2_Model_SecurityGroup
 * 
 * Properties:
 * <ul>
 * 
 * <li>OwnerId: string</li>
 * <li>GroupName: string</li>
 * <li>GroupDescription: string</li>
 * <li>IpPermission: Amazon_EC2_Model_IpPermission</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_SecurityGroup extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_SecurityGroup
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>OwnerId: string</li>
     * <li>GroupName: string</li>
     * <li>GroupDescription: string</li>
     * <li>IpPermission: Amazon_EC2_Model_IpPermission</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'OwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'GroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'GroupDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        'IpPermission' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_IpPermission')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the OwnerId property.
     * 
     * @return string OwnerId
     */
    public function getOwnerId() 
    {
        return $this->_fields['OwnerId']['FieldValue'];
    }

    /**
     * Sets the value of the OwnerId property.
     * 
     * @param string OwnerId
     * @return this instance
     */
    public function setOwnerId($value) 
    {
        $this->_fields['OwnerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the OwnerId and returns this instance
     * 
     * @param string $value OwnerId
     * @return Amazon_EC2_Model_SecurityGroup instance
     */
    public function withOwnerId($value)
    {
        $this->setOwnerId($value);
        return $this;
    }


    /**
     * Checks if OwnerId is set
     * 
     * @return bool true if OwnerId  is set
     */
    public function isSetOwnerId()
    {
        return !is_null($this->_fields['OwnerId']['FieldValue']);
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
     * @return Amazon_EC2_Model_SecurityGroup instance
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
     * @return Amazon_EC2_Model_SecurityGroup instance
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

    /**
     * Gets the value of the IpPermission.
     * 
     * @return array of IpPermission IpPermission
     */
    public function getIpPermission() 
    {
        return $this->_fields['IpPermission']['FieldValue'];
    }

    /**
     * Sets the value of the IpPermission.
     * 
     * @param mixed IpPermission or an array of IpPermission IpPermission
     * @return this instance
     */
    public function setIpPermission($ipPermission) 
    {
        if (!$this->_isNumericArray($ipPermission)) {
            $ipPermission =  array ($ipPermission);    
        }
        $this->_fields['IpPermission']['FieldValue'] = $ipPermission;
        return $this;
    }


    /**
     * Sets single or multiple values of IpPermission list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withIpPermission($ipPermission1, $ipPermission2)</code>
     * 
     * @param IpPermission  $ipPermissionArgs one or more IpPermission
     * @return Amazon_EC2_Model_SecurityGroup  instance
     */
    public function withIpPermission($ipPermissionArgs)
    {
        foreach (func_get_args() as $ipPermission) {
            $this->_fields['IpPermission']['FieldValue'][] = $ipPermission;
        }
        return $this;
    }   



    /**
     * Checks if IpPermission list is non-empty
     * 
     * @return bool true if IpPermission list is non-empty
     */
    public function isSetIpPermission()
    {
        return count ($this->_fields['IpPermission']['FieldValue']) > 0;
    }




}