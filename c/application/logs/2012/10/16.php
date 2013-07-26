<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-16 10:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-16 10:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-16 11:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-16 11:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/list was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-16 11:02:59 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-16 11:02:59 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(102): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-16 11:03:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-16 11:03:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(102): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-16 11:03:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-16 11:03:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(102): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-16 11:03:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/preivew/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-16 11:03:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/preivew/11 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-16 11:03:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-16 11:03:38 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(102): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-16 11:13:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 24 ]
2012-10-16 11:13:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 24 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(24): Kohana_Core::error_handler('/home/icgtest/p...', Array)
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
2012-10-16 11:16:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 24 ]
2012-10-16 11:16:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 24 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(24): Kohana_Core::error_handler('/home/icgtest/p...', Array)
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
2012-10-16 11:16:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 24 ]
2012-10-16 11:16:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/list.php [ 24 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(24): Kohana_Core::error_handler('/home/icgtest/p...', Array)
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
2012-10-16 11:16:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: event_id ~ APPPATH/views/rtable/events/list.php [ 24 ]
2012-10-16 11:16:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: event_id ~ APPPATH/views/rtable/events/list.php [ 24 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(24): Kohana_Core::error_handler('/home/icgtest/p...', Array)
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
2012-10-16 11:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-16 11:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-16 12:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/disclaimer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-16 12:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/disclaimer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-16 12:09:03 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:09:03 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:10:02 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:10:02 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:10:55 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:10:55 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:11:45 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:11:45 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:11:58 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:11:58 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:13:49 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:13:49 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:13:52 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:13:52 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:16:16 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:16:16 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:16:26 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:16:26 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:16:50 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:16:50 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:17:02 --- ERROR: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-10-16 12:17:02 --- STRACE: View_Exception [ 0 ]: The requested view rtabe/events/disclaimer could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/view.php(137): Kohana_View->set_filename('rtabe/events/di...')
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(30): Kohana_View->__construct('rtabe/events/di...', NULL)
#2 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(134): Kohana_View::factory('rtabe/events/di...')
#3 [internal function]: Controller_Rtable_Events->action_disclaimer()
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#5 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-16 12:19:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-16 12:19:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(102): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-16 12:23:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-16 12:23:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(102): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-16 12:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-16 12:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/logout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-16 14:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:44:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:44:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:45:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:45:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:48:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:48:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/roundtable/loader.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-16 14:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/12/12 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-16 14:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: rtable/events/edit/12/12 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}