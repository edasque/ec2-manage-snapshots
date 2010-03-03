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
 * Amazon_EC2_Model_VpcAttachment
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpcId: string</li>
 * <li>VpcAttachmentState: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_VpcAttachment extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_VpcAttachment
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpcId: string</li>
     * <li>VpcAttachmentState: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpcId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpcAttachmentState' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpcId property.
     * 
     * @return string VpcId
     */
    public function getVpcId() 
    {
        return $this->_fields['VpcId']['FieldValue'];
    }

    /**
     * Sets the value of the VpcId property.
     * 
     * @param string VpcId
     * @return this instance
     */
    public function setVpcId($value) 
    {
        $this->_fields['VpcId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpcId and returns this instance
     * 
     * @param string $value VpcId
     * @return Amazon_EC2_Model_VpcAttachment instance
     */
    public function withVpcId($value)
    {
        $this->setVpcId($value);
        return $this;
    }


    /**
     * Checks if VpcId is set
     * 
     * @return bool true if VpcId  is set
     */
    public function isSetVpcId()
    {
        return !is_null($this->_fields['VpcId']['FieldValue']);
    }

    /**
     * Gets the value of the VpcAttachmentState property.
     * 
     * @return string VpcAttachmentState
     */
    public function getVpcAttachmentState() 
    {
        return $this->_fields['VpcAttachmentState']['FieldValue'];
    }

    /**
     * Sets the value of the VpcAttachmentState property.
     * 
     * @param string VpcAttachmentState
     * @return this instance
     */
    public function setVpcAttachmentState($value) 
    {
        $this->_fields['VpcAttachmentState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpcAttachmentState and returns this instance
     * 
     * @param string $value VpcAttachmentState
     * @return Amazon_EC2_Model_VpcAttachment instance
     */
    public function withVpcAttachmentState($value)
    {
        $this->setVpcAttachmentState($value);
        return $this;
    }


    /**
     * Checks if VpcAttachmentState is set
     * 
     * @return bool true if VpcAttachmentState  is set
     */
    public function isSetVpcAttachmentState()
    {
        return !is_null($this->_fields['VpcAttachmentState']['FieldValue']);
    }




}