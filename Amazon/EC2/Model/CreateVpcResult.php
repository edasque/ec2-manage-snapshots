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
 * Amazon_EC2_Model_CreateVpcResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Vpc: Amazon_EC2_Model_Vpc</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateVpcResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateVpcResult
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
        'Vpc' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Vpc'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Vpc.
     * 
     * @return Vpc Vpc
     */
    public function getVpc() 
    {
        return $this->_fields['Vpc']['FieldValue'];
    }

    /**
     * Sets the value of the Vpc.
     * 
     * @param Vpc Vpc
     * @return void
     */
    public function setVpc($value) 
    {
        $this->_fields['Vpc']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Vpc  and returns this instance
     * 
     * @param Vpc $value Vpc
     * @return Amazon_EC2_Model_CreateVpcResult instance
     */
    public function withVpc($value)
    {
        $this->setVpc($value);
        return $this;
    }


    /**
     * Checks if Vpc  is set
     * 
     * @return bool true if Vpc property is set
     */
    public function isSetVpc()
    {
        return !is_null($this->_fields['Vpc']['FieldValue']);

    }




}