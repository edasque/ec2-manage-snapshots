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
 * Amazon_EC2_Model_DescribeSecurityGroupsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>SecurityGroup: Amazon_EC2_Model_SecurityGroup</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSecurityGroupsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSecurityGroupsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SecurityGroup: Amazon_EC2_Model_SecurityGroup</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SecurityGroup' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_SecurityGroup')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SecurityGroup.
     * 
     * @return array of SecurityGroup SecurityGroup
     */
    public function getSecurityGroup() 
    {
        return $this->_fields['SecurityGroup']['FieldValue'];
    }

    /**
     * Sets the value of the SecurityGroup.
     * 
     * @param mixed SecurityGroup or an array of SecurityGroup SecurityGroup
     * @return this instance
     */
    public function setSecurityGroup($securityGroup) 
    {
        if (!$this->_isNumericArray($securityGroup)) {
            $securityGroup =  array ($securityGroup);    
        }
        $this->_fields['SecurityGroup']['FieldValue'] = $securityGroup;
        return $this;
    }


    /**
     * Sets single or multiple values of SecurityGroup list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSecurityGroup($securityGroup1, $securityGroup2)</code>
     * 
     * @param SecurityGroup  $securityGroupArgs one or more SecurityGroup
     * @return Amazon_EC2_Model_DescribeSecurityGroupsResult  instance
     */
    public function withSecurityGroup($securityGroupArgs)
    {
        foreach (func_get_args() as $securityGroup) {
            $this->_fields['SecurityGroup']['FieldValue'][] = $securityGroup;
        }
        return $this;
    }   



    /**
     * Checks if SecurityGroup list is non-empty
     * 
     * @return bool true if SecurityGroup list is non-empty
     */
    public function isSetSecurityGroup()
    {
        return count ($this->_fields['SecurityGroup']['FieldValue']) > 0;
    }




}