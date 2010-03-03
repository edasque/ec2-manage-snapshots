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
 * Amazon_EC2_Model_DescribeVpnConnectionsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>DescribeVpnConnectionsResult: Amazon_EC2_Model_DescribeVpnConnectionsResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeVpnConnectionsResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeVpnConnectionsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>DescribeVpnConnectionsResult: Amazon_EC2_Model_DescribeVpnConnectionsResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'DescribeVpnConnectionsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_DescribeVpnConnectionsResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_DescribeVpnConnectionsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_DescribeVpnConnectionsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:DescribeVpnConnectionsResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_DescribeVpnConnectionsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_DescribeVpnConnectionsResponse from provided XML. 
                                  Make sure that DescribeVpnConnectionsResponse is a root element");
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
     * @return Amazon_EC2_Model_DescribeVpnConnectionsResponse instance
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
     * Gets the value of the DescribeVpnConnectionsResult.
     * 
     * @return DescribeVpnConnectionsResult DescribeVpnConnectionsResult
     */
    public function getDescribeVpnConnectionsResult() 
    {
        return $this->_fields['DescribeVpnConnectionsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeVpnConnectionsResult.
     * 
     * @param DescribeVpnConnectionsResult DescribeVpnConnectionsResult
     * @return void
     */
    public function setDescribeVpnConnectionsResult($value) 
    {
        $this->_fields['DescribeVpnConnectionsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeVpnConnectionsResult  and returns this instance
     * 
     * @param DescribeVpnConnectionsResult $value DescribeVpnConnectionsResult
     * @return Amazon_EC2_Model_DescribeVpnConnectionsResponse instance
     */
    public function withDescribeVpnConnectionsResult($value)
    {
        $this->setDescribeVpnConnectionsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeVpnConnectionsResult  is set
     * 
     * @return bool true if DescribeVpnConnectionsResult property is set
     */
    public function isSetDescribeVpnConnectionsResult()
    {
        return !is_null($this->_fields['DescribeVpnConnectionsResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<DescribeVpnConnectionsResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeVpnConnectionsResponse>";
        return $xml;
    }

}