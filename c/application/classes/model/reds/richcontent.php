<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of richcontent
 *
 * @author equemuel
 */
class Model_Richcontent extends ORM {
    protected $_db = 'icgtest_ezra';
    
    protected $_table_name = 'richcontent';
    protected  $_primary_key = 'richcontent_id';
    
    protected $_has_many = array('richitem' => array('model' => 'richitem', 'through' => 'richitem_richcontent'));
    protected $_belongs_to = array(
            'stand' => array('model' => 'stand', 'foreign_key' => 'stand_id'),
            'menu' => array('model' => 'menu', 'foreign_key' => 'menu_id'),
        );
    
    protected $_table_columns = array(
        'richcontent_id' => array('data_type' => 'int', 'is_nullable' => FALSE),
        'richcontent_bg_image' => array('data_type' => 'string',  'is_nullable' => TRUE),
        'richcontent_fg_image' => array('data_type' => 'string', 'is_nullable' => TRUE),
        'richcontent_type' => array('data_type' => 'string', 'is_nullable' => TRUE),
        'menu_id' => array('data_type' => 'int', 'is_nullable' =>TRUE),
        'stand_id' => array('data_type' => 'int', 'is_nullable' =>TRUE),
        'richcontent_text' => array('data_type' => 'string', 'is_nullable' =>TRUE),
        'richcontent_bar' => array('data_type' => 'string', 'is_nullable' =>TRUE),
        );
}

?>
