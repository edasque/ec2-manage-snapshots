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
 * Amazon_EC2_Model_SnapshotAttribute
 * 
 * Properties:
 * <ul>
 * 
 * <li>SnapshotId: string</li>
 * <li>CreateVolumePermission: Amazon_EC2_Model_CreateVolumePermission</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_SnapshotAttribute extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_SnapshotAttribute
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SnapshotId: string</li>
     * <li>CreateVolumePermission: Amazon_EC2_Model_CreateVolumePermission</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SnapshotId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'CreateVolumePermission' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_CreateVolumePermission')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SnapshotId property.
     * 
     * @return string SnapshotId
     */
    public function getSnapshotId() 
    {
        return $this->_fields['SnapshotId']['FieldValue'];
    }

    /**
     * Sets the value of the SnapshotId property.
     * 
     * @param string SnapshotId
     * @return this instance
     */
    public function setSnapshotId($value) 
    {
        $this->_fields['SnapshotId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SnapshotId and returns this instance
     * 
     * @param string $value SnapshotId
     * @return Amazon_EC2_Model_SnapshotAttribute instance
     */
    public function withSnapshotId($value)
    {
        $this->setSnapshotId($value);
        return $this;
    }


    /**
     * Checks if SnapshotId is set
     * 
     * @return bool true if SnapshotId  is set
     */
    public function isSetSnapshotId()
    {
        return !is_null($this->_fields['SnapshotId']['FieldValue']);
    }

    /**
     * Gets the value of the CreateVolumePermission.
     * 
     * @return array of CreateVolumePermission CreateVolumePermission
     */
    public function getCreateVolumePermission() 
    {
        return $this->_fields['CreateVolumePermission']['FieldValue'];
    }

    /**
     * Sets the value of the CreateVolumePermission.
     * 
     * @param mixed CreateVolumePermission or an array of CreateVolumePermission CreateVolumePermission
     * @return this instance
     */
    public function setCreateVolumePermission($createVolumePermission) 
    {
        if (!$this->_isNumericArray($createVolumePermission)) {
            $createVolumePermission =  array ($createVolumePermission);    
        }
        $this->_fields['CreateVolumePermission']['FieldValue'] = $createVolumePermission;
        return $this;
    }


    /**
     * Sets single or multiple values of CreateVolumePermission list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withCreateVolumePermission($createVolumePermission1, $createVolumePermission2)</code>
     * 
     * @param CreateVolumePermission  $createVolumePermissionArgs one or more CreateVolumePermission
     * @return Amazon_EC2_Model_SnapshotAttribute  instance
     */
    public function withCreateVolumePermission($createVolumePermissionArgs)
    {
        foreach (func_get_args() as $createVolumePermission) {
            $this->_fields['CreateVolumePermission']['FieldValue'][] = $createVolumePermission;
        }
        return $this;
    }   



    /**
     * Checks if CreateVolumePermission list is non-empty
     * 
     * @return bool true if CreateVolumePermission list is non-empty
     */
    public function isSetCreateVolumePermission()
    {
        return count ($this->_fields['CreateVolumePermission']['FieldValue']) > 0;
    }




}