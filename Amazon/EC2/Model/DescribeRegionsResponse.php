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
 * Amazon_EC2_Model_DescribeRegionsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>DescribeRegionsResult: Amazon_EC2_Model_DescribeRegionsResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeRegionsResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeRegionsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>DescribeRegionsResult: Amazon_EC2_Model_DescribeRegionsResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'DescribeRegionsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_DescribeRegionsResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_DescribeRegionsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_DescribeRegionsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:DescribeRegionsResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_DescribeRegionsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_DescribeRegionsResponse from provided XML. 
                                  Make sure that DescribeRegionsResponse is a root element");
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
     * @return Amazon_EC2_Model_DescribeRegionsResponse instance
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
     * Gets the value of the DescribeRegionsResult.
     * 
     * @return DescribeRegionsResult DescribeRegionsResult
     */
    public function getDescribeRegionsResult() 
    {
        return $this->_fields['DescribeRegionsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeRegionsResult.
     * 
     * @param DescribeRegionsResult DescribeRegionsResult
     * @return void
     */
    public function setDescribeRegionsResult($value) 
    {
        $this->_fields['DescribeRegionsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeRegionsResult  and returns this instance
     * 
     * @param DescribeRegionsResult $value DescribeRegionsResult
     * @return Amazon_EC2_Model_DescribeRegionsResponse instance
     */
    public function withDescribeRegionsResult($value)
    {
        $this->setDescribeRegionsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeRegionsResult  is set
     * 
     * @return bool true if DescribeRegionsResult property is set
     */
    public function isSetDescribeRegionsResult()
    {
        return !is_null($this->_fields['DescribeRegionsResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<DescribeRegionsResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeRegionsResponse>";
        return $xml;
    }

}