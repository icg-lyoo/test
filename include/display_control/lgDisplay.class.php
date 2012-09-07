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

class lgDisplay extends Display{
    
    //var $num_displays;
    var $comport;
	var $commands;
    //var $id;
	
    function lgDisplay(/*$num_displays, */$comport = 1)
    {
        //$this->num_displays = $num_displays;
        $this->comport = $comport;
        include('lgCommands.php');
        $this->commands = $commands;
    }
    
    function powerOn($id = 0)
    {
        //if($id < 0 || $id > $this->num_displays) die('Invalid id.');
        parent::send_msg($this->getSerialCommand($this->commands['set']['on'], $id));
    }
    
    function powerOff($id = 0)
    {
        //if($id < 0 || $id > $this->num_displays) die('Invalid id.');
        parent::send_msg($this->getSerialCommand($this->commands['set']['off'], $id));
    }
    
    function getSerialCommand($command, $id)
    {
        $serialcommand = $command[0] . $command[1] . ' ' . $id . ' ' . $command[2];
        $serialcommand = parent::asc2bin($serialcommand);
        return $serialcommand;
    }
}

?>
