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
 * Amazon_EC2_Model_DescribeVolumesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>VolumeId: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVolumesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVolumesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>VolumeId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'VolumeId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the VolumeId .
     * 
     * @return array of string VolumeId
     */
    public function getVolumeId() 
    {
        return $this->_fields['VolumeId']['FieldValue'];
    }

    /**
     * Sets the value of the VolumeId.
     * 
     * @param string or an array of string VolumeId
     * @return this instance
     */
    public function setVolumeId($volumeId) 
    {
        if (!$this->_isNumericArray($volumeId)) {
            $volumeId =  array ($volumeId);    
        }
        $this->_fields['VolumeId']['FieldValue'] = $volumeId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of VolumeId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVolumeId($volumeId1, $volumeId2)</code>
     * 
     * @param string  $stringArgs one or more VolumeId
     * @return Amazon_EC2_Model_DescribeVolumesRequest  instance
     */
    public function withVolumeId($stringArgs)
    {
        foreach (func_get_args() as $volumeId) {
            $this->_fields['VolumeId']['FieldValue'][] = $volumeId;
        }
        return $this;
    }  
      

    /**
     * Checks if VolumeId list is non-empty
     * 
     * @return bool true if VolumeId list is non-empty
     */
    public function isSetVolumeId()
    {
        return count ($this->_fields['VolumeId']['FieldValue']) > 0;
    }




}