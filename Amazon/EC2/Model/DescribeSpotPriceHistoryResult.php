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
 * Amazon_EC2_Model_DescribeSpotPriceHistoryResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SpotPriceHistory: Amazon_EC2_Model_SpotPriceHistory</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSpotPriceHistoryResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSpotPriceHistoryResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SpotPriceHistory: Amazon_EC2_Model_SpotPriceHistory</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SpotPriceHistory' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_SpotPriceHistory')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SpotPriceHistory.
     * 
     * @return array of SpotPriceHistory SpotPriceHistory
     */
    public function getSpotPriceHistory() 
    {
        return $this->_fields['SpotPriceHistory']['FieldValue'];
    }

    /**
     * Sets the value of the SpotPriceHistory.
     * 
     * @param mixed SpotPriceHistory or an array of SpotPriceHistory SpotPriceHistory
     * @return this instance
     */
    public function setSpotPriceHistory($spotPriceHistory) 
    {
        if (!$this->_isNumericArray($spotPriceHistory)) {
            $spotPriceHistory =  array ($spotPriceHistory);    
        }
        $this->_fields['SpotPriceHistory']['FieldValue'] = $spotPriceHistory;
        return $this;
    }


    /**
     * Sets single or multiple values of SpotPriceHistory list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSpotPriceHistory($spotPriceHistory1, $spotPriceHistory2)</code>
     * 
     * @param SpotPriceHistory  $spotPriceHistoryArgs one or more SpotPriceHistory
     * @return Amazon_EC2_Model_DescribeSpotPriceHistoryResult  instance
     */
    public function withSpotPriceHistory($spotPriceHistoryArgs)
    {
        foreach (func_get_args() as $spotPriceHistory) {
            $this->_fields['SpotPriceHistory']['FieldValue'][] = $spotPriceHistory;
        }
        return $this;
    }   



    /**
     * Checks if SpotPriceHistory list is non-empty
     * 
     * @return bool true if SpotPriceHistory list is non-empty
     */
    public function isSetSpotPriceHistory()
    {
        return count ($this->_fields['SpotPriceHistory']['FieldValue']) > 0;
    }




}