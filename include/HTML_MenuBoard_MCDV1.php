<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTML_MenuBoard_MCDV1
 *
 * @author ericjohnson
 */
include_once './include/HTML_MenuBoard.php';

class HTML_MenuBoard_MCDV1 extends HTML_MenuBoard {
      //put your code here
      
      public function __construct() {
            $html = parent::_generate();
      }
      
      
      public function generateContent() {
            
            $vars = array();

            $data = Data::$current_data;
            
            //check for modifiction file
            if(file_exists(Data_MenuBoard_MCDV1::$mod_data_path)){
                  //check for mod data file
                  // when files exists delete it as this function is 
                  // called after the check for an update takes place
                  try{
                        unlink(Data_MenuBoard_MCDV1::$mod_data_path);
                        Log::write('Modfication file exist and was deleted', Log::$TYPE_STATUS);
                  }catch(Exception $e){
                        Log::write('Modfication file exist but cant be deleted, Check system permissions', Log::$TYPE_ERROR);
                  }
            }
            
            if(isset($data['status']) && $data['status'] == Data_MenuBoard_MCDV1::RESPONSE_STORE_CLOSED){
                  $vars['content']= '<div class="store-closed"></div>';
            }elseif(!isset($data['zones']) || isset($data['status'])){
                  //there is an issue with the current data
                  Log::write('There is an issue with the current data, outputing no content', Log::$TYPE_ERROR);
                  $vars['content']= '';
            }else{
                  $zones = $data['zones'];

                  $content = '';
                  $i = 1;
                  $zoneNum = '';
                  foreach($zones as $key=>$zone)
                  {
                        $zoneVars = array();
                        $zoneVars = $this->generate_zone($zone);

                        $zoneNum = 'zone'.$i;
                        $zoneVars['container']['class'] .= ' '.$data['display_name'].' '.$zoneNum.' zone-container';

                        $content .= View::template('zone', $zoneVars);

                        $i++;
                  }

                  $vars['content'] = $content;
            }
            
            return $vars;
      }
      
      /**
       * MCD's interpurtation for checking for content updates
       * 
       * First checks for a modification file which would be defined in Data_MenuBoard_ClientName
       * 
       * Then checks for a update in schedule data based on the current MenuBoard Timestamp
       * 
       * @return boolean 
       */
      public function checkForContentUpdate(){
            
            $ts = MenuBoard::$ts;
            $dataRefresh = (int) $_REQUEST['dataRefresh']+2;
            $r = false;
            
            if(file_exists(Data_MenuBoard_MCDV1::$mod_data_path)){
                  
                  Log::write('Modification file exists. Menuboard should load new content', Log::$TYPE_STATUS);
                  $r = true;
          
            }elseif(Data_MenuBoard_MCDV1::getScheduleID($ts) != Data_MenuBoard_MCDV1::getScheduleID($ts-$dataRefresh)){
                 
                  //has the schedule ID changed in the last dataRefresh Seconds?
                  Log::write('New schedule data should now be showing', Log::$TYPE_STATUS);
                  $r = true;
            }
            
            return $r;
      }
      
      
      private function generate_zone($zone){
            
            $vars = array('content'=>'',
                              'container'=>array('class'=>''));
            $output = '';
            
            if(isset($zone['menus'])){
                  $key = 'menus';
                  $func = 'generate_'.$key;
                  $zoneData = $zone[$key];
                  $vars['content'] .= View::template($key, $this->$func($zoneData));
            }
            if(isset($zone['promo'])){
                  $key = 'promo';
                  $func = 'generate_'.$key;
                  $zoneData = $zone[$key];
                  
                  if(count(array_keys($zone))>1){
                        //small promo
                        $vars['content'] .= View::template($key, $this->$func($zoneData));
                  }else{
                        //large promo
                        $func = 'generate_pfe';
                        $vars['content'] .= View::template('pfe', $this->$func($zoneData));
                  }
            }
            if(isset($zone['pfe'])){
                  $key = 'pfe';
                  $func = 'generate_'.$key;
                  $zoneData = $zone[$key];
                  $vars['content'] .= View::template($key, $this->$func($zoneData));
                  $vars['container']['class'] .= ' pfe-container';
            }
            if(isset($zone['evm'])){
                  $key = 'evm';
                  $func = 'generate_'.$key;
                  $zoneData = $zone[$key];
                  $vars['content'] .= View::template($key, $this->$func($zoneData));
                  $vars['container']['class'] .= ' evm-container';
            }
            
            return $vars;
      }
      
      private function generate_promo($data, $params=array()){
            
            $variables = array();
            
            $variables['height'] = (isset($params['height']))?$params['height']:556;
            $variables['width'] = (isset($params['width']))?$params['width']:960;
            $variables['offset'] = (isset($params['offset']))?$params['offset']:'31,0';
            $variables['promos'] = $data;
            
            $bg = (isset($params['bg']))?$params['bg']:  View::$media_base.'/bg.png';
            
            $flashvars = array(
                  'mediaPath' => View::$media_base.'/',
                  'bgImg' => $bg,
            );
            
            if(isset($variables['offset'])){
                  $flashvars['promoOffset'] = $variables['offset'];
            }

            $fv = null;
            foreach ($flashvars as $key => $flvs) {
                  if ($fv) {
                        $fv .= ',';
                        $fv .= '"' . $key . '":"' . $flvs . '"';
                  } else {
                        $fv .= '"' . $key . '":"' . $flvs . '"';
                  }
            }
            
            $variables['fv'] = $fv;
            $variables['id'] = (is_array($data) && isset($data[0]['nid']))?$data[0]['nid']:rand(0, time());
            
            return $variables;
      }
      
      private function generate_menus($data)
      {
            $variables = array();
            
            $menus = $data;
            $output = '';
            foreach ($menus as $menu) {
                  
                  $items = $menu['menuitems'];
                  $category = $menu['id'];
                  $header_image = $menu['header_image'];
                  $header_image_path = 'assets/header/' . $header_image;
                  if (!file_exists($header_image_path)) {
                        Log::write('Couldnt find header image defiend in the data, trying to use category has the image name : '.$category, Log::$TYPE_WARNING);
                        $header_image_path = 'assets/header/' . $category.'.png';
                  }
                  
                  if (isset($items)) {
                        $menu_items = $this->generate_menu_items($items);
                  }
                  
                  $menuVars = array();
                  $menuVars['category'] = $category;
                  $menuVars['header_image_path'] = $header_image_path;
                  $menuVars['menu_items'] = $menu_items;
                  $menuVars['class'] = '';
                  
                  
                  $output .= View::template('menu', $menuVars);
            }
            
            $variables['content'] = $output;
           
            
            return $variables;
      }
      
      private function generate_menu_items($items)
      {
            
            $output = View::template('items', array('items'=>$items));
            
            return $output;
      }

      private function generate_evm($data)
      {
            $variables = array();
            
            $item_content = '';
            
            $i = 1;
            foreach ($data['evm_items'] as $item) {
                  
                  $title = $item['title'];
                  $title_len = strlen($title);
                  $title_class = ($title_len > 26) ? 'evm-title long-evm-title' : 'evm-title';
                  $pricing = $item['pricing'];
                  $price_count = count($item['pricing']);
                  
                  if ($price_count % 3 == 0) {
                        $price_class = 'container price-cols-3';
                  } elseif ($price_count % 2 == 0) {
                        $price_class  = 'container price-cols-2';
                  } else {
                        $price_class  = 'container price-cols-1';
                  }

                  if ($price_count > 3) {
                        $price_class  .= " price-rows-2";
                  }
                  $vars = array();
                  $color = Utils::hexColorToString($item['color']);
                  $vars['image'] = View::$media_base.'/'.$item['media'];
                  $vars['title']['value'] = $title;
                  $vars['title']['class'] = 'evm-title '.$title_class;
                  $vars['price']['value'] = (!empty($pricing))?$pricing:false;
                  $vars['price']['class'] = $price_class;
                  $vars['container']['id'] = $item['nid'];
                  $vars['container']['class'] = 'evm evm'.$i;
                  $vars['number']['value'] = $i;
                  $vars['number']['class'] = 'evm-number evm-number-'.$color;
                  $pricingVars['pricing'] = $vars['price']['value'];
                  $pricingVars['color'] = $color;
                  $vars['pricing_content'] = View::template('evm_item_price', $pricingVars);
                  $vars['footnote'] = (isset($item['footnote']))?$item['footnote']:'';
                  
                  $item_content .= View::template('evm_item', $vars);
                  $i++;
            }
            
            return array('content'=>$item_content);
      }
      
      private  function generate_pfe($data){
            
            $variables = array();
            
            $pfeVars['bg'] = 'media/bg-pfe.png';
            $pfeVars['height'] = 1080;
            $pfeVars['offset'] = '31,51';
            
            $variables = $this->generate_promo($data, $pfeVars);
            
            return $variables;
      }
      
      
      
}

?>
