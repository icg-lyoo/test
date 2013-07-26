<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-05 10:57:47 --- ERROR: ErrorException [ 2 ]: usort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\reds\home.php [ 43 ]
2012-12-05 10:57:47 --- STRACE: ErrorException [ 2 ]: usort() expects parameter 1 to be array, null given ~ APPPATH\classes\controller\reds\home.php [ 43 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'usort() expects...', 'C:\Windows\WebS...', 43, Array)
#1 C:\Windows\WebServer\c\application\classes\controller\reds\home.php(43): usort(NULL, 'sortStands')
#2 [internal function]: Controller_Reds_Home->action_index()
#3 C:\Windows\WebServer\c\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Home))
#4 C:\Windows\WebServer\c\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Windows\WebServer\c\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Windows\WebServer\c\index.php(109): Kohana_Request->execute()
#7 {main}