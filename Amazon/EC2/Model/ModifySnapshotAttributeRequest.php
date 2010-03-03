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
 * Amazon_EC2_Model_ModifySnapshotAttributeRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotId: string</li>
 * <li>Attribute: string</li>
 * <li>OperationType: string</li>
 * <li>UserId: string</li>
 * <li>UserGroup: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ModifySnapshotAttributeRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ModifySnapshotAttributeRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotId: string</li>
     * <li>Attribute: string</li>
     * <li>OperationType: string</li>
     * <li>UserId: string</li>
     * <li>UserGroup: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Attribute' => array('FieldValue' => null, 'FieldType' => 'string'),
        'OperationType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UserId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'UserGroup' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SnapshotId property.
     * 
     * @return string SnapshotId
     */
    public function getSnapshotId() 
    {
        return $this->_fields['SnapshotId']['FieldValue'];
    }

    /**
     * Sets the value of the SnapshotId property.
     * 
     * @param string SnapshotId
     * @return this instance
     */
    public function setSnapshotId($value) 
    {
        $this->_fields['SnapshotId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SnapshotId and returns this instance
     * 
     * @param string $value SnapshotId
     * @return Amazon_EC2_Model_ModifySnapshotAttributeRequest instance
     */
    public function withSnapshotId($value)
    {
        $this->setSnapshotId($value);
        return $this;
    }


    /**
     * Checks if SnapshotId is set
     * 
     * @return bool true if SnapshotId  is set
     */
    public function isSetSnapshotId()
    {
        return !is_null($this->_fields['SnapshotId']['FieldValue']);
    }

    /**
     * Gets the value of the Attribute property.
     * 
     * @return string Attribute
     */
    public function getAttribute() 
    {
        return $this->_fields['Attribute']['FieldValue'];
    }

    /**
     * Sets the value of the Attribute property.
     * 
     * @param string Attribute
     * @return this instance
     */
    public function setAttribute($value) 
    {
        $this->_fields['Attribute']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Attribute and returns this instance
     * 
     * @param string $value Attribute
     * @return Amazon_EC2_Model_ModifySnapshotAttributeRequest instance
     */
    public function withAttribute($value)
    {
        $this->setAttribute($value);
        return $this;
    }


    /**
     * Checks if Attribute is set
     * 
     * @return bool true if Attribute  is set
     */
    public function isSetAttribute()
    {
        return !is_null($this->_fields['Attribute']['FieldValue']);
    }

    /**
     * Gets the value of the OperationType property.
     * 
     * @return string OperationType
     */
    public function getOperationType() 
    {
        return $this->_fields['OperationType']['FieldValue'];
    }

    /**
     * Sets the value of the OperationType property.
     * 
     * @param string OperationType
     * @return this instance
     */
    public function setOperationType($value) 
    {
        $this->_fields['OperationType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the OperationType and returns this instance
     * 
     * @param string $value OperationType
     * @return Amazon_EC2_Model_ModifySnapshotAttributeRequest instance
     */
    public function withOperationType($value)
    {
        $this->setOperationType($value);
        return $this;
    }


    /**
     * Checks if OperationType is set
     * 
     * @return bool true if OperationType  is set
     */
    public function isSetOperationType()
    {
        return !is_null($this->_fields['OperationType']['FieldValue']);
    }

    /**
     * Gets the value of the UserId .
     * 
     * @return array of string UserId
     */
    public function getUserId() 
    {
        return $this->_fields['UserId']['FieldValue'];
    }

    /**
     * Sets the value of the UserId.
     * 
     * @param string or an array of string UserId
     * @return this instance
     */
    public function setUserId($userId) 
    {
        if (!$this->_isNumericArray($userId)) {
            $userId =  array ($userId);    
        }
        $this->_fields['UserId']['FieldValue'] = $userId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of UserId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withUserId($userId1, $userId2)</code>
     * 
     * @param string  $stringArgs one or more UserId
     * @return Amazon_EC2_Model_ModifySnapshotAttributeRequest  instance
     */
    public function withUserId($stringArgs)
    {
        foreach (func_get_args() as $userId) {
            $this->_fields['UserId']['FieldValue'][] = $userId;
        }
        return $this;
    }  
      

    /**
     * Checks if UserId list is non-empty
     * 
     * @return bool true if UserId list is non-empty
     */
    public function isSetUserId()
    {
        return count ($this->_fields['UserId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the UserGroup .
     * 
     * @return array of string UserGroup
     */
    public function getUserGroup() 
    {
        return $this->_fields['UserGroup']['FieldValue'];
    }

    /**
     * Sets the value of the UserGroup.
     * 
     * @param string or an array of string UserGroup
     * @return this instance
     */
    public function setUserGroup($userGroup) 
    {
        if (!$this->_isNumericArray($userGroup)) {
            $userGroup =  array ($userGroup);    
        }
        $this->_fields['UserGroup']['FieldValue'] = $userGroup;
        return $this;
    }
  

    /**
     * Sets single or multiple values of UserGroup list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withUserGroup($userGroup1, $userGroup2)</code>
     * 
     * @param string  $stringArgs one or more UserGroup
     * @return Amazon_EC2_Model_ModifySnapshotAttributeRequest  instance
     */
    public function withUserGroup($stringArgs)
    {
        foreach (func_get_args() as $userGroup) {
            $this->_fields['UserGroup']['FieldValue'][] = $userGroup;
        }
        return $this;
    }  
      

    /**
     * Checks if UserGroup list is non-empty
     * 
     * @return bool true if UserGroup list is non-empty
     */
    public function isSetUserGroup()
    {
        return count ($this->_fields['UserGroup']['FieldValue']) > 0;
    }




}