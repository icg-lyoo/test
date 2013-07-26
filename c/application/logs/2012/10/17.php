<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-17 09:42:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-17 09:42:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(107): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 09:50:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-17 09:50:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(107): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 10:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/events/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-17 10:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/events/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 10:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/disclaimer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-17 10:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/disclaimer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 10:17:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/rtable/ajax/events.php [ 60 ]
2012-10-17 10:17:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: event ~ APPPATH/classes/controller/rtable/ajax/events.php [ 60 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/ajax/events.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Ajax_Events->action_delete(Object(Controller_Rtable_Ajax_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 10:44:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
2012-10-17 10:44:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(111): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(106): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 10:44:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
2012-10-17 10:44:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(111): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(106): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 10:45:02 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
2012-10-17 10:45:02 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(111): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(106): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 10:45:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
2012-10-17 10:45:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 111 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(111): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(106): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 10:50:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/event/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 10:50:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/event/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 10:52:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-17 10:52:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/\ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 11:12:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 122 ]
2012-10-17 11:12:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 122 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(122): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(82): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:13:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 135 ]
2012-10-17 11:13:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 135 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(135): Kohana_Core::error_handler(Array)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 11:14:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/classes/controller/rtable/events.php [ 118 ]
2012-10-17 11:14:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/classes/controller/rtable/events.php [ 118 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(118): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:27:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: bg ~ APPPATH/classes/controller/rtable/events.php [ 119 ]
2012-10-17 11:27:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: bg ~ APPPATH/classes/controller/rtable/events.php [ 119 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(119): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:27:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: scalable ~ APPPATH/classes/controller/rtable/events.php [ 121 ]
2012-10-17 11:27:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: scalable ~ APPPATH/classes/controller/rtable/events.php [ 121 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(121): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:28:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: width ~ APPPATH/views/rtable/events/preview.php [ 101 ]
2012-10-17 11:28:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: width ~ APPPATH/views/rtable/events/preview.php [ 101 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(101): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(130): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:29:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
2012-10-17 11:29:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(6): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(100): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:29:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/rtable/events.php [ 63 ]
2012-10-17 11:29:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/rtable/events.php [ 63 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:29:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
2012-10-17 11:29:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(6): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(100): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:30:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
2012-10-17 11:30:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(6): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(100): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:30:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
2012-10-17 11:30:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(6): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(101): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:31:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
2012-10-17 11:31:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: swfData ~ APPPATH/views/rtable/events/preview.php [ 6 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(6): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(98): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:32:12 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 116 ]
2012-10-17 11:32:12 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 116 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:32:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: resut ~ APPPATH/classes/controller/rtable/events.php [ 116 ]
2012-10-17 11:32:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: resut ~ APPPATH/classes/controller/rtable/events.php [ 116 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:33:04 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 116 ]
2012-10-17 11:33:04 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 116 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:33:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 117 ]
2012-10-17 11:33:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 117 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(117): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 11:34:56 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/preview.php [ 101 ]
2012-10-17 11:34:56 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/preview.php [ 101 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(101): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(131): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:36:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/preview.php [ 101 ]
2012-10-17 11:36:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/preview.php [ 101 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(101): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(133): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 11:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:40:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:40:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:41:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:41:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:43:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:43:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:44:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:44:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:44:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:44:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:46:25 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/rtable/events.php [ 141 ]
2012-10-17 11:46:25 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/rtable/events.php [ 141 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(141): Kohana_Core::error_handler(Array)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 11:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:47:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:47:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:47:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:47:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:47:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:47:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:50:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:50:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:51:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:51:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:51:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:51:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:51:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:51:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:51:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:55:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:55:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:55:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:55:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:56:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:56:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:56:37 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
2012-10-17 11:56:37 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(142): Kohana_Core::error_handler(NULL)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 11:57:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:57:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:57:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
2012-10-17 11:57:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(142): Kohana_Core::error_handler(NULL)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 11:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:57:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
2012-10-17 11:57:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(142): Kohana_Core::error_handler(NULL)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 11:57:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:57:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:57:37 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
2012-10-17 11:57:37 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(142): Kohana_Core::error_handler(NULL)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 11:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 11:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 11:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:00:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:00:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:06:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/media/rtable/rtp.mp4 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:06:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/media/rtable/rtp.mp4 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:23:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:23:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/asdf.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/asdf.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 12:24:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
2012-10-17 12:24:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 142 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(142): Kohana_Core::error_handler(NULL)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(116): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 12:37:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 12:37:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 13:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 13:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 13:59:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/classes/controller/rtable/events.php [ 126 ]
2012-10-17 13:59:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/classes/controller/rtable/events.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_rtab...')
#1 {main}
2012-10-17 13:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/c/assets/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 13:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/c/assets/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:00:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/c/assets/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 14:00:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/c/assets/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:05:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 14:05:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:17:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/media/rtable/rtp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 14:17:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/media/rtable/rtp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:17:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/media/rtable/rtp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 14:17:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/media/rtable/rtp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:18:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/media/rtable/rtp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 14:18:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/media/rtable/rtp.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 14:26:11 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/edit.php [ 117 ]
2012-10-17 14:26:11 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/edit.php [ 117 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(117): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 14:34:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/edit.php [ 117 ]
2012-10-17 14:34:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/edit.php [ 117 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(117): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 14:46:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/edit.php [ 117 ]
2012-10-17 14:46:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/edit.php [ 117 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(117): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 15:10:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:10:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:19:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 132 ]
2012-10-17 15:19:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/classes/controller/rtable/events.php [ 132 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(132): Kohana_Core::error_handler(NULL)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(105): Controller_Rtable_Events->_generateSWFJSON()
#2 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-17 15:20:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 105 ]
2012-10-17 15:20:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 105 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(105): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-17 15:37:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: preview ~ APPPATH/views/rtable/events/edit.php [ 80 ]
2012-10-17 15:37:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: preview ~ APPPATH/views/rtable/events/edit.php [ 80 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(80): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 15:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:45:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:45:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:49:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:49:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:50:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:50:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 15:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Capture1350512982.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 15:59:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/events/previewChangeTitle was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-17 15:59:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/events/previewChangeTitle was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 16:30:48 --- ERROR: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH/classes/controller/rtable/ajax/media.php [ 44 ]
2012-10-17 16:30:48 --- STRACE: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH/classes/controller/rtable/ajax/media.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-17 16:36:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/views/rtable/events/preview.php [ 140 ]
2012-10-17 16:36:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/views/rtable/events/preview.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/home/icgtest/p...', Array)
#1 {main}
2012-10-17 16:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/media/rtable/Capture1350512982_1350516025.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 16:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/media/rtable/Capture1350512982_1350516025.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 16:37:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/media/rtable/Capture1350512982_1350516025.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-17 16:37:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/preview/media/rtable/Capture1350512982_1350516025.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-17 16:46:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH/views/rtable/events/edit.php [ 45 ]
2012-10-17 16:46:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH/views/rtable/events/edit.php [ 45 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(45): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 16:46:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH/views/rtable/events/edit.php [ 45 ]
2012-10-17 16:46:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH/views/rtable/events/edit.php [ 45 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(45): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 16:46:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH/views/rtable/events/edit.php [ 45 ]
2012-10-17 16:46:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH/views/rtable/events/edit.php [ 45 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(45): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-17 17:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 17:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 17:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/create was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 17:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/create was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 17:10:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 17:10:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 17:10:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/lcreate was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-17 17:10:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/lcreate was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 17:11:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 17:11:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 17:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 17:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 17:44:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 17:44:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 18:03:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 18:03:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 18:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 18:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-17 18:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-17 18:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL video was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}