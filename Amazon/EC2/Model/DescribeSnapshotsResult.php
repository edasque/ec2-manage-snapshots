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
 * Amazon_EC2_Model_DescribeSnapshotsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Snapshot: Amazon_EC2_Model_Snapshot</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DescribeSnapshotsResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DescribeSnapshotsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Snapshot: Amazon_EC2_Model_Snapshot</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Snapshot' => array('FieldValue' => array(), 'FieldType' => array('Amazon_EC2_Model_Snapshot')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Snapshot.
     * 
     * @return array of Snapshot Snapshot
     */
    public function getSnapshot() 
    {
        return $this->_fields['Snapshot']['FieldValue'];
    }

    /**
     * Sets the value of the Snapshot.
     * 
     * @param mixed Snapshot or an array of Snapshot Snapshot
     * @return this instance
     */
    public function setSnapshot($snapshot) 
    {
        if (!$this->_isNumericArray($snapshot)) {
            $snapshot =  array ($snapshot);    
        }
        $this->_fields['Snapshot']['FieldValue'] = $snapshot;
        return $this;
    }


    /**
     * Sets single or multiple values of Snapshot list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSnapshot($snapshot1, $snapshot2)</code>
     * 
     * @param Snapshot  $snapshotArgs one or more Snapshot
     * @return Amazon_EC2_Model_DescribeSnapshotsResult  instance
     */
    public function withSnapshot($snapshotArgs)
    {
        foreach (func_get_args() as $snapshot) {
            $this->_fields['Snapshot']['FieldValue'][] = $snapshot;
        }
        return $this;
    }   



    /**
     * Checks if Snapshot list is non-empty
     * 
     * @return bool true if Snapshot list is non-empty
     */
    public function isSetSnapshot()
    {
        return count ($this->_fields['Snapshot']['FieldValue']) > 0;
    }




}