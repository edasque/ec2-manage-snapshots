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
 * Amazon_EC2_Model_DeleteSubnetRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SubnetId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DeleteSubnetRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DeleteSubnetRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SubnetId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SubnetId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SubnetId property.
     * 
     * @return string SubnetId
     */
    public function getSubnetId() 
    {
        return $this->_fields['SubnetId']['FieldValue'];
    }

    /**
     * Sets the value of the SubnetId property.
     * 
     * @param string SubnetId
     * @return this instance
     */
    public function setSubnetId($value) 
    {
        $this->_fields['SubnetId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SubnetId and returns this instance
     * 
     * @param string $value SubnetId
     * @return Amazon_EC2_Model_DeleteSubnetRequest instance
     */
    public function withSubnetId($value)
    {
        $this->setSubnetId($value);
        return $this;
    }


    /**
     * Checks if SubnetId is set
     * 
     * @return bool true if SubnetId  is set
     */
    public function isSetSubnetId()
    {
        return !is_null($this->_fields['SubnetId']['FieldValue']);
    }




}