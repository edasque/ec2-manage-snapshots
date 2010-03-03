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
 * Amazon_EC2_Model_DescribeImagesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Image: Amazon_EC2_Model_Image</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeImagesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeImagesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Image: Amazon_EC2_Model_Image</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Image' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Image')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Image.
     * 
     * @return array of Image Image
     */
    public function getImage() 
    {
        return $this->_fields['Image']['FieldValue'];
    }

    /**
     * Sets the value of the Image.
     * 
     * @param mixed Image or an array of Image Image
     * @return this instance
     */
    public function setImage($image) 
    {
        if (!$this->_isNumericArray($image)) {
            $image =  array ($image);    
        }
        $this->_fields['Image']['FieldValue'] = $image;
        return $this;
    }


    /**
     * Sets single or multiple values of Image list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withImage($image1, $image2)</code>
     * 
     * @param Image  $imageArgs one or more Image
     * @return Amazon_EC2_Model_DescribeImagesResult  instance
     */
    public function withImage($imageArgs)
    {
        foreach (func_get_args() as $image) {
            $this->_fields['Image']['FieldValue'][] = $image;
        }
        return $this;
    }   



    /**
     * Checks if Image list is non-empty
     * 
     * @return bool true if Image list is non-empty
     */
    public function isSetImage()
    {
        return count ($this->_fields['Image']['FieldValue']) > 0;
    }




}