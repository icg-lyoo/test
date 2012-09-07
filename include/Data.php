<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Data
 *
 * @author ericjohnson
 */
class Data {
      //put your code here
      
      public static $data_path = './data.json';
      public static $include_path = './include/';
      protected $_raw_content;
      public static $json_content;
      
      public static $current_data;


      protected function get(){
            
            try{
                  $this->_raw_content = file_get_contents(self::$data_path);
                  
            }catch(Exception $e){
                  Log::write('Error getting file contents from '.self::$data_path, Log::$TYPE_ERROR);
            }
			
			self::$json_content = Utils::JSON_DECODE($this->_raw_content);
            
            return self::$json_content;
      }
      
      public static function saveTempFile($filename, $data){
            $status = true;
            
            try{
                  file_put_contents($filename, $data);
            }catch(Exception $e){
                  Log::write('Error trying to save temp file '.$filename, Log::$TYPE_ERROR);
                  $status = false;
            }
            
            return $status;
      }
      
      public static function getTempFile($filename){
            
            $status = true;
            
            if(file_exists($filename)){
                  Log::write('Getting Temp File '. $filename, Log::$TYPE_STATUS);
                  $contents = file_get_contents($filename);
            }else{
                  Log::write('Error getting contents of file : '. $filename, Log::$TYPE_ERROR);
                  $contents = 'No temp File';
            }
            
            return $contents;
      }
      
      public static function getFileModificaitonTime($filename){
            
            if(file_exists($filename)){
                  Log::write('Getting Temp File Modifiction time '. $filename, Log::$TYPE_STATUS);
                  $ts = filemtime($filename);
            }else{
                  Log::write('Error getting timestamp of : '. $filename.' doesnt seem to exist.', Log::$TYPE_ERROR);
                  $ts = 0;
            }
            
            return $ts;
      }
}

?>
