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
 * Amazon_EC2_Model_TerminateInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>TerminatingInstance: Amazon_EC2_Model_InstanceStateChange</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_TerminateInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_TerminateInstancesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>TerminatingInstance: Amazon_EC2_Model_InstanceStateChange</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'TerminatingInstance' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_InstanceStateChange')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the TerminatingInstance.
     * 
     * @return array of InstanceStateChange TerminatingInstance
     */
    public function getTerminatingInstance() 
    {
        return $this->_fields['TerminatingInstance']['FieldValue'];
    }

    /**
     * Sets the value of the TerminatingInstance.
     * 
     * @param mixed InstanceStateChange or an array of InstanceStateChange TerminatingInstance
     * @return this instance
     */
    public function setTerminatingInstance($terminatingInstance) 
    {
        if (!$this->_isNumericArray($terminatingInstance)) {
            $terminatingInstance =  array ($terminatingInstance);    
        }
        $this->_fields['TerminatingInstance']['FieldValue'] = $terminatingInstance;
        return $this;
    }


    /**
     * Sets single or multiple values of TerminatingInstance list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withTerminatingInstance($terminatingInstance1, $terminatingInstance2)</code>
     * 
     * @param InstanceStateChange  $instanceStateChangeArgs one or more TerminatingInstance
     * @return Amazon_EC2_Model_TerminateInstancesResult  instance
     */
    public function withTerminatingInstance($instanceStateChangeArgs)
    {
        foreach (func_get_args() as $terminatingInstance) {
            $this->_fields['TerminatingInstance']['FieldValue'][] = $terminatingInstance;
        }
        return $this;
    }   



    /**
     * Checks if TerminatingInstance list is non-empty
     * 
     * @return bool true if TerminatingInstance list is non-empty
     */
    public function isSetTerminatingInstance()
    {
        return count ($this->_fields['TerminatingInstance']['FieldValue']) > 0;
    }




}