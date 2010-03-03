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
 * Amazon_EC2_Model_CreateSnapshotResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>CreateSnapshotResult: Amazon_EC2_Model_CreateSnapshotResult</li>
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateSnapshotResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateSnapshotResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CreateSnapshotResult: Amazon_EC2_Model_CreateSnapshotResult</li>
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CreateSnapshotResult' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_CreateSnapshotResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_CreateSnapshotResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_CreateSnapshotResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2009-11-30/');
        $response = $xpath->query('//a:CreateSnapshotResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_CreateSnapshotResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_CreateSnapshotResponse from provided XML. 
                                  Make sure that CreateSnapshotResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the CreateSnapshotResult.
     * 
     * @return CreateSnapshotResult CreateSnapshotResult
     */
    public function getCreateSnapshotResult() 
    {
        return $this->_fields['CreateSnapshotResult']['FieldValue'];
    }

    /**
     * Sets the value of the CreateSnapshotResult.
     * 
     * @param CreateSnapshotResult CreateSnapshotResult
     * @return void
     */
    public function setCreateSnapshotResult($value) 
    {
        $this->_fields['CreateSnapshotResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CreateSnapshotResult  and returns this instance
     * 
     * @param CreateSnapshotResult $value CreateSnapshotResult
     * @return Amazon_EC2_Model_CreateSnapshotResponse instance
     */
    public function withCreateSnapshotResult($value)
    {
        $this->setCreateSnapshotResult($value);
        return $this;
    }


    /**
     * Checks if CreateSnapshotResult  is set
     * 
     * @return bool true if CreateSnapshotResult property is set
     */
    public function isSetCreateSnapshotResult()
    {
        return !is_null($this->_fields['CreateSnapshotResult']['FieldValue']);

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
     * @return Amazon_EC2_Model_CreateSnapshotResponse instance
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
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<CreateSnapshotResponse xmlns=\"http://ec2.amazonaws.com/doc/2009-11-30/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateSnapshotResponse>";
        return $xml;
    }

}