<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menuitem_menu
 *
 * @author equemuel
 */
class Model_Menuitem_Menu  extends ORM{
    
    protected $_db = 'icgtest_ezra';
     protected $_table_name = 'menuitem_menu';
    protected $_belongs_to = array('menu' => array(), 'menuitem' => array());
    
}

?>
