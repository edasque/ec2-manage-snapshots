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
 * Amazon_EC2_Model_VpnGateway
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnGatewayId: string</li>
 * <li>VpnGatewayState: string</li>
 * <li>Type: string</li>
 * <li>AvailabilityZone: string</li>
 * <li>VpcAttachment: Amazon_EC2_Model_VpcAttachment</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_VpnGateway extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_VpnGateway
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnGatewayId: string</li>
     * <li>VpnGatewayState: string</li>
     * <li>Type: string</li>
     * <li>AvailabilityZone: string</li>
     * <li>VpcAttachment: Amazon_EC2_Model_VpcAttachment</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnGatewayId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpnGatewayState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Type' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AvailabilityZone' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VpcAttachment' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_VpcAttachment')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnGatewayId property.
     * 
     * @return string VpnGatewayId
     */
    public function getVpnGatewayId() 
    {
        return $this->_fields['VpnGatewayId']['FieldValue'];
    }

    /**
     * Sets the value of the VpnGatewayId property.
     * 
     * @param string VpnGatewayId
     * @return this instance
     */
    public function setVpnGatewayId($value) 
    {
        $this->_fields['VpnGatewayId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpnGatewayId and returns this instance
     * 
     * @param string $value VpnGatewayId
     * @return Amazon_EC2_Model_VpnGateway instance
     */
    public function withVpnGatewayId($value)
    {
        $this->setVpnGatewayId($value);
        return $this;
    }


    /**
     * Checks if VpnGatewayId is set
     * 
     * @return bool true if VpnGatewayId  is set
     */
    public function isSetVpnGatewayId()
    {
        return !is_null($this->_fields['VpnGatewayId']['FieldValue']);
    }

    /**
     * Gets the value of the VpnGatewayState property.
     * 
     * @return string VpnGatewayState
     */
    public function getVpnGatewayState() 
    {
        return $this->_fields['VpnGatewayState']['FieldValue'];
    }

    /**
     * Sets the value of the VpnGatewayState property.
     * 
     * @param string VpnGatewayState
     * @return this instance
     */
    public function setVpnGatewayState($value) 
    {
        $this->_fields['VpnGatewayState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpnGatewayState and returns this instance
     * 
     * @param string $value VpnGatewayState
     * @return Amazon_EC2_Model_VpnGateway instance
     */
    public function withVpnGatewayState($value)
    {
        $this->setVpnGatewayState($value);
        return $this;
    }


    /**
     * Checks if VpnGatewayState is set
     * 
     * @return bool true if VpnGatewayState  is set
     */
    public function isSetVpnGatewayState()
    {
        return !is_null($this->_fields['VpnGatewayState']['FieldValue']);
    }

    /**
     * Gets the value of the Type property.
     * 
     * @return string Type
     */
    public function getType() 
    {
        return $this->_fields['Type']['FieldValue'];
    }

    /**
     * Sets the value of the Type property.
     * 
     * @param string Type
     * @return this instance
     */
    public function setType($value) 
    {
        $this->_fields['Type']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Type and returns this instance
     * 
     * @param string $value Type
     * @return Amazon_EC2_Model_VpnGateway instance
     */
    public function withType($value)
    {
        $this->setType($value);
        return $this;
    }


    /**
     * Checks if Type is set
     * 
     * @return bool true if Type  is set
     */
    public function isSetType()
    {
        return !is_null($this->_fields['Type']['FieldValue']);
    }

    /**
     * Gets the value of the AvailabilityZone property.
     * 
     * @return string AvailabilityZone
     */
    public function getAvailabilityZone() 
    {
        return $this->_fields['AvailabilityZone']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZone property.
     * 
     * @param string AvailabilityZone
     * @return this instance
     */
    public function setAvailabilityZone($value) 
    {
        $this->_fields['AvailabilityZone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the AvailabilityZone and returns this instance
     * 
     * @param string $value AvailabilityZone
     * @return Amazon_EC2_Model_VpnGateway instance
     */
    public function withAvailabilityZone($value)
    {
        $this->setAvailabilityZone($value);
        return $this;
    }


    /**
     * Checks if AvailabilityZone is set
     * 
     * @return bool true if AvailabilityZone  is set
     */
    public function isSetAvailabilityZone()
    {
        return !is_null($this->_fields['AvailabilityZone']['FieldValue']);
    }

    /**
     * Gets the value of the VpcAttachment.
     * 
     * @return array of VpcAttachment VpcAttachment
     */
    public function getVpcAttachment() 
    {
        return $this->_fields['VpcAttachment']['FieldValue'];
    }

    /**
     * Sets the value of the VpcAttachment.
     * 
     * @param mixed VpcAttachment or an array of VpcAttachment VpcAttachment
     * @return this instance
     */
    public function setVpcAttachment($vpcAttachment) 
    {
        if (!$this->_isNumericArray($vpcAttachment)) {
            $vpcAttachment =  array ($vpcAttachment);    
        }
        $this->_fields['VpcAttachment']['FieldValue'] = $vpcAttachment;
        return $this;
    }


    /**
     * Sets single or multiple values of VpcAttachment list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpcAttachment($vpcAttachment1, $vpcAttachment2)</code>
     * 
     * @param VpcAttachment  $vpcAttachmentArgs one or more VpcAttachment
     * @return Amazon_EC2_Model_VpnGateway  instance
     */
    public function withVpcAttachment($vpcAttachmentArgs)
    {
        foreach (func_get_args() as $vpcAttachment) {
            $this->_fields['VpcAttachment']['FieldValue'][] = $vpcAttachment;
        }
        return $this;
    }   



    /**
     * Checks if VpcAttachment list is non-empty
     * 
     * @return bool true if VpcAttachment list is non-empty
     */
    public function isSetVpcAttachment()
    {
        return count ($this->_fields['VpcAttachment']['FieldValue']) > 0;
    }




}