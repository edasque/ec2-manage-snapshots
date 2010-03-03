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
 * Amazon_EC2_Model_CancelBundleTaskRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>BundleId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CancelBundleTaskRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CancelBundleTaskRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>BundleId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'BundleId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the BundleId property.
     * 
     * @return string BundleId
     */
    public function getBundleId() 
    {
        return $this->_fields['BundleId']['FieldValue'];
    }

    /**
     * Sets the value of the BundleId property.
     * 
     * @param string BundleId
     * @return this instance
     */
    public function setBundleId($value) 
    {
        $this->_fields['BundleId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the BundleId and returns this instance
     * 
     * @param string $value BundleId
     * @return Amazon_EC2_Model_CancelBundleTaskRequest instance
     */
    public function withBundleId($value)
    {
        $this->setBundleId($value);
        return $this;
    }


    /**
     * Checks if BundleId is set
     * 
     * @return bool true if BundleId  is set
     */
    public function isSetBundleId()
    {
        return !is_null($this->_fields['BundleId']['FieldValue']);
    }




}