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
 * Amazon_EC2_Model_DescribeImageAttributeResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageAttribute: Amazon_EC2_Model_ImageAttribute</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeImageAttributeResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeImageAttributeResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageAttribute: Amazon_EC2_Model_ImageAttribute</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageAttribute' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ImageAttribute'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ImageAttribute.
     * 
     * @return ImageAttribute ImageAttribute
     */
    public function getImageAttribute() 
    {
        return $this->_fields['ImageAttribute']['FieldValue'];
    }

    /**
     * Sets the value of the ImageAttribute.
     * 
     * @param ImageAttribute ImageAttribute
     * @return void
     */
    public function setImageAttribute($value) 
    {
        $this->_fields['ImageAttribute']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ImageAttribute  and returns this instance
     * 
     * @param ImageAttribute $value ImageAttribute
     * @return Amazon_EC2_Model_DescribeImageAttributeResult instance
     */
    public function withImageAttribute($value)
    {
        $this->setImageAttribute($value);
        return $this;
    }


    /**
     * Checks if ImageAttribute  is set
     * 
     * @return bool true if ImageAttribute property is set
     */
    public function isSetImageAttribute()
    {
        return !is_null($this->_fields['ImageAttribute']['FieldValue']);

    }




}