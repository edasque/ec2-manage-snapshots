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
 * Amazon_EC2_Model_RegisterImageResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>RegisterImageResult: Amazon_EC2_Model_RegisterImageResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RegisterImageResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RegisterImageResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>RegisterImageResult: Amazon_EC2_Model_RegisterImageResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'RegisterImageResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_RegisterImageResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_RegisterImageResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_RegisterImageResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:RegisterImageResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_RegisterImageResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_RegisterImageResponse from provided XML. 
                                  Make sure that RegisterImageResponse is a root element");
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
     * @return Amazon_EC2_Model_RegisterImageResponse instance
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
     * Gets the value of the RegisterImageResult.
     * 
     * @return RegisterImageResult RegisterImageResult
     */
    public function getRegisterImageResult() 
    {
        return $this->_fields['RegisterImageResult']['FieldValue'];
    }

    /**
     * Sets the value of the RegisterImageResult.
     * 
     * @param RegisterImageResult RegisterImageResult
     * @return void
     */
    public function setRegisterImageResult($value) 
    {
        $this->_fields['RegisterImageResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the RegisterImageResult  and returns this instance
     * 
     * @param RegisterImageResult $value RegisterImageResult
     * @return Amazon_EC2_Model_RegisterImageResponse instance
     */
    public function withRegisterImageResult($value)
    {
        $this->setRegisterImageResult($value);
        return $this;
    }


    /**
     * Checks if RegisterImageResult  is set
     * 
     * @return bool true if RegisterImageResult property is set
     */
    public function isSetRegisterImageResult()
    {
        return !is_null($this->_fields['RegisterImageResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<RegisterImageResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</RegisterImageResponse>";
        return $xml;
    }

}