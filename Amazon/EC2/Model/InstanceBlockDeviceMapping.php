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
 * Amazon_EC2_Model_InstanceBlockDeviceMapping
 * 
 * Properties:
 * <ul>
 * 
 * <li>DeviceName: string</li>
 * <li>Ebs: Amazon_EC2_Model_InstanceEbsBlockDevice</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_InstanceBlockDeviceMapping extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_InstanceBlockDeviceMapping
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>DeviceName: string</li>
     * <li>Ebs: Amazon_EC2_Model_InstanceEbsBlockDevice</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'DeviceName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Ebs' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_InstanceEbsBlockDevice'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the DeviceName property.
     * 
     * @return string DeviceName
     */
    public function getDeviceName() 
    {
        return $this->_fields['DeviceName']['FieldValue'];
    }

    /**
     * Sets the value of the DeviceName property.
     * 
     * @param string DeviceName
     * @return this instance
     */
    public function setDeviceName($value) 
    {
        $this->_fields['DeviceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the DeviceName and returns this instance
     * 
     * @param string $value DeviceName
     * @return Amazon_EC2_Model_InstanceBlockDeviceMapping instance
     */
    public function withDeviceName($value)
    {
        $this->setDeviceName($value);
        return $this;
    }


    /**
     * Checks if DeviceName is set
     * 
     * @return bool true if DeviceName  is set
     */
    public function isSetDeviceName()
    {
        return !is_null($this->_fields['DeviceName']['FieldValue']);
    }

    /**
     * Gets the value of the Ebs.
     * 
     * @return InstanceEbsBlockDevice Ebs
     */
    public function getEbs() 
    {
        return $this->_fields['Ebs']['FieldValue'];
    }

    /**
     * Sets the value of the Ebs.
     * 
     * @param InstanceEbsBlockDevice Ebs
     * @return void
     */
    public function setEbs($value) 
    {
        $this->_fields['Ebs']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Ebs  and returns this instance
     * 
     * @param InstanceEbsBlockDevice $value Ebs
     * @return Amazon_EC2_Model_InstanceBlockDeviceMapping instance
     */
    public function withEbs($value)
    {
        $this->setEbs($value);
        return $this;
    }


    /**
     * Checks if Ebs  is set
     * 
     * @return bool true if Ebs property is set
     */
    public function isSetEbs()
    {
        return !is_null($this->_fields['Ebs']['FieldValue']);

    }




}