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
 * Amazon_EC2_Model_CreateVolumeResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Volume: Amazon_EC2_Model_Volume</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateVolumeResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateVolumeResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Volume: Amazon_EC2_Model_Volume</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Volume' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Volume'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Volume.
     * 
     * @return Volume Volume
     */
    public function getVolume() 
    {
        return $this->_fields['Volume']['FieldValue'];
    }

    /**
     * Sets the value of the Volume.
     * 
     * @param Volume Volume
     * @return void
     */
    public function setVolume($value) 
    {
        $this->_fields['Volume']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Volume  and returns this instance
     * 
     * @param Volume $value Volume
     * @return Amazon_EC2_Model_CreateVolumeResult instance
     */
    public function withVolume($value)
    {
        $this->setVolume($value);
        return $this;
    }


    /**
     * Checks if Volume  is set
     * 
     * @return bool true if Volume property is set
     */
    public function isSetVolume()
    {
        return !is_null($this->_fields['Volume']['FieldValue']);

    }




}