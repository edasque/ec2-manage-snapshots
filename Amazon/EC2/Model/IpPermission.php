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
 * Amazon_EC2_Model_IpPermission
 * 
 * Properties:
 * <ul>
 * 
 * <li>IpProtocol: string</li>
 * <li>FromPort: int</li>
 * <li>ToPort: int</li>
 * <li>UserIdGroupPair: Amazon_EC2_Model_UserIdGroupPair</li>
 * <li>IpRange: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_IpPermission extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_IpPermission
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>IpProtocol: string</li>
     * <li>FromPort: int</li>
     * <li>ToPort: int</li>
     * <li>UserIdGroupPair: Amazon_EC2_Model_UserIdGroupPair</li>
     * <li>IpRange: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'IpProtocol' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FromPort' => array('FieldValue' => null, 'FieldType' => 'int'),
        'ToPort' => array('FieldValue' => null, 'FieldType' => 'int'),
        'UserIdGroupPair' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_UserIdGroupPair')),
        'IpRange' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the IpProtocol property.
     * 
     * @return string IpProtocol
     */
    public function getIpProtocol() 
    {
        return $this->_fields['IpProtocol']['FieldValue'];
    }

    /**
     * Sets the value of the IpProtocol property.
     * 
     * @param string IpProtocol
     * @return this instance
     */
    public function setIpProtocol($value) 
    {
        $this->_fields['IpProtocol']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the IpProtocol and returns this instance
     * 
     * @param string $value IpProtocol
     * @return Amazon_EC2_Model_IpPermission instance
     */
    public function withIpProtocol($value)
    {
        $this->setIpProtocol($value);
        return $this;
    }


    /**
     * Checks if IpProtocol is set
     * 
     * @return bool true if IpProtocol  is set
     */
    public function isSetIpProtocol()
    {
        return !is_null($this->_fields['IpProtocol']['FieldValue']);
    }

    /**
     * Gets the value of the FromPort property.
     * 
     * @return int FromPort
     */
    public function getFromPort() 
    {
        return $this->_fields['FromPort']['FieldValue'];
    }

    /**
     * Sets the value of the FromPort property.
     * 
     * @param int FromPort
     * @return this instance
     */
    public function setFromPort($value) 
    {
        $this->_fields['FromPort']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FromPort and returns this instance
     * 
     * @param int $value FromPort
     * @return Amazon_EC2_Model_IpPermission instance
     */
    public function withFromPort($value)
    {
        $this->setFromPort($value);
        return $this;
    }


    /**
     * Checks if FromPort is set
     * 
     * @return bool true if FromPort  is set
     */
    public function isSetFromPort()
    {
        return !is_null($this->_fields['FromPort']['FieldValue']);
    }

    /**
     * Gets the value of the ToPort property.
     * 
     * @return int ToPort
     */
    public function getToPort() 
    {
        return $this->_fields['ToPort']['FieldValue'];
    }

    /**
     * Sets the value of the ToPort property.
     * 
     * @param int ToPort
     * @return this instance
     */
    public function setToPort($value) 
    {
        $this->_fields['ToPort']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ToPort and returns this instance
     * 
     * @param int $value ToPort
     * @return Amazon_EC2_Model_IpPermission instance
     */
    public function withToPort($value)
    {
        $this->setToPort($value);
        return $this;
    }


    /**
     * Checks if ToPort is set
     * 
     * @return bool true if ToPort  is set
     */
    public function isSetToPort()
    {
        return !is_null($this->_fields['ToPort']['FieldValue']);
    }

    /**
     * Gets the value of the UserIdGroupPair.
     * 
     * @return array of UserIdGroupPair UserIdGroupPair
     */
    public function getUserIdGroupPair() 
    {
        return $this->_fields['UserIdGroupPair']['FieldValue'];
    }

    /**
     * Sets the value of the UserIdGroupPair.
     * 
     * @param mixed UserIdGroupPair or an array of UserIdGroupPair UserIdGroupPair
     * @return this instance
     */
    public function setUserIdGroupPair($userIdGroupPair) 
    {
        if (!$this->_isNumericArray($userIdGroupPair)) {
            $userIdGroupPair =  array ($userIdGroupPair);    
        }
        $this->_fields['UserIdGroupPair']['FieldValue'] = $userIdGroupPair;
        return $this;
    }


    /**
     * Sets single or multiple values of UserIdGroupPair list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withUserIdGroupPair($userIdGroupPair1, $userIdGroupPair2)</code>
     * 
     * @param UserIdGroupPair  $userIdGroupPairArgs one or more UserIdGroupPair
     * @return Amazon_EC2_Model_IpPermission  instance
     */
    public function withUserIdGroupPair($userIdGroupPairArgs)
    {
        foreach (func_get_args() as $userIdGroupPair) {
            $this->_fields['UserIdGroupPair']['FieldValue'][] = $userIdGroupPair;
        }
        return $this;
    }   



    /**
     * Checks if UserIdGroupPair list is non-empty
     * 
     * @return bool true if UserIdGroupPair list is non-empty
     */
    public function isSetUserIdGroupPair()
    {
        return count ($this->_fields['UserIdGroupPair']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the IpRange .
     * 
     * @return array of string IpRange
     */
    public function getIpRange() 
    {
        return $this->_fields['IpRange']['FieldValue'];
    }

    /**
     * Sets the value of the IpRange.
     * 
     * @param string or an array of string IpRange
     * @return this instance
     */
    public function setIpRange($ipRange) 
    {
        if (!$this->_isNumericArray($ipRange)) {
            $ipRange =  array ($ipRange);    
        }
        $this->_fields['IpRange']['FieldValue'] = $ipRange;
        return $this;
    }
  

    /**
     * Sets single or multiple values of IpRange list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withIpRange($ipRange1, $ipRange2)</code>
     * 
     * @param string  $stringArgs one or more IpRange
     * @return Amazon_EC2_Model_IpPermission  instance
     */
    public function withIpRange($stringArgs)
    {
        foreach (func_get_args() as $ipRange) {
            $this->_fields['IpRange']['FieldValue'][] = $ipRange;
        }
        return $this;
    }  
      

    /**
     * Checks if IpRange list is non-empty
     * 
     * @return bool true if IpRange list is non-empty
     */
    public function isSetIpRange()
    {
        return count ($this->_fields['IpRange']['FieldValue']) > 0;
    }




}