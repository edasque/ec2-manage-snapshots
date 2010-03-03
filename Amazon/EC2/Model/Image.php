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
 * Amazon_EC2_Model_Image
 * 
 * Properties:
 * <ul>
 * 
 * <li>ImageId: string</li>
 * <li>ImageLocation: string</li>
 * <li>ImageState: string</li>
 * <li>OwnerId: string</li>
 * <li>Visibility: string</li>
 * <li>ProductCode: string</li>
 * <li>Architecture: string</li>
 * <li>ImageType: string</li>
 * <li>KernelId: string</li>
 * <li>RamdiskId: string</li>
 * <li>Platform: string</li>
 * <li>StateReason: Amazon_EC2_Model_StateReason</li>
 * <li>ImageOwnerAlias: string</li>
 * <li>Name: string</li>
 * <li>Description: string</li>
 * <li>RootDeviceType: string</li>
 * <li>RootDeviceName: string</li>
 * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_Image extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_Image
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ImageId: string</li>
     * <li>ImageLocation: string</li>
     * <li>ImageState: string</li>
     * <li>OwnerId: string</li>
     * <li>Visibility: string</li>
     * <li>ProductCode: string</li>
     * <li>Architecture: string</li>
     * <li>ImageType: string</li>
     * <li>KernelId: string</li>
     * <li>RamdiskId: string</li>
     * <li>Platform: string</li>
     * <li>StateReason: Amazon_EC2_Model_StateReason</li>
     * <li>ImageOwnerAlias: string</li>
     * <li>Name: string</li>
     * <li>Description: string</li>
     * <li>RootDeviceType: string</li>
     * <li>RootDeviceName: string</li>
     * <li>BlockDeviceMapping: Amazon_EC2_Model_BlockDeviceMapping</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ImageId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ImageLocation' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ImageState' => array('FieldValue' => null, 'FieldType' => 'string'),
        'OwnerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Visibility' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductCode' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'Architecture' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ImageType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'KernelId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RamdiskId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Platform' => array('FieldValue' => null, 'FieldType' => 'string'),
        'StateReason' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_StateReason'),
        'ImageOwnerAlias' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RootDeviceType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'RootDeviceName' => array('FieldValue' => null, 'FieldType' => 'string'),
        'BlockDeviceMapping' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_BlockDeviceMapping')),
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
     * @return Amazon_EC2_Model_Image instance
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
     * @return Amazon_EC2_Model_Image instance
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
     * Gets the value of the ImageState property.
     * 
     * @return string ImageState
     */
    public function getImageState() 
    {
        return $this->_fields['ImageState']['FieldValue'];
    }

    /**
     * Sets the value of the ImageState property.
     * 
     * @param string ImageState
     * @return this instance
     */
    public function setImageState($value) 
    {
        $this->_fields['ImageState']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageState and returns this instance
     * 
     * @param string $value ImageState
     * @return Amazon_EC2_Model_Image instance
     */
    public function withImageState($value)
    {
        $this->setImageState($value);
        return $this;
    }


    /**
     * Checks if ImageState is set
     * 
     * @return bool true if ImageState  is set
     */
    public function isSetImageState()
    {
        return !is_null($this->_fields['ImageState']['FieldValue']);
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
     * @return Amazon_EC2_Model_Image instance
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
     * Gets the value of the Visibility property.
     * 
     * @return string Visibility
     */
    public function getVisibility() 
    {
        return $this->_fields['Visibility']['FieldValue'];
    }

    /**
     * Sets the value of the Visibility property.
     * 
     * @param string Visibility
     * @return this instance
     */
    public function setVisibility($value) 
    {
        $this->_fields['Visibility']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Visibility and returns this instance
     * 
     * @param string $value Visibility
     * @return Amazon_EC2_Model_Image instance
     */
    public function withVisibility($value)
    {
        $this->setVisibility($value);
        return $this;
    }


    /**
     * Checks if Visibility is set
     * 
     * @return bool true if Visibility  is set
     */
    public function isSetVisibility()
    {
        return !is_null($this->_fields['Visibility']['FieldValue']);
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
     * @return Amazon_EC2_Model_Image  instance
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
     * @return Amazon_EC2_Model_Image instance
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
     * Gets the value of the ImageType property.
     * 
     * @return string ImageType
     */
    public function getImageType() 
    {
        return $this->_fields['ImageType']['FieldValue'];
    }

    /**
     * Sets the value of the ImageType property.
     * 
     * @param string ImageType
     * @return this instance
     */
    public function setImageType($value) 
    {
        $this->_fields['ImageType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageType and returns this instance
     * 
     * @param string $value ImageType
     * @return Amazon_EC2_Model_Image instance
     */
    public function withImageType($value)
    {
        $this->setImageType($value);
        return $this;
    }


    /**
     * Checks if ImageType is set
     * 
     * @return bool true if ImageType  is set
     */
    public function isSetImageType()
    {
        return !is_null($this->_fields['ImageType']['FieldValue']);
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
     * @return Amazon_EC2_Model_Image instance
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
     * @return Amazon_EC2_Model_Image instance
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
     * Gets the value of the Platform property.
     * 
     * @return string Platform
     */
    public function getPlatform() 
    {
        return $this->_fields['Platform']['FieldValue'];
    }

    /**
     * Sets the value of the Platform property.
     * 
     * @param string Platform
     * @return this instance
     */
    public function setPlatform($value) 
    {
        $this->_fields['Platform']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Platform and returns this instance
     * 
     * @param string $value Platform
     * @return Amazon_EC2_Model_Image instance
     */
    public function withPlatform($value)
    {
        $this->setPlatform($value);
        return $this;
    }


    /**
     * Checks if Platform is set
     * 
     * @return bool true if Platform  is set
     */
    public function isSetPlatform()
    {
        return !is_null($this->_fields['Platform']['FieldValue']);
    }

    /**
     * Gets the value of the StateReason.
     * 
     * @return StateReason StateReason
     */
    public function getStateReason() 
    {
        return $this->_fields['StateReason']['FieldValue'];
    }

    /**
     * Sets the value of the StateReason.
     * 
     * @param StateReason StateReason
     * @return void
     */
    public function setStateReason($value) 
    {
        $this->_fields['StateReason']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the StateReason  and returns this instance
     * 
     * @param StateReason $value StateReason
     * @return Amazon_EC2_Model_Image instance
     */
    public function withStateReason($value)
    {
        $this->setStateReason($value);
        return $this;
    }


    /**
     * Checks if StateReason  is set
     * 
     * @return bool true if StateReason property is set
     */
    public function isSetStateReason()
    {
        return !is_null($this->_fields['StateReason']['FieldValue']);

    }

    /**
     * Gets the value of the ImageOwnerAlias property.
     * 
     * @return string ImageOwnerAlias
     */
    public function getImageOwnerAlias() 
    {
        return $this->_fields['ImageOwnerAlias']['FieldValue'];
    }

    /**
     * Sets the value of the ImageOwnerAlias property.
     * 
     * @param string ImageOwnerAlias
     * @return this instance
     */
    public function setImageOwnerAlias($value) 
    {
        $this->_fields['ImageOwnerAlias']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ImageOwnerAlias and returns this instance
     * 
     * @param string $value ImageOwnerAlias
     * @return Amazon_EC2_Model_Image instance
     */
    public function withImageOwnerAlias($value)
    {
        $this->setImageOwnerAlias($value);
        return $this;
    }


    /**
     * Checks if ImageOwnerAlias is set
     * 
     * @return bool true if ImageOwnerAlias  is set
     */
    public function isSetImageOwnerAlias()
    {
        return !is_null($this->_fields['ImageOwnerAlias']['FieldValue']);
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
     * @return Amazon_EC2_Model_Image instance
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
     * @return Amazon_EC2_Model_Image instance
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
     * Gets the value of the RootDeviceType property.
     * 
     * @return string RootDeviceType
     */
    public function getRootDeviceType() 
    {
        return $this->_fields['RootDeviceType']['FieldValue'];
    }

    /**
     * Sets the value of the RootDeviceType property.
     * 
     * @param string RootDeviceType
     * @return this instance
     */
    public function setRootDeviceType($value) 
    {
        $this->_fields['RootDeviceType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the RootDeviceType and returns this instance
     * 
     * @param string $value RootDeviceType
     * @return Amazon_EC2_Model_Image instance
     */
    public function withRootDeviceType($value)
    {
        $this->setRootDeviceType($value);
        return $this;
    }


    /**
     * Checks if RootDeviceType is set
     * 
     * @return bool true if RootDeviceType  is set
     */
    public function isSetRootDeviceType()
    {
        return !is_null($this->_fields['RootDeviceType']['FieldValue']);
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
     * @return Amazon_EC2_Model_Image instance
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
     * @return Amazon_EC2_Model_Image  instance
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