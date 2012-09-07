<?php
//array of commands
$commands = array('set', 'get');
$commands['set'] = array('on', 'off');

// "data" parameters of each command
$commands['set']['on'] = array('k', 'a', '1');
$commands['set']['off'] = array('k', 'a', '0');
?>
