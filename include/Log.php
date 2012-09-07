<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Log
 *
 * @author ericjohnson
 */
class Log {
      //put your code here
      
      private static $_folder = './log/';
      
      private static $_file = 'log.txt';
      private static $_message;
      
      public static $TYPE_STATUS = array(1001, 'LOG_STATUS');
      public static $TYPE_WARNING = array(1005, 'LOG_WARNING');
      public static $TYPE_ERROR = array(1009, 'LOG_ERROR');


      private function __construct() {
            
            self::_log_exist();
      }
      
      public static function _log_exist(){
            try
            {
                  @mkdir(self::$_folder, 0777);
                  self::$_file = self::$_folder.'/log-'.date('m-d-y').'.txt';
                  $r = true;
            }catch(Exception $e){
                  self::write('Error creating folder '.self::$_folder, self::$TYPE_ERROR);
                  $r = true;
            }
            
            return $r;
      }
      
      public static function write($data, $type=false){
            
            $type = (!$type)?self::$TYPE_STATUS:(array) $type;
            
            $ts = time();
            self::$_message = array();
            self::$_message['time'] = $ts.' - '.date('h:i:s', $ts);
            self::$_message['type'] = $type[0]. ':'.$type[1];
            self::$_message['text'] = (is_string($data))?$data:print_r($data, true);
            
            self::save();
      }
      
      private static function save(){
            
            if(self::_log_exist()){
                  $output = implode('     ', self::$_message)."\r\n";
                  file_put_contents(self::$_file, $output, FILE_APPEND);
            }
      }
}

?>
