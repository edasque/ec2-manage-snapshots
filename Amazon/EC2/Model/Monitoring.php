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
 * Amazon_EC2_Model_Monitoring
 * 
 * Properties:
 * <ul>
 * 
 * <li>MonitoringState: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Monitoring extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Monitoring
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MonitoringState: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MonitoringState' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the MonitoringState property.
     * 
     * @return string MonitoringState
     */
    public function getMonitoringState() 
    {
        return $this->_fields['MonitoringState']['FieldValue'];
    }

    /**
     * Sets the value of the MonitoringState property.
     * 
     * @param string MonitoringState
     * @return this instance
     */
    public function setMonitoringState($value) 
    {
        $this->_fields['MonitoringState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MonitoringState and returns this instance
     * 
     * @param string $value MonitoringState
     * @return Amazon_EC2_Model_Monitoring instance
     */
    public function withMonitoringState($value)
    {
        $this->setMonitoringState($value);
        return $this;
    }


    /**
     * Checks if MonitoringState is set
     * 
     * @return bool true if MonitoringState  is set
     */
    public function isSetMonitoringState()
    {
        return !is_null($this->_fields['MonitoringState']['FieldValue']);
    }




}