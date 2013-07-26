<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author equemuel
 */
class Controller_Patriots_Ajax_Videowall extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
	public function action_power()
	{
		$stand_name = trim(Arr::get($_REQUEST, 'stand_name'));
		$power_state = (int)Arr::get($_REQUEST, 'power_state');
        $stand_id = trim(Arr::get($_REQUEST, 'stand_id'));

		$result = $this->_pancake_call('patriots', 'videowall', 'power', array(
			'stand_name' => $stand_name,
			'power_state' => $power_state
		));
        
        if($result){
            //waffle push specific video wall after the click.
            $profile_name = strtolower(str_replace(' ', '', $stand_name)).'-profile-'.$stand_id;
            $send_profile_push = $this->_pancake_call('waffle', 'push', 'profile', array(
                'profile_names' => $profile_name,
                'client_id'=>3,
            ), 2);
            
            $pancake_msg = json_decode($send_profile_push);
        
            if($pancake_msg->meta->status==1){
                $result = 1;
            }else{
                $result = 0;
            }
        }
        
//        $data['profile_names'] = Arr::get($_REQUEST, 'profile_name');
//        $data['client_id'] = Arr::get($_REQUEST, 'client_id');
//        $version = 2;
//        $json_decode = FALSE;
//        echo $this->_pancake_call('waffle', 'push', 'profile', $data, $version, $json_decode);
        
		echo $result;
	}
	
	public function action_change_tv_model()
	{
		$stand_id = trim(Arr::get($_REQUEST, 'stand_id'));
		$tv_model = Arr::get($_REQUEST, 'tv_model');

		$result = $this->_pancake_call('patriots', 'videowall', 'change_tv_model', array(
			'stand_id' => $stand_id,
			'tv_model' => $tv_model
		));
		echo $result;
	}

}