<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-15 09:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/rtable/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 09:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/rtable/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 09:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/rtable/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 09:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/rtable/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 13:42:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/rtable/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 13:42:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/rtable/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 14:40:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/rtable/events/list.php [ 1 ]
2012-10-15 14:40:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/rtable/events/list.php [ 1 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(1): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(84): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 14:50:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/rtable/events.php [ 66 ]
2012-10-15 14:50:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/rtable/events.php [ 66 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(66): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 14:54:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/rtable/events/list.php [ 1 ]
2012-10-15 14:54:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/rtable/events/list.php [ 1 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(1): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(83): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 14:54:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: allow_changes ~ APPPATH/views/rtable/events/list.php [ 26 ]
2012-10-15 14:54:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: allow_changes ~ APPPATH/views/rtable/events/list.php [ 26 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/list.php(26): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(83): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 15:02:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: paginate_data ~ APPPATH/classes/controller/rtable/events.php [ 59 ]
2012-10-15 15:02:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: paginate_data ~ APPPATH/classes/controller/rtable/events.php [ 59 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(59): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_list(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 15:07:57 --- ERROR: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
2012-10-15 15:07:57 --- STRACE: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(144): Kohana_Core::error_handler()
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(12): Controller_Rtable_Events->action_login()
#2 [internal function]: Controller_Rtable_Events->before(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 15:16:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
2012-10-15 15:16:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(144): Kohana_Core::error_handler()
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(12): Controller_Rtable_Events->action_login()
#2 [internal function]: Controller_Rtable_Events->before(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 15:16:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
2012-10-15 15:16:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(144): Kohana_Core::error_handler()
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(12): Controller_Rtable_Events->action_login()
#2 [internal function]: Controller_Rtable_Events->before(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 15:17:12 --- ERROR: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
2012-10-15 15:17:12 --- STRACE: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 144 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(144): Kohana_Core::error_handler()
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(12): Controller_Rtable_Events->action_login()
#2 [internal function]: Controller_Rtable_Events->before(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 15:17:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 141 ]
2012-10-15 15:17:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  email ~ APPPATH/classes/controller/rtable/events.php [ 141 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(141): Kohana_Core::error_handler()
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(12): Controller_Rtable_Events->action_login()
#2 [internal function]: Controller_Rtable_Events->before(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-15 15:29:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/creaet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-10-15 15:29:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/events/creaet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 15:30:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/views/rtable/events/edit.php [ 118 ]
2012-10-15 15:30:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  path ~ APPPATH/views/rtable/events/edit.php [ 118 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/edit.php(118): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(133): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_edit(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 15:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/themes/base/jquery-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-1.8.2.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/roundTable/default.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/jquery-ui-1.8.2/ui/jquery-ui.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 15:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-15 15:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/roundTable/default.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-15 17:00:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/preview.php [ 23 ]
2012-10-15 17:00:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH/views/rtable/events/preview.php [ 23 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(23): Kohana_Core::error_handler('/home/icgtest/p...', Array)
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
2012-10-15 17:04:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  media_title ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:04:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  media_title ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(103): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 17:05:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  media_title ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:05:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  media_title ~ APPPATH/views/rtable/events/preview.php [ 52 ]
--
#0 /home/icgtest/public_html/c/application/views/rtable/events/preview.php(52): Kohana_Core::error_handler('/home/icgtest/p...', Array)
#1 /home/icgtest/public_html/c/system/classes/kohana/view.php(61): include('/home/icgtest/p...')
#2 /home/icgtest/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /home/icgtest/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgtest/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString(Object(View))
#5 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(103): Kohana_Response->body()
#6 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#7 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-15 17:22:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:22:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
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
2012-10-15 17:23:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 99 ]
2012-10-15 17:23:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 99 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(99): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 17:24:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 98 ]
2012-10-15 17:24:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/events.php [ 98 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(98): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Events->action_preview(Object(Controller_Rtable_Events))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-15 17:25:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: media_data ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:25:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: media_data ~ APPPATH/views/rtable/events/preview.php [ 52 ]
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
2012-10-15 17:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/media/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-15 17:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/media/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 17:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/media/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-15 17:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/ajax/media/delete was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-15 17:56:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:56:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
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
2012-10-15 17:56:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:56:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
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
2012-10-15 17:57:50 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:57:50 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
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
2012-10-15 17:59:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
2012-10-15 17:59:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/views/rtable/events/preview.php [ 52 ]
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
2012-10-15 18:08:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/create was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-15 18:08:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/create was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#3 {main}