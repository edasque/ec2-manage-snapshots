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
 * Amazon_EC2_Model_S3Storage
 * 
 * Properties:
 * <ul>
 * 
 * <li>Bucket: string</li>
 * <li>Prefix: string</li>
 * <li>AWSAccessKeyId: string</li>
 * <li>UploadPolicy: string</li>
 * <li>UploadPolicySignature: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_S3Storage extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_S3Storage
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Bucket: string</li>
     * <li>Prefix: string</li>
     * <li>AWSAccessKeyId: string</li>
     * <li>UploadPolicy: string</li>
     * <li>UploadPolicySignature: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Bucket' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Prefix' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AWSAccessKeyId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UploadPolicy' => array('FieldValue' => null, 'FieldType' => 'string'),
        'UploadPolicySignature' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Bucket property.
     * 
     * @return string Bucket
     */
    public function getBucket() 
    {
        return $this->_fields['Bucket']['FieldValue'];
    }

    /**
     * Sets the value of the Bucket property.
     * 
     * @param string Bucket
     * @return this instance
     */
    public function setBucket($value) 
    {
        $this->_fields['Bucket']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Bucket and returns this instance
     * 
     * @param string $value Bucket
     * @return Amazon_EC2_Model_S3Storage instance
     */
    public function withBucket($value)
    {
        $this->setBucket($value);
        return $this;
    }


    /**
     * Checks if Bucket is set
     * 
     * @return bool true if Bucket  is set
     */
    public function isSetBucket()
    {
        return !is_null($this->_fields['Bucket']['FieldValue']);
    }

    /**
     * Gets the value of the Prefix property.
     * 
     * @return string Prefix
     */
    public function getPrefix() 
    {
        return $this->_fields['Prefix']['FieldValue'];
    }

    /**
     * Sets the value of the Prefix property.
     * 
     * @param string Prefix
     * @return this instance
     */
    public function setPrefix($value) 
    {
        $this->_fields['Prefix']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Prefix and returns this instance
     * 
     * @param string $value Prefix
     * @return Amazon_EC2_Model_S3Storage instance
     */
    public function withPrefix($value)
    {
        $this->setPrefix($value);
        return $this;
    }


    /**
     * Checks if Prefix is set
     * 
     * @return bool true if Prefix  is set
     */
    public function isSetPrefix()
    {
        return !is_null($this->_fields['Prefix']['FieldValue']);
    }

    /**
     * Gets the value of the AWSAccessKeyId property.
     * 
     * @return string AWSAccessKeyId
     */
    public function getAWSAccessKeyId() 
    {
        return $this->_fields['AWSAccessKeyId']['FieldValue'];
    }

    /**
     * Sets the value of the AWSAccessKeyId property.
     * 
     * @param string AWSAccessKeyId
     * @return this instance
     */
    public function setAWSAccessKeyId($value) 
    {
        $this->_fields['AWSAccessKeyId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AWSAccessKeyId and returns this instance
     * 
     * @param string $value AWSAccessKeyId
     * @return Amazon_EC2_Model_S3Storage instance
     */
    public function withAWSAccessKeyId($value)
    {
        $this->setAWSAccessKeyId($value);
        return $this;
    }


    /**
     * Checks if AWSAccessKeyId is set
     * 
     * @return bool true if AWSAccessKeyId  is set
     */
    public function isSetAWSAccessKeyId()
    {
        return !is_null($this->_fields['AWSAccessKeyId']['FieldValue']);
    }

    /**
     * Gets the value of the UploadPolicy property.
     * 
     * @return string UploadPolicy
     */
    public function getUploadPolicy() 
    {
        return $this->_fields['UploadPolicy']['FieldValue'];
    }

    /**
     * Sets the value of the UploadPolicy property.
     * 
     * @param string UploadPolicy
     * @return this instance
     */
    public function setUploadPolicy($value) 
    {
        $this->_fields['UploadPolicy']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UploadPolicy and returns this instance
     * 
     * @param string $value UploadPolicy
     * @return Amazon_EC2_Model_S3Storage instance
     */
    public function withUploadPolicy($value)
    {
        $this->setUploadPolicy($value);
        return $this;
    }


    /**
     * Checks if UploadPolicy is set
     * 
     * @return bool true if UploadPolicy  is set
     */
    public function isSetUploadPolicy()
    {
        return !is_null($this->_fields['UploadPolicy']['FieldValue']);
    }

    /**
     * Gets the value of the UploadPolicySignature property.
     * 
     * @return string UploadPolicySignature
     */
    public function getUploadPolicySignature() 
    {
        return $this->_fields['UploadPolicySignature']['FieldValue'];
    }

    /**
     * Sets the value of the UploadPolicySignature property.
     * 
     * @param string UploadPolicySignature
     * @return this instance
     */
    public function setUploadPolicySignature($value) 
    {
        $this->_fields['UploadPolicySignature']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UploadPolicySignature and returns this instance
     * 
     * @param string $value UploadPolicySignature
     * @return Amazon_EC2_Model_S3Storage instance
     */
    public function withUploadPolicySignature($value)
    {
        $this->setUploadPolicySignature($value);
        return $this;
    }


    /**
     * Checks if UploadPolicySignature is set
     * 
     * @return bool true if UploadPolicySignature  is set
     */
    public function isSetUploadPolicySignature()
    {
        return !is_null($this->_fields['UploadPolicySignature']['FieldValue']);
    }




}