<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-18 12:52:26 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-06-18 12:52:26 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-18 13:51:13 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-18 13:51:13 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Patriots_Ajax_Event))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-18 13:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/assets/patriots/granite/menu-bg2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-18 13:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/assets/patriots/granite/menu-bg2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-06-18 14:01:45 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
2013-06-18 14:01:45 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 28 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(28): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 28, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Patriots_Ajax_MenuItems))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-18 15:42:07 --- ERROR: ErrorException [ 8 ]: Undefined index: stand_name ~ APPPATH/views/patriots/stands_power.php [ 22 ]
2013-06-18 15:42:07 --- STRACE: ErrorException [ 8 ]: Undefined index: stand_name ~ APPPATH/views/patriots/stands_power.php [ 22 ]
--
#0 /home/icgclien/public_html/c/application/views/patriots/stands_power.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/home/icgclien/...', 22, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(131): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Patriots_Home->action_stands_control()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}