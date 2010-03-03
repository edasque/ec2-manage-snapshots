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
 * Amazon_EC2_Model_AttachVpnGatewayResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>AttachVpnGatewayResult: Amazon_EC2_Model_AttachVpnGatewayResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_AttachVpnGatewayResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_AttachVpnGatewayResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>AttachVpnGatewayResult: Amazon_EC2_Model_AttachVpnGatewayResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'AttachVpnGatewayResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_AttachVpnGatewayResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_AttachVpnGatewayResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_AttachVpnGatewayResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:AttachVpnGatewayResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_AttachVpnGatewayResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_AttachVpnGatewayResponse from provided XML. 
                                  Make sure that AttachVpnGatewayResponse is a root element");
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
     * @return Amazon_EC2_Model_AttachVpnGatewayResponse instance
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
     * Gets the value of the AttachVpnGatewayResult.
     * 
     * @return AttachVpnGatewayResult AttachVpnGatewayResult
     */
    public function getAttachVpnGatewayResult() 
    {
        return $this->_fields['AttachVpnGatewayResult']['FieldValue'];
    }

    /**
     * Sets the value of the AttachVpnGatewayResult.
     * 
     * @param AttachVpnGatewayResult AttachVpnGatewayResult
     * @return void
     */
    public function setAttachVpnGatewayResult($value) 
    {
        $this->_fields['AttachVpnGatewayResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the AttachVpnGatewayResult  and returns this instance
     * 
     * @param AttachVpnGatewayResult $value AttachVpnGatewayResult
     * @return Amazon_EC2_Model_AttachVpnGatewayResponse instance
     */
    public function withAttachVpnGatewayResult($value)
    {
        $this->setAttachVpnGatewayResult($value);
        return $this;
    }


    /**
     * Checks if AttachVpnGatewayResult  is set
     * 
     * @return bool true if AttachVpnGatewayResult property is set
     */
    public function isSetAttachVpnGatewayResult()
    {
        return !is_null($this->_fields['AttachVpnGatewayResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<AttachVpnGatewayResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</AttachVpnGatewayResponse>";
        return $xml;
    }

}