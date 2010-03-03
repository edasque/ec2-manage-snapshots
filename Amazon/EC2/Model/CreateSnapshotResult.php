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
 * Amazon_EC2_Model_CreateSnapshotResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Snapshot: Amazon_EC2_Model_Snapshot</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_CreateSnapshotResult extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_CreateSnapshotResult
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
        'Snapshot' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_Snapshot'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Snapshot.
     * 
     * @return Snapshot Snapshot
     */
    public function getSnapshot() 
    {
        return $this->_fields['Snapshot']['FieldValue'];
    }

    /**
     * Sets the value of the Snapshot.
     * 
     * @param Snapshot Snapshot
     * @return void
     */
    public function setSnapshot($value) 
    {
        $this->_fields['Snapshot']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Snapshot  and returns this instance
     * 
     * @param Snapshot $value Snapshot
     * @return Amazon_EC2_Model_CreateSnapshotResult instance
     */
    public function withSnapshot($value)
    {
        $this->setSnapshot($value);
        return $this;
    }


    /**
     * Checks if Snapshot  is set
     * 
     * @return bool true if Snapshot property is set
     */
    public function isSetSnapshot()
    {
        return !is_null($this->_fields['Snapshot']['FieldValue']);

    }




}