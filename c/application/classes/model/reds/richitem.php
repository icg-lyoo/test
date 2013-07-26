<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rich_Item
 *
 * @author equemuel
 */
class Model_Richitem extends ORM {
    
    protected $_db = 'icgtest_ezra';
    
    protected $_table_name = 'richitems';
    protected  $_primary_key = 'richitem_id';
    
    protected  $_has_many = array('richcontent' => array('model' => 'richcontent', 'through' => 'richitem_richcontent'));
    
    protected $_table_columns = array(
        'richitem_media' => array('string',  'is_nullable' => FALSE),
        'richitem_type' => array('data_type' => 'string',  'is_nullable' => TRUE),
    );
}

?>
