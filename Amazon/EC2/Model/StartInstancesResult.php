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
 * Amazon_EC2_Model_StartInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>StartingInstances: Amazon_EC2_Model_InstanceStateChange</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_StartInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_StartInstancesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>StartingInstances: Amazon_EC2_Model_InstanceStateChange</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'StartingInstances' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_InstanceStateChange')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the StartingInstances.
     * 
     * @return array of InstanceStateChange StartingInstances
     */
    public function getStartingInstances() 
    {
        return $this->_fields['StartingInstances']['FieldValue'];
    }

    /**
     * Sets the value of the StartingInstances.
     * 
     * @param mixed InstanceStateChange or an array of InstanceStateChange StartingInstances
     * @return this instance
     */
    public function setStartingInstances($startingInstances) 
    {
        if (!$this->_isNumericArray($startingInstances)) {
            $startingInstances =  array ($startingInstances);    
        }
        $this->_fields['StartingInstances']['FieldValue'] = $startingInstances;
        return $this;
    }


    /**
     * Sets single or multiple values of StartingInstances list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withStartingInstances($startingInstances1, $startingInstances2)</code>
     * 
     * @param InstanceStateChange  $instanceStateChangeArgs one or more StartingInstances
     * @return Amazon_EC2_Model_StartInstancesResult  instance
     */
    public function withStartingInstances($instanceStateChangeArgs)
    {
        foreach (func_get_args() as $startingInstances) {
            $this->_fields['StartingInstances']['FieldValue'][] = $startingInstances;
        }
        return $this;
    }   



    /**
     * Checks if StartingInstances list is non-empty
     * 
     * @return bool true if StartingInstances list is non-empty
     */
    public function isSetStartingInstances()
    {
        return count ($this->_fields['StartingInstances']['FieldValue']) > 0;
    }




}