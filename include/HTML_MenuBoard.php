<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTML_MenuBoard
 *
 * @author ericjohnson
 */
include_once './include/HTML.php';

class HTML_MenuBoard extends HTML {
      //put your code here
      
      protected function _generate(){
            
            return parent::generate();
      }
      
      public function generateContent(){
            
            $class_name = 'HTML_MenuBoard_'.MenuBoard::$clientclass;
            $class = new $class_name();
            
            return $class->generateContent();
      }
      
      public function checkForContentUpdate(){
             $class_name = 'HTML_MenuBoard_'.MenuBoard::$clientclass;
            $class = new $class_name();
            
            return $class->checkForContentUpdate();
      }
}

?>
