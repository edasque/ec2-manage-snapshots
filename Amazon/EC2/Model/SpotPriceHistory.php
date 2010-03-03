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
 * Amazon_EC2_Model_SpotPriceHistory
 * 
 * Properties:
 * <ul>
 * 
 * <li>InstanceType: string</li>
 * <li>ProductDescription: string</li>
 * <li>SpotPrice: string</li>
 * <li>Timestamp: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_SpotPriceHistory extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_SpotPriceHistory
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>InstanceType: string</li>
     * <li>ProductDescription: string</li>
     * <li>SpotPrice: string</li>
     * <li>Timestamp: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'InstanceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductDescription' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SpotPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the InstanceType property.
     * 
     * @return string InstanceType
     */
    public function getInstanceType() 
    {
        return $this->_fields['InstanceType']['FieldValue'];
    }

    /**
     * Sets the value of the InstanceType property.
     * 
     * @param string InstanceType
     * @return this instance
     */
    public function setInstanceType($value) 
    {
        $this->_fields['InstanceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the InstanceType and returns this instance
     * 
     * @param string $value InstanceType
     * @return Amazon_EC2_Model_SpotPriceHistory instance
     */
    public function withInstanceType($value)
    {
        $this->setInstanceType($value);
        return $this;
    }


    /**
     * Checks if InstanceType is set
     * 
     * @return bool true if InstanceType  is set
     */
    public function isSetInstanceType()
    {
        return !is_null($this->_fields['InstanceType']['FieldValue']);
    }

    /**
     * Gets the value of the ProductDescription property.
     * 
     * @return string ProductDescription
     */
    public function getProductDescription() 
    {
        return $this->_fields['ProductDescription']['FieldValue'];
    }

    /**
     * Sets the value of the ProductDescription property.
     * 
     * @param string ProductDescription
     * @return this instance
     */
    public function setProductDescription($value) 
    {
        $this->_fields['ProductDescription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProductDescription and returns this instance
     * 
     * @param string $value ProductDescription
     * @return Amazon_EC2_Model_SpotPriceHistory instance
     */
    public function withProductDescription($value)
    {
        $this->setProductDescription($value);
        return $this;
    }


    /**
     * Checks if ProductDescription is set
     * 
     * @return bool true if ProductDescription  is set
     */
    public function isSetProductDescription()
    {
        return !is_null($this->_fields['ProductDescription']['FieldValue']);
    }

    /**
     * Gets the value of the SpotPrice property.
     * 
     * @return string SpotPrice
     */
    public function getSpotPrice() 
    {
        return $this->_fields['SpotPrice']['FieldValue'];
    }

    /**
     * Sets the value of the SpotPrice property.
     * 
     * @param string SpotPrice
     * @return this instance
     */
    public function setSpotPrice($value) 
    {
        $this->_fields['SpotPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SpotPrice and returns this instance
     * 
     * @param string $value SpotPrice
     * @return Amazon_EC2_Model_SpotPriceHistory instance
     */
    public function withSpotPrice($value)
    {
        $this->setSpotPrice($value);
        return $this;
    }


    /**
     * Checks if SpotPrice is set
     * 
     * @return bool true if SpotPrice  is set
     */
    public function isSetSpotPrice()
    {
        return !is_null($this->_fields['SpotPrice']['FieldValue']);
    }

    /**
     * Gets the value of the Timestamp property.
     * 
     * @return string Timestamp
     */
    public function getTimestamp() 
    {
        return $this->_fields['Timestamp']['FieldValue'];
    }

    /**
     * Sets the value of the Timestamp property.
     * 
     * @param string Timestamp
     * @return this instance
     */
    public function setTimestamp($value) 
    {
        $this->_fields['Timestamp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Timestamp and returns this instance
     * 
     * @param string $value Timestamp
     * @return Amazon_EC2_Model_SpotPriceHistory instance
     */
    public function withTimestamp($value)
    {
        $this->setTimestamp($value);
        return $this;
    }


    /**
     * Checks if Timestamp is set
     * 
     * @return bool true if Timestamp  is set
     */
    public function isSetTimestamp()
    {
        return !is_null($this->_fields['Timestamp']['FieldValue']);
    }




}