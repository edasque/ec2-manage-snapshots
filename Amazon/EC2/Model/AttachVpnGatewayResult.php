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
 * Amazon_EC2_Model_AttachVpnGatewayResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpcAttachment: Amazon_EC2_Model_VpcAttachment</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_AttachVpnGatewayResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_AttachVpnGatewayResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpcAttachment: Amazon_EC2_Model_VpcAttachment</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpcAttachment' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_VpcAttachment'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpcAttachment.
     * 
     * @return VpcAttachment VpcAttachment
     */
    public function getVpcAttachment() 
    {
        return $this->_fields['VpcAttachment']['FieldValue'];
    }

    /**
     * Sets the value of the VpcAttachment.
     * 
     * @param VpcAttachment VpcAttachment
     * @return void
     */
    public function setVpcAttachment($value) 
    {
        $this->_fields['VpcAttachment']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the VpcAttachment  and returns this instance
     * 
     * @param VpcAttachment $value VpcAttachment
     * @return Amazon_EC2_Model_AttachVpnGatewayResult instance
     */
    public function withVpcAttachment($value)
    {
        $this->setVpcAttachment($value);
        return $this;
    }


    /**
     * Checks if VpcAttachment  is set
     * 
     * @return bool true if VpcAttachment property is set
     */
    public function isSetVpcAttachment()
    {
        return !is_null($this->_fields['VpcAttachment']['FieldValue']);

    }




}