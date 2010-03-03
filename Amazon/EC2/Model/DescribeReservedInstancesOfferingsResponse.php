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
 * Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>DescribeReservedInstancesOfferingsResult: Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>DescribeReservedInstancesOfferingsResult: Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'DescribeReservedInstancesOfferingsResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_DescribeReservedInstancesOfferingsResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:DescribeReservedInstancesOfferingsResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse from provided XML. 
                                  Make sure that DescribeReservedInstancesOfferingsResponse is a root element");
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
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse instance
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
     * Gets the value of the DescribeReservedInstancesOfferingsResult.
     * 
     * @return DescribeReservedInstancesOfferingsResult DescribeReservedInstancesOfferingsResult
     */
    public function getDescribeReservedInstancesOfferingsResult() 
    {
        return $this->_fields['DescribeReservedInstancesOfferingsResult']['FieldValue'];
    }

    /**
     * Sets the value of the DescribeReservedInstancesOfferingsResult.
     * 
     * @param DescribeReservedInstancesOfferingsResult DescribeReservedInstancesOfferingsResult
     * @return void
     */
    public function setDescribeReservedInstancesOfferingsResult($value) 
    {
        $this->_fields['DescribeReservedInstancesOfferingsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the DescribeReservedInstancesOfferingsResult  and returns this instance
     * 
     * @param DescribeReservedInstancesOfferingsResult $value DescribeReservedInstancesOfferingsResult
     * @return Amazon_EC2_Model_DescribeReservedInstancesOfferingsResponse instance
     */
    public function withDescribeReservedInstancesOfferingsResult($value)
    {
        $this->setDescribeReservedInstancesOfferingsResult($value);
        return $this;
    }


    /**
     * Checks if DescribeReservedInstancesOfferingsResult  is set
     * 
     * @return bool true if DescribeReservedInstancesOfferingsResult property is set
     */
    public function isSetDescribeReservedInstancesOfferingsResult()
    {
        return !is_null($this->_fields['DescribeReservedInstancesOfferingsResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<DescribeReservedInstancesOfferingsResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DescribeReservedInstancesOfferingsResponse>";
        return $xml;
    }

}