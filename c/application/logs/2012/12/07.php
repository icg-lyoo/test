<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-07 08:10:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\rtable\events.php [ 67 ]
2012-12-07 08:10:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\rtable\events.php [ 67 ]
--
#0 C:\Windows\WebServer\c\application\classes\controller\rtable\events.php(67): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Windows\WebS...', 67, Array)
#1 [internal function]: Controller_Rtable_Events->action_list()
#2 C:\Windows\WebServer\c\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#3 C:\Windows\WebServer\c\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Windows\WebServer\c\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Windows\WebServer\c\index.php(109): Kohana_Request->execute()
#6 {main}