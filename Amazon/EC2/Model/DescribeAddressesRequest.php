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
 * Amazon_EC2_Model_DescribeAddressesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>PublicIp: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeAddressesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeAddressesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>PublicIp: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'PublicIp' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the PublicIp .
     * 
     * @return array of string PublicIp
     */
    public function getPublicIp() 
    {
        return $this->_fields['PublicIp']['FieldValue'];
    }

    /**
     * Sets the value of the PublicIp.
     * 
     * @param string or an array of string PublicIp
     * @return this instance
     */
    public function setPublicIp($publicIp) 
    {
        if (!$this->_isNumericArray($publicIp)) {
            $publicIp =  array ($publicIp);    
        }
        $this->_fields['PublicIp']['FieldValue'] = $publicIp;
        return $this;
    }
  

    /**
     * Sets single or multiple values of PublicIp list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withPublicIp($publicIp1, $publicIp2)</code>
     * 
     * @param string  $stringArgs one or more PublicIp
     * @return Amazon_EC2_Model_DescribeAddressesRequest  instance
     */
    public function withPublicIp($stringArgs)
    {
        foreach (func_get_args() as $publicIp) {
            $this->_fields['PublicIp']['FieldValue'][] = $publicIp;
        }
        return $this;
    }  
      

    /**
     * Checks if PublicIp list is non-empty
     * 
     * @return bool true if PublicIp list is non-empty
     */
    public function isSetPublicIp()
    {
        return count ($this->_fields['PublicIp']['FieldValue']) > 0;
    }




}