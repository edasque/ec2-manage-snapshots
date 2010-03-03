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
 * Amazon_EC2_Model_ModifyImageAttributeRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageId: string</li>
 * <li>Attribute: string</li>
 * <li>OperationType: string</li>
 * <li>UserId: string</li>
 * <li>UserGroup: string</li>
 * <li>ProductCode: string</li>
 * <li>Description: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ModifyImageAttributeRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ModifyImageAttributeRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageId: string</li>
     * <li>Attribute: string</li>
     * <li>OperationType: string</li>
     * <li>UserId: string</li>
     * <li>UserGroup: string</li>
     * <li>ProductCode: string</li>
     * <li>Description: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Attribute' => array('FieldValue' => null, 'FieldType' => 'string'),
        'OperationType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UserId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'UserGroup' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'ProductCode' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ImageId property.
     * 
     * @return string ImageId
     */
    public function getImageId() 
    {
        return $this->_fields['ImageId']['FieldValue'];
    }

    /**
     * Sets the value of the ImageId property.
     * 
     * @param string ImageId
     * @return this instance
     */
    public function setImageId($value) 
    {
        $this->_fields['ImageId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageId and returns this instance
     * 
     * @param string $value ImageId
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest instance
     */
    public function withImageId($value)
    {
        $this->setImageId($value);
        return $this;
    }


    /**
     * Checks if ImageId is set
     * 
     * @return bool true if ImageId  is set
     */
    public function isSetImageId()
    {
        return !is_null($this->_fields['ImageId']['FieldValue']);
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
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest instance
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
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest instance
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
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest  instance
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
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest  instance
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

    /**
     * Gets the value of the ProductCode .
     * 
     * @return array of string ProductCode
     */
    public function getProductCode() 
    {
        return $this->_fields['ProductCode']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCode.
     * 
     * @param string or an array of string ProductCode
     * @return this instance
     */
    public function setProductCode($productCode) 
    {
        if (!$this->_isNumericArray($productCode)) {
            $productCode =  array ($productCode);    
        }
        $this->_fields['ProductCode']['FieldValue'] = $productCode;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ProductCode list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withProductCode($productCode1, $productCode2)</code>
     * 
     * @param string  $stringArgs one or more ProductCode
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest  instance
     */
    public function withProductCode($stringArgs)
    {
        foreach (func_get_args() as $productCode) {
            $this->_fields['ProductCode']['FieldValue'][] = $productCode;
        }
        return $this;
    }  
      

    /**
     * Checks if ProductCode list is non-empty
     * 
     * @return bool true if ProductCode list is non-empty
     */
    public function isSetProductCode()
    {
        return count ($this->_fields['ProductCode']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Description property.
     * 
     * @return string Description
     */
    public function getDescription() 
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Sets the value of the Description property.
     * 
     * @param string Description
     * @return this instance
     */
    public function setDescription($value) 
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Description and returns this instance
     * 
     * @param string $value Description
     * @return Amazon_EC2_Model_ModifyImageAttributeRequest instance
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }


    /**
     * Checks if Description is set
     * 
     * @return bool true if Description  is set
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }




}