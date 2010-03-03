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
 * Amazon_EC2_Model_DescribeSecurityGroupsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>DescribeSecurityGroupsResult: Amazon_EC2_Model_DescribeSecurityGroupsResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSecurityGroupsResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSecurityGroupsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>DescribeSecurityGroupsResult: Amazon_EC2_Model_DescribeSecurityGroupsResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'DescribeSecurityGroupsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_DescribeSecurityGroupsResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_DescribeSecurityGroupsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_DescribeSecurityGroupsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:DescribeSecurityGroupsResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_DescribeSecurityGroupsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_DescribeSecurityGroupsResponse from provided XML. 
                                  Make sure that DescribeSecurityGroupsResponse is a root element");
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
     * @return Amazon_EC2_Model_DescribeSecurityGroupsResponse instance
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
     * Gets the value of the DescribeSecurityGroupsResult.
     * 
     * @return DescribeSecurityGroupsResult DescribeSecurityGroupsResult
     */
    public function getDescribeSecurityGroupsResult() 
    {
        return $this->_fields['DescribeSecurityGroupsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeSecurityGroupsResult.
     * 
     * @param DescribeSecurityGroupsResult DescribeSecurityGroupsResult
     * @return void
     */
    public function setDescribeSecurityGroupsResult($value) 
    {
        $this->_fields['DescribeSecurityGroupsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeSecurityGroupsResult  and returns this instance
     * 
     * @param DescribeSecurityGroupsResult $value DescribeSecurityGroupsResult
     * @return Amazon_EC2_Model_DescribeSecurityGroupsResponse instance
     */
    public function withDescribeSecurityGroupsResult($value)
    {
        $this->setDescribeSecurityGroupsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeSecurityGroupsResult  is set
     * 
     * @return bool true if DescribeSecurityGroupsResult property is set
     */
    public function isSetDescribeSecurityGroupsResult()
    {
        return !is_null($this->_fields['DescribeSecurityGroupsResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<DescribeSecurityGroupsResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeSecurityGroupsResponse>";
        return $xml;
    }

}