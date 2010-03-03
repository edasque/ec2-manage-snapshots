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
 * Amazon_EC2_Model_DescribeVpcsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Vpc: Amazon_EC2_Model_Vpc</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpcsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpcsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Vpc: Amazon_EC2_Model_Vpc</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Vpc' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Vpc')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Vpc.
     * 
     * @return array of Vpc Vpc
     */
    public function getVpc() 
    {
        return $this->_fields['Vpc']['FieldValue'];
    }

    /**
     * Sets the value of the Vpc.
     * 
     * @param mixed Vpc or an array of Vpc Vpc
     * @return this instance
     */
    public function setVpc($vpc) 
    {
        if (!$this->_isNumericArray($vpc)) {
            $vpc =  array ($vpc);    
        }
        $this->_fields['Vpc']['FieldValue'] = $vpc;
        return $this;
    }


    /**
     * Sets single or multiple values of Vpc list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withVpc($vpc1, $vpc2)</code>
     * 
     * @param Vpc  $vpcArgs one or more Vpc
     * @return Amazon_EC2_Model_DescribeVpcsResult  instance
     */
    public function withVpc($vpcArgs)
    {
        foreach (func_get_args() as $vpc) {
            $this->_fields['Vpc']['FieldValue'][] = $vpc;
        }
        return $this;
    }   



    /**
     * Checks if Vpc list is non-empty
     * 
     * @return bool true if Vpc list is non-empty
     */
    public function isSetVpc()
    {
        return count ($this->_fields['Vpc']['FieldValue']) > 0;
    }




}