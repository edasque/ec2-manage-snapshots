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
 * Amazon_EC2_Model_DescribeVolumesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Volume: Amazon_EC2_Model_Volume</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVolumesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVolumesResult
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
        'Volume' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Volume')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Volume.
     * 
     * @return array of Volume Volume
     */
    public function getVolume() 
    {
        return $this->_fields['Volume']['FieldValue'];
    }

    /**
     * Sets the value of the Volume.
     * 
     * @param mixed Volume or an array of Volume Volume
     * @return this instance
     */
    public function setVolume($volume) 
    {
        if (!$this->_isNumericArray($volume)) {
            $volume =  array ($volume);    
        }
        $this->_fields['Volume']['FieldValue'] = $volume;
        return $this;
    }


    /**
     * Sets single or multiple values of Volume list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVolume($volume1, $volume2)</code>
     * 
     * @param Volume  $volumeArgs one or more Volume
     * @return Amazon_EC2_Model_DescribeVolumesResult  instance
     */
    public function withVolume($volumeArgs)
    {
        foreach (func_get_args() as $volume) {
            $this->_fields['Volume']['FieldValue'][] = $volume;
        }
        return $this;
    }   



    /**
     * Checks if Volume list is non-empty
     * 
     * @return bool true if Volume list is non-empty
     */
    public function isSetVolume()
    {
        return count ($this->_fields['Volume']['FieldValue']) > 0;
    }




}