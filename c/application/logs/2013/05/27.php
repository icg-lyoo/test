<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-27 07:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/images/frencfries.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 07:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/images/frencfries.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 07:46:20 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-05-27 07:46:20 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-05-27 07:47:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-05-27 07:47:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-05-27 07:49:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-05-27 07:49:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-05-27 07:53:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-05-27 07:53:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-05-27 10:45:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:45:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:46:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:46:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:51:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:51:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:51:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:51:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 10:59:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 10:59:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:03:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:03:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:04:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:04:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:04:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:04:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-05-27 11:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-05-27 11:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds_ui/index.php/menu2 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}