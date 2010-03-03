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
 * Amazon_EC2_Model_CreateKeyPairResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>CreateKeyPairResult: Amazon_EC2_Model_CreateKeyPairResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateKeyPairResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateKeyPairResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>CreateKeyPairResult: Amazon_EC2_Model_CreateKeyPairResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'CreateKeyPairResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_CreateKeyPairResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_CreateKeyPairResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_CreateKeyPairResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:CreateKeyPairResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_CreateKeyPairResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_CreateKeyPairResponse from provided XML. 
                                  Make sure that CreateKeyPairResponse is a root element");
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
     * @return Amazon_EC2_Model_CreateKeyPairResponse instance
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
     * Gets the value of the CreateKeyPairResult.
     * 
     * @return CreateKeyPairResult CreateKeyPairResult
     */
    public function getCreateKeyPairResult() 
    {
        return $this->_fields['CreateKeyPairResult']['FieldValue'];
    }

    /**
     * Sets the value of the CreateKeyPairResult.
     * 
     * @param CreateKeyPairResult CreateKeyPairResult
     * @return void
     */
    public function setCreateKeyPairResult($value) 
    {
        $this->_fields['CreateKeyPairResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CreateKeyPairResult  and returns this instance
     * 
     * @param CreateKeyPairResult $value CreateKeyPairResult
     * @return Amazon_EC2_Model_CreateKeyPairResponse instance
     */
    public function withCreateKeyPairResult($value)
    {
        $this->setCreateKeyPairResult($value);
        return $this;
    }


    /**
     * Checks if CreateKeyPairResult  is set
     * 
     * @return bool true if CreateKeyPairResult property is set
     */
    public function isSetCreateKeyPairResult()
    {
        return !is_null($this->_fields['CreateKeyPairResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<CreateKeyPairResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateKeyPairResponse>";
        return $xml;
    }

}