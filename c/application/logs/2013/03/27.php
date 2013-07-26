<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-27 07:30:30 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH/classes/controller/patriots/home.php [ 60 ]
2013-03-27 07:30:30 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$name ~ APPPATH/classes/controller/patriots/home.php [ 60 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 60, Array)
#1 [internal function]: Controller_Patriots_Home->action_events()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-27 09:34:27 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-03-27 09:34:27 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-27 09:52:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/icg/controlPanel.php [ 26 ]
2013-03-27 09:52:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/icg/controlPanel.php [ 26 ]
--
#0 /home/icgclien/public_html/c/application/views/icg/controlPanel.php(26): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 26, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/icg/home.php(24): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Icg_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Icg_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}