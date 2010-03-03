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
 * Amazon_EC2_Model_RequestSpotInstancesResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>RequestSpotInstancesResult: Amazon_EC2_Model_RequestSpotInstancesResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RequestSpotInstancesResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RequestSpotInstancesResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>RequestSpotInstancesResult: Amazon_EC2_Model_RequestSpotInstancesResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'RequestSpotInstancesResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_RequestSpotInstancesResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_RequestSpotInstancesResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_RequestSpotInstancesResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:RequestSpotInstancesResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_RequestSpotInstancesResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_RequestSpotInstancesResponse from provided XML. 
                                  Make sure that RequestSpotInstancesResponse is a root element");
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
     * @return Amazon_EC2_Model_RequestSpotInstancesResponse instance
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
     * Gets the value of the RequestSpotInstancesResult.
     * 
     * @return RequestSpotInstancesResult RequestSpotInstancesResult
     */
    public function getRequestSpotInstancesResult() 
    {
        return $this->_fields['RequestSpotInstancesResult']['FieldValue'];
    }

    /**
     * Sets the value of the RequestSpotInstancesResult.
     * 
     * @param RequestSpotInstancesResult RequestSpotInstancesResult
     * @return void
     */
    public function setRequestSpotInstancesResult($value) 
    {
        $this->_fields['RequestSpotInstancesResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the RequestSpotInstancesResult  and returns this instance
     * 
     * @param RequestSpotInstancesResult $value RequestSpotInstancesResult
     * @return Amazon_EC2_Model_RequestSpotInstancesResponse instance
     */
    public function withRequestSpotInstancesResult($value)
    {
        $this->setRequestSpotInstancesResult($value);
        return $this;
    }


    /**
     * Checks if RequestSpotInstancesResult  is set
     * 
     * @return bool true if RequestSpotInstancesResult property is set
     */
    public function isSetRequestSpotInstancesResult()
    {
        return !is_null($this->_fields['RequestSpotInstancesResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<RequestSpotInstancesResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</RequestSpotInstancesResponse>";
        return $xml;
    }

}