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
 * Amazon_EC2_Model_ConfirmProductInstanceResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 * <li>ConfirmProductInstanceResult: Amazon_EC2_Model_ConfirmProductInstanceResult</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ConfirmProductInstanceResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ConfirmProductInstanceResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     * <li>ConfirmProductInstanceResult: Amazon_EC2_Model_ConfirmProductInstanceResult</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        'ConfirmProductInstanceResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ConfirmProductInstanceResult'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_ConfirmProductInstanceResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_ConfirmProductInstanceResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:ConfirmProductInstanceResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_ConfirmProductInstanceResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_ConfirmProductInstanceResponse from provided XML. 
                                  Make sure that ConfirmProductInstanceResponse is a root element");
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
     * @return Amazon_EC2_Model_ConfirmProductInstanceResponse instance
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
     * Gets the value of the ConfirmProductInstanceResult.
     * 
     * @return ConfirmProductInstanceResult ConfirmProductInstanceResult
     */
    public function getConfirmProductInstanceResult() 
    {
        return $this->_fields['ConfirmProductInstanceResult']['FieldValue'];
    }

    /**
     * Sets the value of the ConfirmProductInstanceResult.
     * 
     * @param ConfirmProductInstanceResult ConfirmProductInstanceResult
     * @return void
     */
    public function setConfirmProductInstanceResult($value) 
    {
        $this->_fields['ConfirmProductInstanceResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ConfirmProductInstanceResult  and returns this instance
     * 
     * @param ConfirmProductInstanceResult $value ConfirmProductInstanceResult
     * @return Amazon_EC2_Model_ConfirmProductInstanceResponse instance
     */
    public function withConfirmProductInstanceResult($value)
    {
        $this->setConfirmProductInstanceResult($value);
        return $this;
    }


    /**
     * Checks if ConfirmProductInstanceResult  is set
     * 
     * @return bool true if ConfirmProductInstanceResult property is set
     */
    public function isSetConfirmProductInstanceResult()
    {
        return !is_null($this->_fields['ConfirmProductInstanceResult']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<ConfirmProductInstanceResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ConfirmProductInstanceResponse>";
        return $xml;
    }

}