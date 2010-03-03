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
 * Amazon_EC2_Model_StopInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>StoppingInstances: Amazon_EC2_Model_InstanceStateChange</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_StopInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_StopInstancesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>StoppingInstances: Amazon_EC2_Model_InstanceStateChange</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'StoppingInstances' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_InstanceStateChange')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the StoppingInstances.
     * 
     * @return array of InstanceStateChange StoppingInstances
     */
    public function getStoppingInstances() 
    {
        return $this->_fields['StoppingInstances']['FieldValue'];
    }

    /**
     * Sets the value of the StoppingInstances.
     * 
     * @param mixed InstanceStateChange or an array of InstanceStateChange StoppingInstances
     * @return this instance
     */
    public function setStoppingInstances($stoppingInstances) 
    {
        if (!$this->_isNumericArray($stoppingInstances)) {
            $stoppingInstances =  array ($stoppingInstances);    
        }
        $this->_fields['StoppingInstances']['FieldValue'] = $stoppingInstances;
        return $this;
    }


    /**
     * Sets single or multiple values of StoppingInstances list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withStoppingInstances($stoppingInstances1, $stoppingInstances2)</code>
     * 
     * @param InstanceStateChange  $instanceStateChangeArgs one or more StoppingInstances
     * @return Amazon_EC2_Model_StopInstancesResult  instance
     */
    public function withStoppingInstances($instanceStateChangeArgs)
    {
        foreach (func_get_args() as $stoppingInstances) {
            $this->_fields['StoppingInstances']['FieldValue'][] = $stoppingInstances;
        }
        return $this;
    }   



    /**
     * Checks if StoppingInstances list is non-empty
     * 
     * @return bool true if StoppingInstances list is non-empty
     */
    public function isSetStoppingInstances()
    {
        return count ($this->_fields['StoppingInstances']['FieldValue']) > 0;
    }




}