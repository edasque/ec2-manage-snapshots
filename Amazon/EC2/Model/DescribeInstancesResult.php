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
 * Amazon_EC2_Model_DescribeInstancesResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Reservation: Amazon_EC2_Model_Reservation</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeInstancesResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeInstancesResult
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
        'Reservation' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Reservation')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Reservation.
     * 
     * @return array of Reservation Reservation
     */
    public function getReservation() 
    {
        return $this->_fields['Reservation']['FieldValue'];
    }

    /**
     * Sets the value of the Reservation.
     * 
     * @param mixed Reservation or an array of Reservation Reservation
     * @return this instance
     */
    public function setReservation($reservation) 
    {
        if (!$this->_isNumericArray($reservation)) {
            $reservation =  array ($reservation);    
        }
        $this->_fields['Reservation']['FieldValue'] = $reservation;
        return $this;
    }


    /**
     * Sets single or multiple values of Reservation list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withReservation($reservation1, $reservation2)</code>
     * 
     * @param Reservation  $reservationArgs one or more Reservation
     * @return Amazon_EC2_Model_DescribeInstancesResult  instance
     */
    public function withReservation($reservationArgs)
    {
        foreach (func_get_args() as $reservation) {
            $this->_fields['Reservation']['FieldValue'][] = $reservation;
        }
        return $this;
    }   



    /**
     * Checks if Reservation list is non-empty
     * 
     * @return bool true if Reservation list is non-empty
     */
    public function isSetReservation()
    {
        return count ($this->_fields['Reservation']['FieldValue']) > 0;
    }




}