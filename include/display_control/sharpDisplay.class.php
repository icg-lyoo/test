<?php
/**
 * Description of philipsDisplay
 *
 * @author equemuel
 */
require_once('sharpCommands.php');
//require_once('php_serial.class.php');

class sharpDisplay {
    
    //var $num_displays;
    var $comport;
    //var $serial;
    
    function sharpDisplay(/*$num_displays, */$comport)
    {
        //if($num_displays > 25) die('Invalid number of displays.');
        //$this->num_displays = $num_displays;
        $this->comport = $comport;
        /*$this->serial = new phpSerial();
        $this->serial->deviceSet("COM" . $comport);
        $this->serial->deviceClose();
        $this->serial->confBaudRate(9600);
        $this->serial->confParity('none');
        $this->serial->confCharacterLength(8);
        $this->serial->confStopBits(1);
        $this->serial->confFlowControl('none');
        $this->serial->deviceOpen();*/
    }
    
    function powerOn($id = 0)
    {
        if($id < 0 || $id > $this->num_displays) die('Invalid id.');
        foreach($this->getSerialCommand($commands['set']['on'], $id) as $serialCommand)
                //$this->serial->sendMessage($serialCommand);
				parent::send_msg($serialCommand);
    }
    
    function powerOff($id = 0)
    {
        if($id < 0 || $id > $this->num_displays) die('Invalid id.');
        foreach($this->getSerialCommand($commands['set']['off'], $id) as $serialCommand)
                //$this->serial->sendMessage($serialCommand);
				parent::send_msg($serialCommand);
    }
    
    function getSerialCommand($command, $id)
    {
        $serialcommands = array();
        if($id != 0)
        {
            $serialcommands[0] = "IDSL";
            if($id / 10 < 1) $serialcommands[0] .= '000';
            else $serialcommands[0] .= '00';
            $serialcommands[0] .= $id;
            $serialcommands[1] = $command[0];
            if($command[1] / 10 < 1) $serialcommands[1] .= '   ';
            else if($command[1] / 100 < 1) $serialcommands[1] .= '  ';
            else if($command[1] / 1000 < 1) $serialcommands[1] .= ' ';
            else continue;
            $serialcommands[1] .= $command[1];
        }
        else
        {
            $serialcommands[0] = $command[0];
            if($command[1] / 10 < 1) $serialcommand .= '  ';
            else if($command[1] / 100 < 1) $serialcommand .= ' ';
            else continue;
            $serialcommand .= $command[1] . '+';
        }
		$serialcommands = parent::asc2bin($serialcommands);
        return $serialcommands;
    }
}

?>