<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuBoard
 *
 * @author ericjohnson
 */

include_once './include/Data.php';
include_once './include/Log.php';
include_once './include/Response.php';
include_once './include/Utils.php';
include_once './include/View.php';

class MenuBoard {
      
      protected $dev = true;
      protected $base_path = '';
      protected $_data_path;
      protected $_dataContent;
	  protected $_mb_data;

      public static $preview = false;
      public static $preview_zone = 'zone1';
      public static $ts;
      
      public static $clientclass = '';

      const CONTENT_ALL = 'content_all';//get all schedule content
      const CONTENT_CURRENT = 'content_current';//get current schedule content
      const CONTENT_TS = 'content_ts';//get content from ts
      const CONTENT_RECURSIVE = 'content_recursive';//get current schedule content,if content data cant be returned recursively look for the most relevant data

      public function __construct() 
      {
            $this->_data_path = Data::$data_path;
            self::$ts = (!isset(self::$ts))?time():self::$ts;//set timestamp if not already set
      }
      
      public function generateContent($flag=MenuBoard::CONTENT_RECURSIVE)
      {
            $status = 1;
            
            if($this->include_client_files()){
            
                  //TODO: build out flags
                  
                  Data::$current_data = $this->getData();
                  $type = (isset($_REQUEST['type']))?$_REQUEST['type']:-1;
                  $filename = (isset($_REQUEST['filename']))?$_REQUEST['filename']:false;
                  
                  switch($type){
                        case -1:
                              Response::out(View::template('index', array()), null, 'html');
                              break;
                        case 0:
                              //generate all HTML
                              $vars = $this->generateMenuBoardContent();            
                              //save file and output status
                              Response::out($vars['content'], Response::STATUS_SUCCESS, 'file', array('filename'=>$filename));
                              break;
                        case 1:
                              //retrieve file contents and output them
                              Response::out(Data_MenuBoard::getTempFile($filename), Response::STATUS_SUCCESS, 'html');
                              break;
                        case 2:
                              //check for updated data file or change in schedule
                              $update = $this->checkForMenuBoardContentUpdate();
                              if($update){
                                    //generate all HTML
                                    $vars = $this->generateMenuBoardContent();            
                                    //save file and output status
                                    Response::out($vars['content'], Response::STATUS_SUCCESS, 'file', array('filename'=>$filename));
                              }else{
                                    Response::out('No Update', Response::STATUS_ERROR);
                              }
                              break;
                  }
            }

            return $status;
      }
      
      private function include_client_files(){
            
            $class_array = array('Data_MenuBoard','HTML_MenuBoard');
            
            foreach($class_array as $class){
                  $file = Data::$include_path.$class.'_'.MenuBoard::$clientclass.'.php';
                  try{
                        include_once $file;
                  }catch(Exception $e){
                        //TODO : Insert log here
                  }
            }
            
            return true;
      }
      
      private function getData(){
            $this->_mb_data = new Data_MenuBoard();
            return $this->_mb_data->get();
      }
      
      private function generateMenuBoardContent(){
            $g = new HTML_MenuBoard();
            return $g->generateContent();
      }
      
      private function checkForMenuBoardContentUpdate(){
            $mb = new HTML_MenuBoard();
            return $mb->checkForContentUpdate();
      }
}

?>
