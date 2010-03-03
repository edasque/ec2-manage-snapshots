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
 * Amazon_EC2_Model_MonitorInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceMonitoring: Amazon_EC2_Model_InstanceMonitoring</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_MonitorInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_MonitorInstancesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceMonitoring: Amazon_EC2_Model_InstanceMonitoring</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceMonitoring' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_InstanceMonitoring')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceMonitoring.
     * 
     * @return array of InstanceMonitoring InstanceMonitoring
     */
    public function getInstanceMonitoring() 
    {
        return $this->_fields['InstanceMonitoring']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceMonitoring.
     * 
     * @param mixed InstanceMonitoring or an array of InstanceMonitoring InstanceMonitoring
     * @return this instance
     */
    public function setInstanceMonitoring($instanceMonitoring) 
    {
        if (!$this->_isNumericArray($instanceMonitoring)) {
            $instanceMonitoring =  array ($instanceMonitoring);    
        }
        $this->_fields['InstanceMonitoring']['FieldValue'] = $instanceMonitoring;
        return $this;
    }


    /**
     * Sets single or multiple values of InstanceMonitoring list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withInstanceMonitoring($instanceMonitoring1, $instanceMonitoring2)</code>
     * 
     * @param InstanceMonitoring  $instanceMonitoringArgs one or more InstanceMonitoring
     * @return Amazon_EC2_Model_MonitorInstancesResult  instance
     */
    public function withInstanceMonitoring($instanceMonitoringArgs)
    {
        foreach (func_get_args() as $instanceMonitoring) {
            $this->_fields['InstanceMonitoring']['FieldValue'][] = $instanceMonitoring;
        }
        return $this;
    }   



    /**
     * Checks if InstanceMonitoring list is non-empty
     * 
     * @return bool true if InstanceMonitoring list is non-empty
     */
    public function isSetInstanceMonitoring()
    {
        return count ($this->_fields['InstanceMonitoring']['FieldValue']) > 0;
    }




}