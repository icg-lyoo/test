<?php
require_once('Display.class.php');

class atlonaMatrix extends Display
{
	var $comport;
	var $model;
	
	function atlonaMatrix($model, $comport = 1)
	{
		$this->comport = $comport;
		$this->model = $model;
	}
	
	function powerOff()
	{
		if($this->model == 'philips')
		{
			echo 'hello';
			$first = 'RS232zone1[';
			$middle = '0x05,0x00,0x18,0x01,0x1C';//parent::hexToStr('050018011C');
			$final = $first/* . $middle*/;
			$final = parent::asc2bin(($final.parent::hex2bin($middle)), false);
			$final .= parent::asc2bin(']');

			parent::send_msg($final, 115200);
		}
		if($this->model == 'sharp')
		{
			$off = 'ka 0 0';
			$off = parent::asc2bin($off);
			parent::send_msg($off);
		}
	}
	
	function powerOn()
	{
		if($this->model == 'philips')
		{
			$first = 'RS232zone1[';
			$middle = '0x05,0x00,0x18,0x02,0x1F';//parent::hexToStr('050018011C');
			$final = $first . $middle;
			$final = parent::asc2bin($final);
			$final .= parent::hex2bin($middle).parent::asc2bin(']');

			parent::send_msg($final, 115200);
		}
		if($this->model = 'sharp')
		{
			$on = 'ka 0 1';
			$on = parent::asc2bin($on);
			parent::send_msg($on);
		}
	}
	
	function changeInput($input/*, $outputs*/)
	{
		/*if(!is_array($outputs))
		{
			$outputs = array($outputs);
		}*/
		
		//temporary solution to change all outputs to a different input
		$outputs = array();
		for($i = 1; $i <=9; $i++)
		{
			$outputs[] = $i;
		}
		
		$serial_message = 'x' . $input . 'AV';
		
		$firstRun = true;
		foreach($outputs as $output)
		{
			if($firstRun)
			{
				$firstRun = false;
				$serial_message .= 'x' . $output;
			}
			else
			{
				$serial_message .= ',x' . $output;
			}
		}
		
		$serial_message =  parent::asc2bin($serial_message);
		parent::send_msg($serial_message);
	}
}

?>
