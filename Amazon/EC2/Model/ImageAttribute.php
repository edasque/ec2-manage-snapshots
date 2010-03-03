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
 * Amazon_EC2_Model_ImageAttribute
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageId: string</li>
 * <li>LaunchPermission: Amazon_EC2_Model_LaunchPermission</li>
 * <li>ProductCode: string</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>Description: string</li>
 * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_ImageAttribute extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_ImageAttribute
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageId: string</li>
     * <li>LaunchPermission: Amazon_EC2_Model_LaunchPermission</li>
     * <li>ProductCode: string</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>Description: string</li>
     * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'LaunchPermission' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_LaunchPermission')),
        'ProductCode' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMapping' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_BlockDeviceMapping'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ImageId property.
     * 
     * @return string ImageId
     */
    public function getImageId() 
    {
        return $this->_fields['ImageId']['FieldValue'];
    }

    /**
     * Sets the value of the ImageId property.
     * 
     * @param string ImageId
     * @return this instance
     */
    public function setImageId($value) 
    {
        $this->_fields['ImageId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageId and returns this instance
     * 
     * @param string $value ImageId
     * @return Amazon_EC2_Model_ImageAttribute instance
     */
    public function withImageId($value)
    {
        $this->setImageId($value);
        return $this;
    }


    /**
     * Checks if ImageId is set
     * 
     * @return bool true if ImageId  is set
     */
    public function isSetImageId()
    {
        return !is_null($this->_fields['ImageId']['FieldValue']);
    }

    /**
     * Gets the value of the LaunchPermission.
     * 
     * @return array of LaunchPermission LaunchPermission
     */
    public function getLaunchPermission() 
    {
        return $this->_fields['LaunchPermission']['FieldValue'];
    }

    /**
     * Sets the value of the LaunchPermission.
     * 
     * @param mixed LaunchPermission or an array of LaunchPermission LaunchPermission
     * @return this instance
     */
    public function setLaunchPermission($launchPermission) 
    {
        if (!$this->_isNumericArray($launchPermission)) {
            $launchPermission =  array ($launchPermission);    
        }
        $this->_fields['LaunchPermission']['FieldValue'] = $launchPermission;
        return $this;
    }


    /**
     * Sets single or multiple values of LaunchPermission list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withLaunchPermission($launchPermission1, $launchPermission2)</code>
     * 
     * @param LaunchPermission  $launchPermissionArgs one or more LaunchPermission
     * @return Amazon_EC2_Model_ImageAttribute  instance
     */
    public function withLaunchPermission($launchPermissionArgs)
    {
        foreach (func_get_args() as $launchPermission) {
            $this->_fields['LaunchPermission']['FieldValue'][] = $launchPermission;
        }
        return $this;
    }   



    /**
     * Checks if LaunchPermission list is non-empty
     * 
     * @return bool true if LaunchPermission list is non-empty
     */
    public function isSetLaunchPermission()
    {
        return count ($this->_fields['LaunchPermission']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the ProductCode .
     * 
     * @return array of string ProductCode
     */
    public function getProductCode() 
    {
        return $this->_fields['ProductCode']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCode.
     * 
     * @param string or an array of string ProductCode
     * @return this instance
     */
    public function setProductCode($productCode) 
    {
        if (!$this->_isNumericArray($productCode)) {
            $productCode =  array ($productCode);    
        }
        $this->_fields['ProductCode']['FieldValue'] = $productCode;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ProductCode list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withProductCode($productCode1, $productCode2)</code>
     * 
     * @param string  $stringArgs one or more ProductCode
     * @return Amazon_EC2_Model_ImageAttribute  instance
     */
    public function withProductCode($stringArgs)
    {
        foreach (func_get_args() as $productCode) {
            $this->_fields['ProductCode']['FieldValue'][] = $productCode;
        }
        return $this;
    }  
      

    /**
     * Checks if ProductCode list is non-empty
     * 
     * @return bool true if ProductCode list is non-empty
     */
    public function isSetProductCode()
    {
        return count ($this->_fields['ProductCode']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the KernelId property.
     * 
     * @return string KernelId
     */
    public function getKernelId() 
    {
        return $this->_fields['KernelId']['FieldValue'];
    }

    /**
     * Sets the value of the KernelId property.
     * 
     * @param string KernelId
     * @return this instance
     */
    public function setKernelId($value) 
    {
        $this->_fields['KernelId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the KernelId and returns this instance
     * 
     * @param string $value KernelId
     * @return Amazon_EC2_Model_ImageAttribute instance
     */
    public function withKernelId($value)
    {
        $this->setKernelId($value);
        return $this;
    }


    /**
     * Checks if KernelId is set
     * 
     * @return bool true if KernelId  is set
     */
    public function isSetKernelId()
    {
        return !is_null($this->_fields['KernelId']['FieldValue']);
    }

    /**
     * Gets the value of the RamdiskId property.
     * 
     * @return string RamdiskId
     */
    public function getRamdiskId() 
    {
        return $this->_fields['RamdiskId']['FieldValue'];
    }

    /**
     * Sets the value of the RamdiskId property.
     * 
     * @param string RamdiskId
     * @return this instance
     */
    public function setRamdiskId($value) 
    {
        $this->_fields['RamdiskId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RamdiskId and returns this instance
     * 
     * @param string $value RamdiskId
     * @return Amazon_EC2_Model_ImageAttribute instance
     */
    public function withRamdiskId($value)
    {
        $this->setRamdiskId($value);
        return $this;
    }


    /**
     * Checks if RamdiskId is set
     * 
     * @return bool true if RamdiskId  is set
     */
    public function isSetRamdiskId()
    {
        return !is_null($this->_fields['RamdiskId']['FieldValue']);
    }

    /**
     * Gets the value of the Description property.
     * 
     * @return string Description
     */
    public function getDescription() 
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Sets the value of the Description property.
     * 
     * @param string Description
     * @return this instance
     */
    public function setDescription($value) 
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Description and returns this instance
     * 
     * @param string $value Description
     * @return Amazon_EC2_Model_ImageAttribute instance
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }


    /**
     * Checks if Description is set
     * 
     * @return bool true if Description  is set
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }

    /**
     * Gets the value of the BlockDeviceMapping.
     * 
     * @return BlockDeviceMapping BlockDeviceMapping
     */
    public function getBlockDeviceMapping() 
    {
        return $this->_fields['BlockDeviceMapping']['FieldValue'];
    }

    /**
     * Sets the value of the BlockDeviceMapping.
     * 
     * @param BlockDeviceMapping BlockDeviceMapping
     * @return void
     */
    public function setBlockDeviceMapping($value) 
    {
        $this->_fields['BlockDeviceMapping']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the BlockDeviceMapping  and returns this instance
     * 
     * @param BlockDeviceMapping $value BlockDeviceMapping
     * @return Amazon_EC2_Model_ImageAttribute instance
     */
    public function withBlockDeviceMapping($value)
    {
        $this->setBlockDeviceMapping($value);
        return $this;
    }


    /**
     * Checks if BlockDeviceMapping  is set
     * 
     * @return bool true if BlockDeviceMapping property is set
     */
    public function isSetBlockDeviceMapping()
    {
        return !is_null($this->_fields['BlockDeviceMapping']['FieldValue']);

    }




}