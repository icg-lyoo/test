<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author ericjohnson
 */

class View {
      //put your code here
      
      public static $template_folder = './templates/';
      public static $template_base = 'View';
      public static $media_base = './media';
      
      public static function template($name, $variables)
      {
            
            if(is_string($variables))
            {
                  $variables = array('content'=>$variables);
            }elseif(!isset($variables['content']))
            {
                  $variables['content'] = '';
            }
            
            //define variables
            foreach($variables as $key=>$v){
                  $$key = $v;
            }
            
            $template_file = self::$template_folder.self::buildTemplateName($name);
            
            if(!file_exists($template_file)){
                  self::template('View.inc', $variables);
            }else{
                  
                  ob_start();
                  include $template_file;
                  
                  $output = ob_get_clean();
                  return $output;
            }
      }
      
      private static function buildTemplateName($n){
            
            if(strstr($n, '.inc')){
                  return $n;
            }
            
            $name[] = self::$template_base;
            $name[] = MenuBoard::$clientclass;
            $name[] = $n;
            
            return implode('_', $name).'.inc';
      }
}

?>
