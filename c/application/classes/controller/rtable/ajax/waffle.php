<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Controller waffle
 * 
 * Created Nov 1, 2012 4:49:01 PM
 * @author equemuel
 */
class Controller_Rtable_Ajax_Waffle extends Controller_ICG_v1_ICG
{	
	public function before()
	{
		
	}
	
	public function action_push()
	{
        $now = time();
		$data['room'] = 'rtable';
		$data['profile_names'] = array('rtp-pilot-1');
		$data['client_id'] = 4;
        $data['consumer_key'] = md5('rtable');
        $data['auth_ts'] = $now;
        $data['signature'] = $this->generate_signature($data['consumer_key'], $data['consumer_key'], $now);
		echo $this->_pancake_call('waffle', 'push','profile', $data, 2);
	}
}