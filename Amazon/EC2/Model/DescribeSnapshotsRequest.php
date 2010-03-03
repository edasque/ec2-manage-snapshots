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
 * Amazon_EC2_Model_DescribeSnapshotsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotId: string</li>
 * <li>Owner: string</li>
 * <li>RestorableBy: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSnapshotsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSnapshotsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotId: string</li>
     * <li>Owner: string</li>
     * <li>RestorableBy: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Owner' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RestorableBy' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SnapshotId .
     * 
     * @return array of string SnapshotId
     */
    public function getSnapshotId() 
    {
        return $this->_fields['SnapshotId']['FieldValue'];
    }

    /**
     * Sets the value of the SnapshotId.
     * 
     * @param string or an array of string SnapshotId
     * @return this instance
     */
    public function setSnapshotId($snapshotId) 
    {
        if (!$this->_isNumericArray($snapshotId)) {
            $snapshotId =  array ($snapshotId);    
        }
        $this->_fields['SnapshotId']['FieldValue'] = $snapshotId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of SnapshotId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSnapshotId($snapshotId1, $snapshotId2)</code>
     * 
     * @param string  $stringArgs one or more SnapshotId
     * @return Amazon_EC2_Model_DescribeSnapshotsRequest  instance
     */
    public function withSnapshotId($stringArgs)
    {
        foreach (func_get_args() as $snapshotId) {
            $this->_fields['SnapshotId']['FieldValue'][] = $snapshotId;
        }
        return $this;
    }  
      

    /**
     * Checks if SnapshotId list is non-empty
     * 
     * @return bool true if SnapshotId list is non-empty
     */
    public function isSetSnapshotId()
    {
        return count ($this->_fields['SnapshotId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Owner property.
     * 
     * @return string Owner
     */
    public function getOwner() 
    {
        return $this->_fields['Owner']['FieldValue'];
    }

    /**
     * Sets the value of the Owner property.
     * 
     * @param string Owner
     * @return this instance
     */
    public function setOwner($value) 
    {
        $this->_fields['Owner']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Owner and returns this instance
     * 
     * @param string $value Owner
     * @return Amazon_EC2_Model_DescribeSnapshotsRequest instance
     */
    public function withOwner($value)
    {
        $this->setOwner($value);
        return $this;
    }


    /**
     * Checks if Owner is set
     * 
     * @return bool true if Owner  is set
     */
    public function isSetOwner()
    {
        return !is_null($this->_fields['Owner']['FieldValue']);
    }

    /**
     * Gets the value of the RestorableBy property.
     * 
     * @return string RestorableBy
     */
    public function getRestorableBy() 
    {
        return $this->_fields['RestorableBy']['FieldValue'];
    }

    /**
     * Sets the value of the RestorableBy property.
     * 
     * @param string RestorableBy
     * @return this instance
     */
    public function setRestorableBy($value) 
    {
        $this->_fields['RestorableBy']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RestorableBy and returns this instance
     * 
     * @param string $value RestorableBy
     * @return Amazon_EC2_Model_DescribeSnapshotsRequest instance
     */
    public function withRestorableBy($value)
    {
        $this->setRestorableBy($value);
        return $this;
    }


    /**
     * Checks if RestorableBy is set
     * 
     * @return bool true if RestorableBy  is set
     */
    public function isSetRestorableBy()
    {
        return !is_null($this->_fields['RestorableBy']['FieldValue']);
    }




}