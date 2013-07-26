<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-22 08:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-22 08:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-02-22 08:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-22 08:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-02-22 08:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-22 08:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-02-22 08:56:41 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH/classes/controller/patriots/home.php [ 60 ]
2013-02-22 08:56:41 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH/classes/controller/patriots/home.php [ 60 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Patriots_Home->action_events(Object(Controller_Patriots_Home))
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-02-22 08:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-22 08:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-02-22 09:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-22 09:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-02-22 09:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/rtable/waffle/ajax/push ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-22 09:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/rtable/waffle/ajax/push ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/rtable/ajax/media.php(76): Kohana_Request->execute()
#1 [internal function]: Controller_Rtable_Ajax_Media->action_approve()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Ajax_Media))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-02-22 09:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/rtable/waffle/ajax/push ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-02-22 09:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: c/rtable/waffle/ajax/push ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/rtable/ajax/media.php(76): Kohana_Request->execute()
#1 [internal function]: Controller_Rtable_Ajax_Media->action_approve()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Ajax_Media))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-02-22 09:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-22 09:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-02-22 09:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-22 09:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-02-22 09:54:40 --- ERROR: ErrorException [ 2 ]: file_put_contents(/c/rtable/roundtable_push.txt) [function.file-put-contents]: failed to open stream: No such file or directory ~ APPPATH/classes/controller/rtable/ajax/media.php [ 77 ]
2013-02-22 09:54:40 --- STRACE: ErrorException [ 2 ]: file_put_contents(/c/rtable/roundtable_push.txt) [function.file-put-contents]: failed to open stream: No such file or directory ~ APPPATH/classes/controller/rtable/ajax/media.php [ 77 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/rtable/ajax/media.php(77): Kohana_Core::error_handler('/c/rtable/round...', '<style type="te...')
#1 [internal function]: Controller_Rtable_Ajax_Media->action_approve()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Ajax_Media))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-02-22 09:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-22 09:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-02-22 09:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-22 09:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL rtable/waffle/ajax/push was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}