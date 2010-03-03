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
 * Amazon_EC2_Model_DescribeAvailabilityZonesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>AvailabilityZone: Amazon_EC2_Model_AvailabilityZone</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeAvailabilityZonesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeAvailabilityZonesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>AvailabilityZone: Amazon_EC2_Model_AvailabilityZone</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'AvailabilityZone' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_AvailabilityZone')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the AvailabilityZone.
     * 
     * @return array of AvailabilityZone AvailabilityZone
     */
    public function getAvailabilityZone() 
    {
        return $this->_fields['AvailabilityZone']['FieldValue'];
    }

    /**
     * Sets the value of the AvailabilityZone.
     * 
     * @param mixed AvailabilityZone or an array of AvailabilityZone AvailabilityZone
     * @return this instance
     */
    public function setAvailabilityZone($availabilityZone) 
    {
        if (!$this->_isNumericArray($availabilityZone)) {
            $availabilityZone =  array ($availabilityZone);    
        }
        $this->_fields['AvailabilityZone']['FieldValue'] = $availabilityZone;
        return $this;
    }


    /**
     * Sets single or multiple values of AvailabilityZone list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAvailabilityZone($availabilityZone1, $availabilityZone2)</code>
     * 
     * @param AvailabilityZone  $availabilityZoneArgs one or more AvailabilityZone
     * @return Amazon_EC2_Model_DescribeAvailabilityZonesResult  instance
     */
    public function withAvailabilityZone($availabilityZoneArgs)
    {
        foreach (func_get_args() as $availabilityZone) {
            $this->_fields['AvailabilityZone']['FieldValue'][] = $availabilityZone;
        }
        return $this;
    }   



    /**
     * Checks if AvailabilityZone list is non-empty
     * 
     * @return bool true if AvailabilityZone list is non-empty
     */
    public function isSetAvailabilityZone()
    {
        return count ($this->_fields['AvailabilityZone']['FieldValue']) > 0;
    }




}