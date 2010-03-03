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
 * Amazon_EC2_Model_DescribeInstanceAttributeResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceAttribute: Amazon_EC2_Model_InstanceAttribute</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeInstanceAttributeResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeInstanceAttributeResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceAttribute: Amazon_EC2_Model_InstanceAttribute</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceAttribute' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_InstanceAttribute'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceAttribute.
     * 
     * @return InstanceAttribute InstanceAttribute
     */
    public function getInstanceAttribute() 
    {
        return $this->_fields['InstanceAttribute']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceAttribute.
     * 
     * @param InstanceAttribute InstanceAttribute
     * @return void
     */
    public function setInstanceAttribute($value) 
    {
        $this->_fields['InstanceAttribute']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the InstanceAttribute  and returns this instance
     * 
     * @param InstanceAttribute $value InstanceAttribute
     * @return Amazon_EC2_Model_DescribeInstanceAttributeResult instance
     */
    public function withInstanceAttribute($value)
    {
        $this->setInstanceAttribute($value);
        return $this;
    }


    /**
     * Checks if InstanceAttribute  is set
     * 
     * @return bool true if InstanceAttribute property is set
     */
    public function isSetInstanceAttribute()
    {
        return !is_null($this->_fields['InstanceAttribute']['FieldValue']);

    }




}