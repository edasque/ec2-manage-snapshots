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
 * Amazon_EC2_Model_DescribeSubnetsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Subnet: Amazon_EC2_Model_Subnet</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSubnetsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSubnetsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Subnet: Amazon_EC2_Model_Subnet</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Subnet' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Subnet')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Subnet.
     * 
     * @return array of Subnet Subnet
     */
    public function getSubnet() 
    {
        return $this->_fields['Subnet']['FieldValue'];
    }

    /**
     * Sets the value of the Subnet.
     * 
     * @param mixed Subnet or an array of Subnet Subnet
     * @return this instance
     */
    public function setSubnet($subnet) 
    {
        if (!$this->_isNumericArray($subnet)) {
            $subnet =  array ($subnet);    
        }
        $this->_fields['Subnet']['FieldValue'] = $subnet;
        return $this;
    }


    /**
     * Sets single or multiple values of Subnet list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSubnet($subnet1, $subnet2)</code>
     * 
     * @param Subnet  $subnetArgs one or more Subnet
     * @return Amazon_EC2_Model_DescribeSubnetsResult  instance
     */
    public function withSubnet($subnetArgs)
    {
        foreach (func_get_args() as $subnet) {
            $this->_fields['Subnet']['FieldValue'][] = $subnet;
        }
        return $this;
    }   



    /**
     * Checks if Subnet list is non-empty
     * 
     * @return bool true if Subnet list is non-empty
     */
    public function isSetSubnet()
    {
        return count ($this->_fields['Subnet']['FieldValue']) > 0;
    }




}