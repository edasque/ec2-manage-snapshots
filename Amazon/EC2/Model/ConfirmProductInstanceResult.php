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
 * Amazon_EC2_Model_ConfirmProductInstanceResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>OwnerId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ConfirmProductInstanceResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ConfirmProductInstanceResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>OwnerId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'OwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the OwnerId property.
     * 
     * @return string OwnerId
     */
    public function getOwnerId() 
    {
        return $this->_fields['OwnerId']['FieldValue'];
    }

    /**
     * Sets the value of the OwnerId property.
     * 
     * @param string OwnerId
     * @return this instance
     */
    public function setOwnerId($value) 
    {
        $this->_fields['OwnerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the OwnerId and returns this instance
     * 
     * @param string $value OwnerId
     * @return Amazon_EC2_Model_ConfirmProductInstanceResult instance
     */
    public function withOwnerId($value)
    {
        $this->setOwnerId($value);
        return $this;
    }


    /**
     * Checks if OwnerId is set
     * 
     * @return bool true if OwnerId  is set
     */
    public function isSetOwnerId()
    {
        return !is_null($this->_fields['OwnerId']['FieldValue']);
    }




}