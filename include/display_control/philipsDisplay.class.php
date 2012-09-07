<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of philipsDisplay
 *
 * @author equemuel
 */
require_once('Display.class.php');

class philipsDisplay extends Display{
    
    //var $num_displays;
    var $comport;
    var $commands;
	//var $id;
    
    function philipsDisplay(/*$num_displays, */$comport = 1)
    {
        //$this->num_displays = $num_displays;
        $this->comport = $comport;
        include('philipsCommands.php');
        $this->commands = $commands;
    }
    
    function powerOn($id = 0)
    {
        //if($id < 0 || $id > $this->num_displays) die('Invalid id.');
        parent::send_msg($this->getHexCommand($this->commands['set']['on'], $id));
    }
    
    function powerOff($id = 0)
    {
        //if($id < 0 || $id > $this->num_displays) die('Invalid id.');
		//echo($this->getHexCommand($this->commands['set']['off'], $id));
        parent::send_msg($this->getHexCommand($this->commands['set']['off'], $id));
    }
	
    function setTiling($id, $h_mon, $v_mon, $pos)
    {
		$hexcommand = '0x08, 0x';
		if($id / 10 < 1) $hexcommand .= '0';
		$hexcommand .= $id . ', 0x22, 0x01, 0x00, 0x';
		if($pos / 10 < 1) $hexcommand .= '0';
		$hexcommand .= $pos . ', 0x';
		if(strlen($this->calcMonSetup($h_mon, $v_mon)) == 2)
		{
			$hexcommand .= $this->calcMonSetup($h_mon, $v_mon);
		}
		else
		{
			$hexcommand .= '0' . $this->calcMonSetup($h_mon, $v_mon);
		}
		
		$hexcommand = parent::add_checksum($hexcommand);
		$hexcommand = parent::hex2bin($hexcommand);
		parent::send_msg($hexcommand);
    }
	
   function setWings()
   {
	   
   }
   
   function setRightWing()
   {
	   
   }
   
   function input2hdmi(/*$id = 0*/)
   {
	   $hexcommand = '0x08, 0x00, 0xAC, 0x09, 0x00, 0x01, 0x00, 0xAC';
	   $hexcommand = parent::hex2bin($hexcommand);
	   parent::send_msg($hexcommand);
   }
   
    function calcMonSetup($h, $v)
    {
	$result = ((($v - 1) * 15) + $h);
	return dechex($result);
    }
	
    function getHexCommand($command, $id, $bin = true)
    {
        $msgsize = count($command) + 3;
        $hexcommand = '0x';
        if($msgsize / 10 < 1) $hexcommand .= '0';
        $hexcommand .= $msgsize . ', 0x';
        if($id / 10 < 1) $hexcommand .= '0';
        $hexcommand .= $id;
        foreach($command as $data)
        {
            $hexcommand .= ', ' . $data;
        }
        $hexcommand = parent::add_checksum($hexcommand);
//		echo $hexcommand;
        if($bin) $hexcommand = parent::hex2bin($hexcommand);
        return $hexcommand;
    }
    
}

?>
