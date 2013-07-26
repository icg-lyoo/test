<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-04 21:01:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 226 ]
2013-06-04 21:01:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 226 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(226): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 226, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-04 21:01:43 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 226 ]
2013-06-04 21:01:43 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 226 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(226): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 226, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}