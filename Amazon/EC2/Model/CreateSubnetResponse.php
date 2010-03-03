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
 * Amazon_EC2_Model_CreateSubnetResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>CreateSubnetResult: Amazon_EC2_Model_CreateSubnetResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateSubnetResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateSubnetResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>CreateSubnetResult: Amazon_EC2_Model_CreateSubnetResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'CreateSubnetResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_CreateSubnetResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_CreateSubnetResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_CreateSubnetResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:CreateSubnetResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_CreateSubnetResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_CreateSubnetResponse from provided XML. 
                                  Make sure that CreateSubnetResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return Amazon_EC2_Model_CreateSubnetResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);

    }

    /**
     * Gets the value of the CreateSubnetResult.
     * 
     * @return CreateSubnetResult CreateSubnetResult
     */
    public function getCreateSubnetResult() 
    {
        return $this->_fields['CreateSubnetResult']['FieldValue'];
    }

    /**
     * Sets the value of the CreateSubnetResult.
     * 
     * @param CreateSubnetResult CreateSubnetResult
     * @return void
     */
    public function setCreateSubnetResult($value) 
    {
        $this->_fields['CreateSubnetResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CreateSubnetResult  and returns this instance
     * 
     * @param CreateSubnetResult $value CreateSubnetResult
     * @return Amazon_EC2_Model_CreateSubnetResponse instance
     */
    public function withCreateSubnetResult($value)
    {
        $this->setCreateSubnetResult($value);
        return $this;
    }


    /**
     * Checks if CreateSubnetResult  is set
     * 
     * @return bool true if CreateSubnetResult property is set
     */
    public function isSetCreateSubnetResult()
    {
        return !is_null($this->_fields['CreateSubnetResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<CreateSubnetResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateSubnetResponse>";
        return $xml;
    }

}