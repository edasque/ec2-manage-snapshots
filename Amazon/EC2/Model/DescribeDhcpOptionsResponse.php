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
 * Amazon_EC2_Model_DescribeDhcpOptionsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>DescribeDhcpOptionsResult: Amazon_EC2_Model_DescribeDhcpOptionsResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeDhcpOptionsResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeDhcpOptionsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>DescribeDhcpOptionsResult: Amazon_EC2_Model_DescribeDhcpOptionsResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'DescribeDhcpOptionsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_DescribeDhcpOptionsResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_DescribeDhcpOptionsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_DescribeDhcpOptionsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:DescribeDhcpOptionsResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_DescribeDhcpOptionsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_DescribeDhcpOptionsResponse from provided XML. 
                                  Make sure that DescribeDhcpOptionsResponse is a root element");
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
     * @return Amazon_EC2_Model_DescribeDhcpOptionsResponse instance
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
     * Gets the value of the DescribeDhcpOptionsResult.
     * 
     * @return DescribeDhcpOptionsResult DescribeDhcpOptionsResult
     */
    public function getDescribeDhcpOptionsResult() 
    {
        return $this->_fields['DescribeDhcpOptionsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeDhcpOptionsResult.
     * 
     * @param DescribeDhcpOptionsResult DescribeDhcpOptionsResult
     * @return void
     */
    public function setDescribeDhcpOptionsResult($value) 
    {
        $this->_fields['DescribeDhcpOptionsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeDhcpOptionsResult  and returns this instance
     * 
     * @param DescribeDhcpOptionsResult $value DescribeDhcpOptionsResult
     * @return Amazon_EC2_Model_DescribeDhcpOptionsResponse instance
     */
    public function withDescribeDhcpOptionsResult($value)
    {
        $this->setDescribeDhcpOptionsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeDhcpOptionsResult  is set
     * 
     * @return bool true if DescribeDhcpOptionsResult property is set
     */
    public function isSetDescribeDhcpOptionsResult()
    {
        return !is_null($this->_fields['DescribeDhcpOptionsResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<DescribeDhcpOptionsResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeDhcpOptionsResponse>";
        return $xml;
    }

}