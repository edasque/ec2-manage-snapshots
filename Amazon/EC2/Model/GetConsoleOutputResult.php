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
 * Amazon_EC2_Model_GetConsoleOutputResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ConsoleOutput: Amazon_EC2_Model_ConsoleOutput</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_GetConsoleOutputResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_GetConsoleOutputResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ConsoleOutput: Amazon_EC2_Model_ConsoleOutput</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ConsoleOutput' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ConsoleOutput'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ConsoleOutput.
     * 
     * @return ConsoleOutput ConsoleOutput
     */
    public function getConsoleOutput() 
    {
        return $this->_fields['ConsoleOutput']['FieldValue'];
    }

    /**
     * Sets the value of the ConsoleOutput.
     * 
     * @param ConsoleOutput ConsoleOutput
     * @return void
     */
    public function setConsoleOutput($value) 
    {
        $this->_fields['ConsoleOutput']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ConsoleOutput  and returns this instance
     * 
     * @param ConsoleOutput $value ConsoleOutput
     * @return Amazon_EC2_Model_GetConsoleOutputResult instance
     */
    public function withConsoleOutput($value)
    {
        $this->setConsoleOutput($value);
        return $this;
    }


    /**
     * Checks if ConsoleOutput  is set
     * 
     * @return bool true if ConsoleOutput property is set
     */
    public function isSetConsoleOutput()
    {
        return !is_null($this->_fields['ConsoleOutput']['FieldValue']);

    }




}