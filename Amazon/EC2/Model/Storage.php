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
 * Amazon_EC2_Model_Storage
 * 
 * Properties:
 * <ul>
 * 
 * <li>S3: Amazon_EC2_Model_S3Storage</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Storage extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Storage
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>S3: Amazon_EC2_Model_S3Storage</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'S3' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_S3Storage'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the S3.
     * 
     * @return S3Storage S3
     */
    public function getS3() 
    {
        return $this->_fields['S3']['FieldValue'];
    }

    /**
     * Sets the value of the S3.
     * 
     * @param S3Storage S3
     * @return void
     */
    public function setS3($value) 
    {
        $this->_fields['S3']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the S3  and returns this instance
     * 
     * @param S3Storage $value S3
     * @return Amazon_EC2_Model_Storage instance
     */
    public function withS3($value)
    {
        $this->setS3($value);
        return $this;
    }


    /**
     * Checks if S3  is set
     * 
     * @return bool true if S3 property is set
     */
    public function isSetS3()
    {
        return !is_null($this->_fields['S3']['FieldValue']);

    }




}