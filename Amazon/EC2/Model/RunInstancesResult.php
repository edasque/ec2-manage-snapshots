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
 * Amazon_EC2_Model_RunInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Reservation: Amazon_EC2_Model_Reservation</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RunInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RunInstancesResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Reservation: Amazon_EC2_Model_Reservation</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Reservation' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Reservation'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Reservation.
     * 
     * @return Reservation Reservation
     */
    public function getReservation() 
    {
        return $this->_fields['Reservation']['FieldValue'];
    }

    /**
     * Sets the value of the Reservation.
     * 
     * @param Reservation Reservation
     * @return void
     */
    public function setReservation($value) 
    {
        $this->_fields['Reservation']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Reservation  and returns this instance
     * 
     * @param Reservation $value Reservation
     * @return Amazon_EC2_Model_RunInstancesResult instance
     */
    public function withReservation($value)
    {
        $this->setReservation($value);
        return $this;
    }


    /**
     * Checks if Reservation  is set
     * 
     * @return bool true if Reservation property is set
     */
    public function isSetReservation()
    {
        return !is_null($this->_fields['Reservation']['FieldValue']);

    }




}