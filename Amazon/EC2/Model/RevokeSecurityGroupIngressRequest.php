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
 * Amazon_EC2_Model_RevokeSecurityGroupIngressRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>UserId: string</li>
 * <li>GroupName: string</li>
 * <li>SourceSecurityGroupName: string</li>
 * <li>SourceSecurityGroupOwnerId: string</li>
 * <li>IpProtocol: string</li>
 * <li>FromPort: int</li>
 * <li>ToPort: int</li>
 * <li>CidrIp: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RevokeSecurityGroupIngressRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RevokeSecurityGroupIngressRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>UserId: string</li>
     * <li>GroupName: string</li>
     * <li>SourceSecurityGroupName: string</li>
     * <li>SourceSecurityGroupOwnerId: string</li>
     * <li>IpProtocol: string</li>
     * <li>FromPort: int</li>
     * <li>ToPort: int</li>
     * <li>CidrIp: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'UserId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'GroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SourceSecurityGroupName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SourceSecurityGroupOwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'IpProtocol' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FromPort' => array('FieldValue' => null, 'FieldType' => 'int'),
        'ToPort' => array('FieldValue' => null, 'FieldType' => 'int'),
        'CidrIp' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the UserId property.
     * 
     * @return string UserId
     */
    public function getUserId() 
    {
        return $this->_fields['UserId']['FieldValue'];
    }

    /**
     * Sets the value of the UserId property.
     * 
     * @param string UserId
     * @return this instance
     */
    public function setUserId($value) 
    {
        $this->_fields['UserId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the UserId and returns this instance
     * 
     * @param string $value UserId
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
     */
    public function withUserId($value)
    {
        $this->setUserId($value);
        return $this;
    }


    /**
     * Checks if UserId is set
     * 
     * @return bool true if UserId  is set
     */
    public function isSetUserId()
    {
        return !is_null($this->_fields['UserId']['FieldValue']);
    }

    /**
     * Gets the value of the GroupName property.
     * 
     * @return string GroupName
     */
    public function getGroupName() 
    {
        return $this->_fields['GroupName']['FieldValue'];
    }

    /**
     * Sets the value of the GroupName property.
     * 
     * @param string GroupName
     * @return this instance
     */
    public function setGroupName($value) 
    {
        $this->_fields['GroupName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the GroupName and returns this instance
     * 
     * @param string $value GroupName
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
     */
    public function withGroupName($value)
    {
        $this->setGroupName($value);
        return $this;
    }


    /**
     * Checks if GroupName is set
     * 
     * @return bool true if GroupName  is set
     */
    public function isSetGroupName()
    {
        return !is_null($this->_fields['GroupName']['FieldValue']);
    }

    /**
     * Gets the value of the SourceSecurityGroupName property.
     * 
     * @return string SourceSecurityGroupName
     */
    public function getSourceSecurityGroupName() 
    {
        return $this->_fields['SourceSecurityGroupName']['FieldValue'];
    }

    /**
     * Sets the value of the SourceSecurityGroupName property.
     * 
     * @param string SourceSecurityGroupName
     * @return this instance
     */
    public function setSourceSecurityGroupName($value) 
    {
        $this->_fields['SourceSecurityGroupName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SourceSecurityGroupName and returns this instance
     * 
     * @param string $value SourceSecurityGroupName
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
     */
    public function withSourceSecurityGroupName($value)
    {
        $this->setSourceSecurityGroupName($value);
        return $this;
    }


    /**
     * Checks if SourceSecurityGroupName is set
     * 
     * @return bool true if SourceSecurityGroupName  is set
     */
    public function isSetSourceSecurityGroupName()
    {
        return !is_null($this->_fields['SourceSecurityGroupName']['FieldValue']);
    }

    /**
     * Gets the value of the SourceSecurityGroupOwnerId property.
     * 
     * @return string SourceSecurityGroupOwnerId
     */
    public function getSourceSecurityGroupOwnerId() 
    {
        return $this->_fields['SourceSecurityGroupOwnerId']['FieldValue'];
    }

    /**
     * Sets the value of the SourceSecurityGroupOwnerId property.
     * 
     * @param string SourceSecurityGroupOwnerId
     * @return this instance
     */
    public function setSourceSecurityGroupOwnerId($value) 
    {
        $this->_fields['SourceSecurityGroupOwnerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SourceSecurityGroupOwnerId and returns this instance
     * 
     * @param string $value SourceSecurityGroupOwnerId
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
     */
    public function withSourceSecurityGroupOwnerId($value)
    {
        $this->setSourceSecurityGroupOwnerId($value);
        return $this;
    }


    /**
     * Checks if SourceSecurityGroupOwnerId is set
     * 
     * @return bool true if SourceSecurityGroupOwnerId  is set
     */
    public function isSetSourceSecurityGroupOwnerId()
    {
        return !is_null($this->_fields['SourceSecurityGroupOwnerId']['FieldValue']);
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
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
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
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
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
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
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
     * Gets the value of the CidrIp property.
     * 
     * @return string CidrIp
     */
    public function getCidrIp() 
    {
        return $this->_fields['CidrIp']['FieldValue'];
    }

    /**
     * Sets the value of the CidrIp property.
     * 
     * @param string CidrIp
     * @return this instance
     */
    public function setCidrIp($value) 
    {
        $this->_fields['CidrIp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CidrIp and returns this instance
     * 
     * @param string $value CidrIp
     * @return Amazon_EC2_Model_RevokeSecurityGroupIngressRequest instance
     */
    public function withCidrIp($value)
    {
        $this->setCidrIp($value);
        return $this;
    }


    /**
     * Checks if CidrIp is set
     * 
     * @return bool true if CidrIp  is set
     */
    public function isSetCidrIp()
    {
        return !is_null($this->_fields['CidrIp']['FieldValue']);
    }




}