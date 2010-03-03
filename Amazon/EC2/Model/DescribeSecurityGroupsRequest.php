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
 * Amazon_EC2_Model_DescribeSecurityGroupsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>GroupName: string</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSecurityGroupsRequest extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSecurityGroupsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GroupName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GroupName' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
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
     * @return Amazon_EC2_Model_DescribeSecurityGroupsRequest  instance
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




}