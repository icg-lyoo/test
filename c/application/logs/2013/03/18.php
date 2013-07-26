<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-18 17:19:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 17:19:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 17:20:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:20:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:20:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:20:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:20:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:20:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:20:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:20:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:20:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:20:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:20:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:20:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:21:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:21:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 17:21:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 17:21:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 19:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 19:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 19:51:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 19:51:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 19:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 19:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 19:59:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 19:59:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 19:59:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 19:59:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:00:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:00:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-03-18 20:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-03-18 20:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-03-18 20:12:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 20:12:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(306): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 20:26:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 20:26:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(309): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 20:29:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
2013-03-18 20:29:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 230 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(230): Kohana_Core::error_handler('/home/icgclien/...', Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(309): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query(Object(Controller_Reds_Ajax))
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-18 20:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/reds/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-18 20:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/reds/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}