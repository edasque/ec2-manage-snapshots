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
 * Amazon_EC2_Model_ConfirmProductInstanceRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ProductCode: string</li>
 * <li>InstanceId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ConfirmProductInstanceRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ConfirmProductInstanceRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ProductCode: string</li>
     * <li>InstanceId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ProductCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        'InstanceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ProductCode property.
     * 
     * @return string ProductCode
     */
    public function getProductCode() 
    {
        return $this->_fields['ProductCode']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCode property.
     * 
     * @param string ProductCode
     * @return this instance
     */
    public function setProductCode($value) 
    {
        $this->_fields['ProductCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProductCode and returns this instance
     * 
     * @param string $value ProductCode
     * @return Amazon_EC2_Model_ConfirmProductInstanceRequest instance
     */
    public function withProductCode($value)
    {
        $this->setProductCode($value);
        return $this;
    }


    /**
     * Checks if ProductCode is set
     * 
     * @return bool true if ProductCode  is set
     */
    public function isSetProductCode()
    {
        return !is_null($this->_fields['ProductCode']['FieldValue']);
    }

    /**
     * Gets the value of the InstanceId property.
     * 
     * @return string InstanceId
     */
    public function getInstanceId() 
    {
        return $this->_fields['InstanceId']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceId property.
     * 
     * @param string InstanceId
     * @return this instance
     */
    public function setInstanceId($value) 
    {
        $this->_fields['InstanceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceId and returns this instance
     * 
     * @param string $value InstanceId
     * @return Amazon_EC2_Model_ConfirmProductInstanceRequest instance
     */
    public function withInstanceId($value)
    {
        $this->setInstanceId($value);
        return $this;
    }


    /**
     * Checks if InstanceId is set
     * 
     * @return bool true if InstanceId  is set
     */
    public function isSetInstanceId()
    {
        return !is_null($this->_fields['InstanceId']['FieldValue']);
    }




}