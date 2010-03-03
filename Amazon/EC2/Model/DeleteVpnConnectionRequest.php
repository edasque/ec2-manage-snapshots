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
 * Amazon_EC2_Model_DeleteVpnConnectionRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>VpnConnectionId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DeleteVpnConnectionRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DeleteVpnConnectionRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VpnConnectionId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VpnConnectionId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VpnConnectionId property.
     * 
     * @return string VpnConnectionId
     */
    public function getVpnConnectionId() 
    {
        return $this->_fields['VpnConnectionId']['FieldValue'];
    }

    /**
     * Sets the value of the VpnConnectionId property.
     * 
     * @param string VpnConnectionId
     * @return this instance
     */
    public function setVpnConnectionId($value) 
    {
        $this->_fields['VpnConnectionId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VpnConnectionId and returns this instance
     * 
     * @param string $value VpnConnectionId
     * @return Amazon_EC2_Model_DeleteVpnConnectionRequest instance
     */
    public function withVpnConnectionId($value)
    {
        $this->setVpnConnectionId($value);
        return $this;
    }


    /**
     * Checks if VpnConnectionId is set
     * 
     * @return bool true if VpnConnectionId  is set
     */
    public function isSetVpnConnectionId()
    {
        return !is_null($this->_fields['VpnConnectionId']['FieldValue']);
    }




}