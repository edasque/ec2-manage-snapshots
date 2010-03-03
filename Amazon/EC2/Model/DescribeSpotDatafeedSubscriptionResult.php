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
 * Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotDatafeedSubscription: Amazon_EC2_Model_SpotDatafeedSubscription</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotDatafeedSubscription: Amazon_EC2_Model_SpotDatafeedSubscription</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotDatafeedSubscription' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_SpotDatafeedSubscription'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SpotDatafeedSubscription.
     * 
     * @return SpotDatafeedSubscription SpotDatafeedSubscription
     */
    public function getSpotDatafeedSubscription() 
    {
        return $this->_fields['SpotDatafeedSubscription']['FieldValue'];
    }

    /**
     * Sets the value of the SpotDatafeedSubscription.
     * 
     * @param SpotDatafeedSubscription SpotDatafeedSubscription
     * @return void
     */
    public function setSpotDatafeedSubscription($value) 
    {
        $this->_fields['SpotDatafeedSubscription']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SpotDatafeedSubscription  and returns this instance
     * 
     * @param SpotDatafeedSubscription $value SpotDatafeedSubscription
     * @return Amazon_EC2_Model_DescribeSpotDatafeedSubscriptionResult instance
     */
    public function withSpotDatafeedSubscription($value)
    {
        $this->setSpotDatafeedSubscription($value);
        return $this;
    }


    /**
     * Checks if SpotDatafeedSubscription  is set
     * 
     * @return bool true if SpotDatafeedSubscription property is set
     */
    public function isSetSpotDatafeedSubscription()
    {
        return !is_null($this->_fields['SpotDatafeedSubscription']['FieldValue']);

    }




}