<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-21 05:23:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 226 ]
2013-06-21 05:23:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 226 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(226): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 226, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-21 05:23:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-21 05:23:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/template.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 81, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/reds/home.php(66): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Reds_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}
2013-06-21 05:23:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-21 05:23:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/template.php(81): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 81, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/reds/home.php(66): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Reds_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}