<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-07 08:48:06 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/views/patriots/template.php [ 238 ]
2013-06-07 08:48:06 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/views/patriots/template.php [ 238 ]
--
#0 /home/icgclien/public_html/c/application/views/patriots/template.php(238): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 238, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(53): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Patriots_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}
2013-06-07 08:49:53 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/patriots/template.php [ 235 ]
2013-06-07 08:49:53 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/patriots/template.php [ 235 ]
--
#0 /home/icgclien/public_html/c/application/views/patriots/template.php(235): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 235, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(53): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Patriots_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}
2013-06-07 08:51:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/patriots/template.php [ 235 ]
2013-06-07 08:51:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/patriots/template.php [ 235 ]
--
#0 /home/icgclien/public_html/c/application/views/patriots/template.php(235): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 235, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(53): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Patriots_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}
2013-06-07 08:51:12 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 08:51:12 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Patriots_Ajax_Event))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 11:15:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 11:15:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 11:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-07 11:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-06-07 13:46:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 13:46:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 13:46:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 13:46:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 17:01:05 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 247 ]
2013-06-07 17:01:05 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 247 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 247, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(271): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:01:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 247 ]
2013-06-07 17:01:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 247 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 247, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(271): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:01:19 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 53 ]
2013-06-07 17:01:19 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 53 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(53): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 53, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Login))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:04:12 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 17:04:12 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Reds_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:05:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 247 ]
2013-06-07 17:05:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 247 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(247): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 247, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(271): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:05:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 153 ]
2013-06-07 17:05:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 153 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(153): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 153, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(251): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:05:55 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 153 ]
2013-06-07 17:05:55 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 153 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(153): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 153, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(251): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:05:59 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 17:05:59 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Login))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:06:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 17:06:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 17:06:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 17:06:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 17:07:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-07 17:07:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(251): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:07:38 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 17:07:38 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Login))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:07:52 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 17:07:52 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Login))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:09:16 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 17:09:16 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:09:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-07 17:09:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(251): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:11:41 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-07 17:11:41 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Reds_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:20:49 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-06-07 17:20:49 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:27:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-06-07 17:27:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:28:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-06-07 17:28:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-07 17:29:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-07 17:29:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(251): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-06-07 17:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-07 17:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-06-07 17:46:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 17:46:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 17:47:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 17:47:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-07 18:00:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-07 18:00:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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