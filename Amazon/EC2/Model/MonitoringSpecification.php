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
 * Amazon_EC2_Model_MonitoringSpecification
 * 
 * Properties:
 * <ul>
 * 
 * <li>Enabled: bool</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_MonitoringSpecification extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_MonitoringSpecification
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Enabled: bool</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Enabled' => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Enabled property.
     * 
     * @return bool Enabled
     */
    public function getEnabled() 
    {
        return $this->_fields['Enabled']['FieldValue'];
    }

    /**
     * Sets the value of the Enabled property.
     * 
     * @param bool Enabled
     * @return this instance
     */
    public function setEnabled($value) 
    {
        $this->_fields['Enabled']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Enabled and returns this instance
     * 
     * @param bool $value Enabled
     * @return Amazon_EC2_Model_MonitoringSpecification instance
     */
    public function withEnabled($value)
    {
        $this->setEnabled($value);
        return $this;
    }


    /**
     * Checks if Enabled is set
     * 
     * @return bool true if Enabled  is set
     */
    public function isSetEnabled()
    {
        return !is_null($this->_fields['Enabled']['FieldValue']);
    }




}