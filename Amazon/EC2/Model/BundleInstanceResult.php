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
 * Amazon_EC2_Model_BundleInstanceResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>BundleTask: Amazon_EC2_Model_BundleTask</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_BundleInstanceResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_BundleInstanceResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>BundleTask: Amazon_EC2_Model_BundleTask</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'BundleTask' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_BundleTask'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the BundleTask.
     * 
     * @return BundleTask BundleTask
     */
    public function getBundleTask() 
    {
        return $this->_fields['BundleTask']['FieldValue'];
    }

    /**
     * Sets the value of the BundleTask.
     * 
     * @param BundleTask BundleTask
     * @return void
     */
    public function setBundleTask($value) 
    {
        $this->_fields['BundleTask']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the BundleTask  and returns this instance
     * 
     * @param BundleTask $value BundleTask
     * @return Amazon_EC2_Model_BundleInstanceResult instance
     */
    public function withBundleTask($value)
    {
        $this->setBundleTask($value);
        return $this;
    }


    /**
     * Checks if BundleTask  is set
     * 
     * @return bool true if BundleTask property is set
     */
    public function isSetBundleTask()
    {
        return !is_null($this->_fields['BundleTask']['FieldValue']);

    }




}