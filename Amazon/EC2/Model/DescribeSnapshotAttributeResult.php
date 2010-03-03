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
 * Amazon_EC2_Model_DescribeSnapshotAttributeResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotAttribute: Amazon_EC2_Model_SnapshotAttribute</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSnapshotAttributeResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSnapshotAttributeResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotAttribute: Amazon_EC2_Model_SnapshotAttribute</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotAttribute' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_SnapshotAttribute'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SnapshotAttribute.
     * 
     * @return SnapshotAttribute SnapshotAttribute
     */
    public function getSnapshotAttribute() 
    {
        return $this->_fields['SnapshotAttribute']['FieldValue'];
    }

    /**
     * Sets the value of the SnapshotAttribute.
     * 
     * @param SnapshotAttribute SnapshotAttribute
     * @return void
     */
    public function setSnapshotAttribute($value) 
    {
        $this->_fields['SnapshotAttribute']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SnapshotAttribute  and returns this instance
     * 
     * @param SnapshotAttribute $value SnapshotAttribute
     * @return Amazon_EC2_Model_DescribeSnapshotAttributeResult instance
     */
    public function withSnapshotAttribute($value)
    {
        $this->setSnapshotAttribute($value);
        return $this;
    }


    /**
     * Checks if SnapshotAttribute  is set
     * 
     * @return bool true if SnapshotAttribute property is set
     */
    public function isSetSnapshotAttribute()
    {
        return !is_null($this->_fields['SnapshotAttribute']['FieldValue']);

    }




}