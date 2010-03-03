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
 * Amazon_EC2_Model_DescribeImagesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageId: string</li>
 * <li>Owner: string</li>
 * <li>ExecutableBy: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeImagesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeImagesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageId: string</li>
     * <li>Owner: string</li>
     * <li>ExecutableBy: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Owner' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'ExecutableBy' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ImageId .
     * 
     * @return array of string ImageId
     */
    public function getImageId() 
    {
        return $this->_fields['ImageId']['FieldValue'];
    }

    /**
     * Sets the value of the ImageId.
     * 
     * @param string or an array of string ImageId
     * @return this instance
     */
    public function setImageId($imageId) 
    {
        if (!$this->_isNumericArray($imageId)) {
            $imageId =  array ($imageId);    
        }
        $this->_fields['ImageId']['FieldValue'] = $imageId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ImageId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withImageId($imageId1, $imageId2)</code>
     * 
     * @param string  $stringArgs one or more ImageId
     * @return Amazon_EC2_Model_DescribeImagesRequest  instance
     */
    public function withImageId($stringArgs)
    {
        foreach (func_get_args() as $imageId) {
            $this->_fields['ImageId']['FieldValue'][] = $imageId;
        }
        return $this;
    }  
      

    /**
     * Checks if ImageId list is non-empty
     * 
     * @return bool true if ImageId list is non-empty
     */
    public function isSetImageId()
    {
        return count ($this->_fields['ImageId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Owner .
     * 
     * @return array of string Owner
     */
    public function getOwner() 
    {
        return $this->_fields['Owner']['FieldValue'];
    }

    /**
     * Sets the value of the Owner.
     * 
     * @param string or an array of string Owner
     * @return this instance
     */
    public function setOwner($owner) 
    {
        if (!$this->_isNumericArray($owner)) {
            $owner =  array ($owner);    
        }
        $this->_fields['Owner']['FieldValue'] = $owner;
        return $this;
    }
  

    /**
     * Sets single or multiple values of Owner list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withOwner($owner1, $owner2)</code>
     * 
     * @param string  $stringArgs one or more Owner
     * @return Amazon_EC2_Model_DescribeImagesRequest  instance
     */
    public function withOwner($stringArgs)
    {
        foreach (func_get_args() as $owner) {
            $this->_fields['Owner']['FieldValue'][] = $owner;
        }
        return $this;
    }  
      

    /**
     * Checks if Owner list is non-empty
     * 
     * @return bool true if Owner list is non-empty
     */
    public function isSetOwner()
    {
        return count ($this->_fields['Owner']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the ExecutableBy .
     * 
     * @return array of string ExecutableBy
     */
    public function getExecutableBy() 
    {
        return $this->_fields['ExecutableBy']['FieldValue'];
    }

    /**
     * Sets the value of the ExecutableBy.
     * 
     * @param string or an array of string ExecutableBy
     * @return this instance
     */
    public function setExecutableBy($executableBy) 
    {
        if (!$this->_isNumericArray($executableBy)) {
            $executableBy =  array ($executableBy);    
        }
        $this->_fields['ExecutableBy']['FieldValue'] = $executableBy;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ExecutableBy list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withExecutableBy($executableBy1, $executableBy2)</code>
     * 
     * @param string  $stringArgs one or more ExecutableBy
     * @return Amazon_EC2_Model_DescribeImagesRequest  instance
     */
    public function withExecutableBy($stringArgs)
    {
        foreach (func_get_args() as $executableBy) {
            $this->_fields['ExecutableBy']['FieldValue'][] = $executableBy;
        }
        return $this;
    }  
      

    /**
     * Checks if ExecutableBy list is non-empty
     * 
     * @return bool true if ExecutableBy list is non-empty
     */
    public function isSetExecutableBy()
    {
        return count ($this->_fields['ExecutableBy']['FieldValue']) > 0;
    }




}