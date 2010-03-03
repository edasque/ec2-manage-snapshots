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
 * Amazon_EC2_Model_Region
 * 
 * Properties:
 * <ul>
 * 
 * <li>RegionName: string</li>
 * <li>Endpoint: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Region extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Region
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>RegionName: string</li>
     * <li>Endpoint: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'RegionName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Endpoint' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the RegionName property.
     * 
     * @return string RegionName
     */
    public function getRegionName() 
    {
        return $this->_fields['RegionName']['FieldValue'];
    }

    /**
     * Sets the value of the RegionName property.
     * 
     * @param string RegionName
     * @return this instance
     */
    public function setRegionName($value) 
    {
        $this->_fields['RegionName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RegionName and returns this instance
     * 
     * @param string $value RegionName
     * @return Amazon_EC2_Model_Region instance
     */
    public function withRegionName($value)
    {
        $this->setRegionName($value);
        return $this;
    }


    /**
     * Checks if RegionName is set
     * 
     * @return bool true if RegionName  is set
     */
    public function isSetRegionName()
    {
        return !is_null($this->_fields['RegionName']['FieldValue']);
    }

    /**
     * Gets the value of the Endpoint property.
     * 
     * @return string Endpoint
     */
    public function getEndpoint() 
    {
        return $this->_fields['Endpoint']['FieldValue'];
    }

    /**
     * Sets the value of the Endpoint property.
     * 
     * @param string Endpoint
     * @return this instance
     */
    public function setEndpoint($value) 
    {
        $this->_fields['Endpoint']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Endpoint and returns this instance
     * 
     * @param string $value Endpoint
     * @return Amazon_EC2_Model_Region instance
     */
    public function withEndpoint($value)
    {
        $this->setEndpoint($value);
        return $this;
    }


    /**
     * Checks if Endpoint is set
     * 
     * @return bool true if Endpoint  is set
     */
    public function isSetEndpoint()
    {
        return !is_null($this->_fields['Endpoint']['FieldValue']);
    }




}