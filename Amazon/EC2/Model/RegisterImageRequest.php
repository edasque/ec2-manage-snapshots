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
 * Amazon_EC2_Model_RegisterImageRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageLocation: string</li>
 * <li>Name: string</li>
 * <li>Description: string</li>
 * <li>Architecture: string</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>RootDeviceName: string</li>
 * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_RegisterImageRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_RegisterImageRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageLocation: string</li>
     * <li>Name: string</li>
     * <li>Description: string</li>
     * <li>Architecture: string</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>RootDeviceName: string</li>
     * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageLocation' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Architecture' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RootDeviceName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMapping' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_BlockDeviceMapping')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ImageLocation property.
     * 
     * @return string ImageLocation
     */
    public function getImageLocation() 
    {
        return $this->_fields['ImageLocation']['FieldValue'];
    }

    /**
     * Sets the value of the ImageLocation property.
     * 
     * @param string ImageLocation
     * @return this instance
     */
    public function setImageLocation($value) 
    {
        $this->_fields['ImageLocation']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageLocation and returns this instance
     * 
     * @param string $value ImageLocation
     * @return Amazon_EC2_Model_RegisterImageRequest instance
     */
    public function withImageLocation($value)
    {
        $this->setImageLocation($value);
        return $this;
    }


    /**
     * Checks if ImageLocation is set
     * 
     * @return bool true if ImageLocation  is set
     */
    public function isSetImageLocation()
    {
        return !is_null($this->_fields['ImageLocation']['FieldValue']);
    }

    /**
     * Gets the value of the Name property.
     * 
     * @return string Name
     */
    public function getName() 
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Sets the value of the Name property.
     * 
     * @param string Name
     * @return this instance
     */
    public function setName($value) 
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Name and returns this instance
     * 
     * @param string $value Name
     * @return Amazon_EC2_Model_RegisterImageRequest instance
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }


    /**
     * Checks if Name is set
     * 
     * @return bool true if Name  is set
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
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
     * @return Amazon_EC2_Model_RegisterImageRequest instance
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
     * Gets the value of the Architecture property.
     * 
     * @return string Architecture
     */
    public function getArchitecture() 
    {
        return $this->_fields['Architecture']['FieldValue'];
    }

    /**
     * Sets the value of the Architecture property.
     * 
     * @param string Architecture
     * @return this instance
     */
    public function setArchitecture($value) 
    {
        $this->_fields['Architecture']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Architecture and returns this instance
     * 
     * @param string $value Architecture
     * @return Amazon_EC2_Model_RegisterImageRequest instance
     */
    public function withArchitecture($value)
    {
        $this->setArchitecture($value);
        return $this;
    }


    /**
     * Checks if Architecture is set
     * 
     * @return bool true if Architecture  is set
     */
    public function isSetArchitecture()
    {
        return !is_null($this->_fields['Architecture']['FieldValue']);
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
     * @return Amazon_EC2_Model_RegisterImageRequest instance
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
     * @return Amazon_EC2_Model_RegisterImageRequest instance
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
     * Gets the value of the RootDeviceName property.
     * 
     * @return string RootDeviceName
     */
    public function getRootDeviceName() 
    {
        return $this->_fields['RootDeviceName']['FieldValue'];
    }

    /**
     * Sets the value of the RootDeviceName property.
     * 
     * @param string RootDeviceName
     * @return this instance
     */
    public function setRootDeviceName($value) 
    {
        $this->_fields['RootDeviceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RootDeviceName and returns this instance
     * 
     * @param string $value RootDeviceName
     * @return Amazon_EC2_Model_RegisterImageRequest instance
     */
    public function withRootDeviceName($value)
    {
        $this->setRootDeviceName($value);
        return $this;
    }


    /**
     * Checks if RootDeviceName is set
     * 
     * @return bool true if RootDeviceName  is set
     */
    public function isSetRootDeviceName()
    {
        return !is_null($this->_fields['RootDeviceName']['FieldValue']);
    }

    /**
     * Gets the value of the BlockDeviceMapping.
     * 
     * @return array of BlockDeviceMapping BlockDeviceMapping
     */
    public function getBlockDeviceMapping() 
    {
        return $this->_fields['BlockDeviceMapping']['FieldValue'];
    }

    /**
     * Sets the value of the BlockDeviceMapping.
     * 
     * @param mixed BlockDeviceMapping or an array of BlockDeviceMapping BlockDeviceMapping
     * @return this instance
     */
    public function setBlockDeviceMapping($blockDeviceMapping) 
    {
        if (!$this->_isNumericArray($blockDeviceMapping)) {
            $blockDeviceMapping =  array ($blockDeviceMapping);    
        }
        $this->_fields['BlockDeviceMapping']['FieldValue'] = $blockDeviceMapping;
        return $this;
    }


    /**
     * Sets single or multiple values of BlockDeviceMapping list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withBlockDeviceMapping($blockDeviceMapping1, $blockDeviceMapping2)</code>
     * 
     * @param BlockDeviceMapping  $blockDeviceMappingArgs one or more BlockDeviceMapping
     * @return Amazon_EC2_Model_RegisterImageRequest  instance
     */
    public function withBlockDeviceMapping($blockDeviceMappingArgs)
    {
        foreach (func_get_args() as $blockDeviceMapping) {
            $this->_fields['BlockDeviceMapping']['FieldValue'][] = $blockDeviceMapping;
        }
        return $this;
    }   



    /**
     * Checks if BlockDeviceMapping list is non-empty
     * 
     * @return bool true if BlockDeviceMapping list is non-empty
     */
    public function isSetBlockDeviceMapping()
    {
        return count ($this->_fields['BlockDeviceMapping']['FieldValue']) > 0;
    }




}