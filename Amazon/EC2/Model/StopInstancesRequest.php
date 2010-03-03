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
 * Amazon_EC2_Model_StopInstancesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceId: string</li>
 * <li>Force: bool</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_StopInstancesRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_StopInstancesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceId: string</li>
     * <li>Force: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Force' => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceId .
     * 
     * @return array of string InstanceId
     */
    public function getInstanceId() 
    {
        return $this->_fields['InstanceId']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceId.
     * 
     * @param string or an array of string InstanceId
     * @return this instance
     */
    public function setInstanceId($instanceId) 
    {
        if (!$this->_isNumericArray($instanceId)) {
            $instanceId =  array ($instanceId);    
        }
        $this->_fields['InstanceId']['FieldValue'] = $instanceId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of InstanceId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withInstanceId($instanceId1, $instanceId2)</code>
     * 
     * @param string  $stringArgs one or more InstanceId
     * @return Amazon_EC2_Model_StopInstancesRequest  instance
     */
    public function withInstanceId($stringArgs)
    {
        foreach (func_get_args() as $instanceId) {
            $this->_fields['InstanceId']['FieldValue'][] = $instanceId;
        }
        return $this;
    }  
      

    /**
     * Checks if InstanceId list is non-empty
     * 
     * @return bool true if InstanceId list is non-empty
     */
    public function isSetInstanceId()
    {
        return count ($this->_fields['InstanceId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the Force property.
     * 
     * @return bool Force
     */
    public function getForce() 
    {
        return $this->_fields['Force']['FieldValue'];
    }

    /**
     * Sets the value of the Force property.
     * 
     * @param bool Force
     * @return this instance
     */
    public function setForce($value) 
    {
        $this->_fields['Force']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Force and returns this instance
     * 
     * @param bool $value Force
     * @return Amazon_EC2_Model_StopInstancesRequest instance
     */
    public function withForce($value)
    {
        $this->setForce($value);
        return $this;
    }


    /**
     * Checks if Force is set
     * 
     * @return bool true if Force  is set
     */
    public function isSetForce()
    {
        return !is_null($this->_fields['Force']['FieldValue']);
    }




}