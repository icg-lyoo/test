<?php
//array of commands
$commands = array('set', 'get');
$commands['set'] = array('on', 'off');

// "data" parameters of each command
$commands['set']['on'] = array('0x18', '0x02');
$commands['set']['off'] = array('0x18', '0x01');
//$commands['set']['tiling'] = array('0x08', '0x22', '0x01', '0x00');
?>
