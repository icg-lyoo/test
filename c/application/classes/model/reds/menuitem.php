<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu_Item
 *
 * @author equemuel
 */
class Model_Menuitem extends ORM{
    
    protected $_db = 'icgtest_ezra';
    
    protected $_table_name = 'menuitems';
    protected  $_primary_key = 'menuitem_id';
    //protected $_primary_value = 'menuitem_title';
    
    protected  $_has_many = array('menu' => array('model' => 'menu', 'through' => 'menuitem_menu'));


    protected $_table_columns = array(
	'menuitem_id' => array('data_type' => 'int',  'is_nullable' => FALSE),
        'menuitem_title' => array('data_type' => 'string',  'is_nullable' => TRUE),
        'menuitem_price' => array('data_type' => 'float',  'is_nullable' => TRUE),
        'menuitem_style' => array('data_type' => 'string',  'is_nullable' => TRUE),
    );
}

?>
