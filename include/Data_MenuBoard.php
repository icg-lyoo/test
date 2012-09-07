<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Data_MenuBoard
 *
 * @author ericjohnson
 */

include_once './include/Data.php';
class Data_MenuBoard extends Data {
      //put your code here
      
      public static $temp_file = './temp-json.json';

      protected function _get(){
            
            return parent::get();
      }
      
      public function get(){
            
            $class_name = 'Data_MenuBoard_'.MenuBoard::$clientclass;
            $class = new $class_name();
            
            return $class->get();
      }
	  
	  public function getContent(){
		return $this->_raw_content;
	  }
      
      public static function saveTempFile($data) {
            return parent::saveTempFile(Data_MenuBoard::$temp_file, $data);
      }
      
      public static function getTempFile($filename){
            return parent::getTempFile($filename);
      }
      
      public static function getFileModificaitonTime($filename) {
            return parent::getFileModificaitonTime($filename);
      }
}

?>
