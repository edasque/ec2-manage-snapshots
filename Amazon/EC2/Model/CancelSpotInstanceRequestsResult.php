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
 * Amazon_EC2_Model_CancelSpotInstanceRequestsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>CancelledSpotInstanceRequest: Amazon_EC2_Model_CancelledSpotInstanceRequest</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CancelSpotInstanceRequestsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CancelSpotInstanceRequestsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CancelledSpotInstanceRequest: Amazon_EC2_Model_CancelledSpotInstanceRequest</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CancelledSpotInstanceRequest' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_CancelledSpotInstanceRequest')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CancelledSpotInstanceRequest.
     * 
     * @return array of CancelledSpotInstanceRequest CancelledSpotInstanceRequest
     */
    public function getCancelledSpotInstanceRequest() 
    {
        return $this->_fields['CancelledSpotInstanceRequest']['FieldValue'];
    }

    /**
     * Sets the value of the CancelledSpotInstanceRequest.
     * 
     * @param mixed CancelledSpotInstanceRequest or an array of CancelledSpotInstanceRequest CancelledSpotInstanceRequest
     * @return this instance
     */
    public function setCancelledSpotInstanceRequest($cancelledSpotInstanceRequest) 
    {
        if (!$this->_isNumericArray($cancelledSpotInstanceRequest)) {
            $cancelledSpotInstanceRequest =  array ($cancelledSpotInstanceRequest);    
        }
        $this->_fields['CancelledSpotInstanceRequest']['FieldValue'] = $cancelledSpotInstanceRequest;
        return $this;
    }


    /**
     * Sets single or multiple values of CancelledSpotInstanceRequest list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withCancelledSpotInstanceRequest($cancelledSpotInstanceRequest1, $cancelledSpotInstanceRequest2)</code>
     * 
     * @param CancelledSpotInstanceRequest  $cancelledSpotInstanceRequestArgs one or more CancelledSpotInstanceRequest
     * @return Amazon_EC2_Model_CancelSpotInstanceRequestsResult  instance
     */
    public function withCancelledSpotInstanceRequest($cancelledSpotInstanceRequestArgs)
    {
        foreach (func_get_args() as $cancelledSpotInstanceRequest) {
            $this->_fields['CancelledSpotInstanceRequest']['FieldValue'][] = $cancelledSpotInstanceRequest;
        }
        return $this;
    }   



    /**
     * Checks if CancelledSpotInstanceRequest list is non-empty
     * 
     * @return bool true if CancelledSpotInstanceRequest list is non-empty
     */
    public function isSetCancelledSpotInstanceRequest()
    {
        return count ($this->_fields['CancelledSpotInstanceRequest']['FieldValue']) > 0;
    }




}