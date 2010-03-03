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
 * Amazon_EC2_Model_Reservation
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReservationId: string</li>
 * <li>OwnerId: string</li>
 * <li>RequesterId: string</li>
 * <li>GroupName: string</li>
 * <li>RunningInstance: Amazon_EC2_Model_RunningInstance</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Reservation extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Reservation
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReservationId: string</li>
     * <li>OwnerId: string</li>
     * <li>RequesterId: string</li>
     * <li>GroupName: string</li>
     * <li>RunningInstance: Amazon_EC2_Model_RunningInstance</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ReservationId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'OwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RequesterId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'GroupName' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'RunningInstance' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_RunningInstance')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReservationId property.
     * 
     * @return string ReservationId
     */
    public function getReservationId() 
    {
        return $this->_fields['ReservationId']['FieldValue'];
    }

    /**
     * Sets the value of the ReservationId property.
     * 
     * @param string ReservationId
     * @return this instance
     */
    public function setReservationId($value) 
    {
        $this->_fields['ReservationId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ReservationId and returns this instance
     * 
     * @param string $value ReservationId
     * @return Amazon_EC2_Model_Reservation instance
     */
    public function withReservationId($value)
    {
        $this->setReservationId($value);
        return $this;
    }


    /**
     * Checks if ReservationId is set
     * 
     * @return bool true if ReservationId  is set
     */
    public function isSetReservationId()
    {
        return !is_null($this->_fields['ReservationId']['FieldValue']);
    }

    /**
     * Gets the value of the OwnerId property.
     * 
     * @return string OwnerId
     */
    public function getOwnerId() 
    {
        return $this->_fields['OwnerId']['FieldValue'];
    }

    /**
     * Sets the value of the OwnerId property.
     * 
     * @param string OwnerId
     * @return this instance
     */
    public function setOwnerId($value) 
    {
        $this->_fields['OwnerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the OwnerId and returns this instance
     * 
     * @param string $value OwnerId
     * @return Amazon_EC2_Model_Reservation instance
     */
    public function withOwnerId($value)
    {
        $this->setOwnerId($value);
        return $this;
    }


    /**
     * Checks if OwnerId is set
     * 
     * @return bool true if OwnerId  is set
     */
    public function isSetOwnerId()
    {
        return !is_null($this->_fields['OwnerId']['FieldValue']);
    }

    /**
     * Gets the value of the RequesterId property.
     * 
     * @return string RequesterId
     */
    public function getRequesterId() 
    {
        return $this->_fields['RequesterId']['FieldValue'];
    }

    /**
     * Sets the value of the RequesterId property.
     * 
     * @param string RequesterId
     * @return this instance
     */
    public function setRequesterId($value) 
    {
        $this->_fields['RequesterId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RequesterId and returns this instance
     * 
     * @param string $value RequesterId
     * @return Amazon_EC2_Model_Reservation instance
     */
    public function withRequesterId($value)
    {
        $this->setRequesterId($value);
        return $this;
    }


    /**
     * Checks if RequesterId is set
     * 
     * @return bool true if RequesterId  is set
     */
    public function isSetRequesterId()
    {
        return !is_null($this->_fields['RequesterId']['FieldValue']);
    }

    /**
     * Gets the value of the GroupName .
     * 
     * @return array of string GroupName
     */
    public function getGroupName() 
    {
        return $this->_fields['GroupName']['FieldValue'];
    }

    /**
     * Sets the value of the GroupName.
     * 
     * @param string or an array of string GroupName
     * @return this instance
     */
    public function setGroupName($groupName) 
    {
        if (!$this->_isNumericArray($groupName)) {
            $groupName =  array ($groupName);    
        }
        $this->_fields['GroupName']['FieldValue'] = $groupName;
        return $this;
    }
  

    /**
     * Sets single or multiple values of GroupName list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withGroupName($groupName1, $groupName2)</code>
     * 
     * @param string  $stringArgs one or more GroupName
     * @return Amazon_EC2_Model_Reservation  instance
     */
    public function withGroupName($stringArgs)
    {
        foreach (func_get_args() as $groupName) {
            $this->_fields['GroupName']['FieldValue'][] = $groupName;
        }
        return $this;
    }  
      

    /**
     * Checks if GroupName list is non-empty
     * 
     * @return bool true if GroupName list is non-empty
     */
    public function isSetGroupName()
    {
        return count ($this->_fields['GroupName']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the RunningInstance.
     * 
     * @return array of RunningInstance RunningInstance
     */
    public function getRunningInstance() 
    {
        return $this->_fields['RunningInstance']['FieldValue'];
    }

    /**
     * Sets the value of the RunningInstance.
     * 
     * @param mixed RunningInstance or an array of RunningInstance RunningInstance
     * @return this instance
     */
    public function setRunningInstance($runningInstance) 
    {
        if (!$this->_isNumericArray($runningInstance)) {
            $runningInstance =  array ($runningInstance);    
        }
        $this->_fields['RunningInstance']['FieldValue'] = $runningInstance;
        return $this;
    }


    /**
     * Sets single or multiple values of RunningInstance list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withRunningInstance($runningInstance1, $runningInstance2)</code>
     * 
     * @param RunningInstance  $runningInstanceArgs one or more RunningInstance
     * @return Amazon_EC2_Model_Reservation  instance
     */
    public function withRunningInstance($runningInstanceArgs)
    {
        foreach (func_get_args() as $runningInstance) {
            $this->_fields['RunningInstance']['FieldValue'][] = $runningInstance;
        }
        return $this;
    }   



    /**
     * Checks if RunningInstance list is non-empty
     * 
     * @return bool true if RunningInstance list is non-empty
     */
    public function isSetRunningInstance()
    {
        return count ($this->_fields['RunningInstance']['FieldValue']) > 0;
    }




}