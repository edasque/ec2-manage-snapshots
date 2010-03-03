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
 * Amazon_EC2_Model_DescribeKeyPairsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>KeyPair: Amazon_EC2_Model_KeyPair</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeKeyPairsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeKeyPairsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>KeyPair: Amazon_EC2_Model_KeyPair</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'KeyPair' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_KeyPair')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the KeyPair.
     * 
     * @return array of KeyPair KeyPair
     */
    public function getKeyPair() 
    {
        return $this->_fields['KeyPair']['FieldValue'];
    }

    /**
     * Sets the value of the KeyPair.
     * 
     * @param mixed KeyPair or an array of KeyPair KeyPair
     * @return this instance
     */
    public function setKeyPair($keyPair) 
    {
        if (!$this->_isNumericArray($keyPair)) {
            $keyPair =  array ($keyPair);    
        }
        $this->_fields['KeyPair']['FieldValue'] = $keyPair;
        return $this;
    }


    /**
     * Sets single or multiple values of KeyPair list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withKeyPair($keyPair1, $keyPair2)</code>
     * 
     * @param KeyPair  $keyPairArgs one or more KeyPair
     * @return Amazon_EC2_Model_DescribeKeyPairsResult  instance
     */
    public function withKeyPair($keyPairArgs)
    {
        foreach (func_get_args() as $keyPair) {
            $this->_fields['KeyPair']['FieldValue'][] = $keyPair;
        }
        return $this;
    }   



    /**
     * Checks if KeyPair list is non-empty
     * 
     * @return bool true if KeyPair list is non-empty
     */
    public function isSetKeyPair()
    {
        return count ($this->_fields['KeyPair']['FieldValue']) > 0;
    }




}