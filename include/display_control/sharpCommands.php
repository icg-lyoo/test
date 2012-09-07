<?php
//array of commands
$commands = array('set', 'get');
$commands['set'] = array('on', 'off');

// "data" parameters of each command
$commands['set']['on'] = array('POWR', '1');
$commands['set']['off'] = array('POWR', '0');
?>
