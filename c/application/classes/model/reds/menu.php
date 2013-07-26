<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author equemuel
 */
class Model_Menu extends ORM{
   
    protected $_db = 'icgtest_ezra';
    
    protected $_table_name = 'menus';
    protected  $_primary_key = 'menu_id';
    
    protected $_belongs_to = array('stand' => array('model' => 'stand', 'foreign_key' => 'stand_id'));
    protected $_has_many = array('menuitem' => array('model' => 'menuitem', 'through' => 'menuitem_menu'));
    protected $_has_one = array('richcontent' => array('model' => 'richcontent', 'foreign_key' => 'menu_id'));
    
    protected $_table_columns = array(
        'stand_id' => array('data_type' => 'int', 'is_nullable' => FALSE),
        'menu_title' => array('data_type' => 'string',  'is_nullable' => TRUE),
        'menu_bg_image' => array('data_type' => 'string', 'is_nullable' => TRUE),
        'menu_border_color' => array('data_type' => 'string', 'is_nullable' => TRUE),
        );
}

?>
