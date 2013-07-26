<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Stand
 *
 * @author equemuel
 */
class Model_Stand extends ORM {
    
    protected $_db = 'icgtest_ezra';
    
    protected $_table_name = 'stands';
    protected  $_primary_key = 'stand_id';
    
    protected $_has_many = array('menu' => array('model' => 'menu', 'foreign_key' => 'stand_id'));
    protected $_has_one = array('richcontent' => array('model' => 'richcontent', 'foreign_key' => 'stand_id'));

    protected $_table_columns = array(
	'stand_id' => array('data_type' => 'int',  'is_nullable' => FALSE),
        'stand_name' => array('data_type' => 'string',  'is_nullable' => FALSE),
        'stand_description' => array('data_type' => 'string',  'is_nullable' => TRUE),
        'stand_bg_image' => array('data_type' => 'string', 'is_nullable' => TRUE),
        'stand_message' => array('data_type' => 'string', 'is_nullable' => TRUE),	
        );
}

?>
