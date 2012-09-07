<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Response
 *
 * @author ericjohnson
 */
class Response {
      
      private static $type = 'json';
      
      const STATUS_ERROR = 0;
      const STATUS_SUCCESS = 1;
      
      private static $_data;

      public static function out($data, $status=  self::STATUS_SUCCESS, $type='json', $params=array())
      {
            self::$_data = $data;
            
            self::$type = $type;
            
            $response = array();
            $response['status'] = (int) $status;
            
            
            switch ($type){
                  case 'json':
                        
                        $response['data'] = self::$_data;
                        try
                        {
                              $output = json_encode($response);
                        }
                        catch(Exception $e)
                        {
                              Log::write(array('Error encoding JSON', self::$_data), Log::$TYPE_ERROR);
                              $response['status'] = 0;
                              $response['data'] = array();
                              $output = json_encode($response);
                        }
                        break;
                  case 'array':
                        $response['data'] = self::$_data;
                        $output = $response;
                        break;
                  case 'xml':
                        //TODO : build output
                        break;
                  case 'html':
                        $output = $data;
                        break;
                  case 'file':
                        $filename = $params['filename'];
                        
                        if(isset($filename)){
                              
                              Data_MenuBoard::$temp_file = $filename;
                              
                              Data_MenuBoard::saveTempFile($data);
                              Response::out($filename);
                        }else{
                              $msg = 'Output is set to file but there is no filename in the params';
                              Log::write('', Log::$TYPE_ERROR);
                              Response::out($msg, Response::STATUS_ERROR);
                        }
                        break;
            }
            
            if(!isset($params['return'])){
                  echo $output;
                  exit;
            }else{
                  return $output;
            }
            
      }
      
      public static function setType($type){
            self::$_type = $type;
      }
}

?>
