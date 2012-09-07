<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author ericjohnson
 */

include_once './include/Log.php';

class Utils {
      
      public static function JSON_ENCODE($obj)
      {
            try
            {
                  $json_string = json_encode($obj);
            }catch(Exception $e){
                  Log::write(array('Error encoding JSON string : ', $obj), Log::$TYPE_ERROR);
                  $json_string = null;
            }
            
            return $json_string;
      }
      
      public static function JSON_DECODE($json_string){
            try
            {
                  $obj = json_decode($json_string, true);
            }catch(Exception $e){
                  Log::write(array('Error decoding json string ,', $json_string),  Log::$TYPE_ERROR);
                  $obj = null;
            }
            
            return $obj;
      }
      
      public static function FILE_NO_CACHE($filename){
            
            if(!strstr($filename, '?')){
                  $filename .= '?';
            }
            
            if(!strstr($filename, 'c=')){
                  $filename .= 'c='.rand(0, time());
            }
            
            return $filename;
      }
      
      public static function hexColorToString($hex_str){
            
            switch($hex_str){
                  case '0x974E30':
                        $color = 'brown';
                        break;
                  case '0xBB2025':
                        $color = 'red';
                        break;
                  case '0x732673':
                        $color = 'purple';
                        break;
                  default:
                        $color = 'red';
                        break;
            }
            
            return $color;
      }
}

?>
