<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-16 17:19:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-05-16 17:19:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-05-16 17:20:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-05-16 17:20:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}