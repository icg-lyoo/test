<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-05-23 07:28:55 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-05-23 07:28:55 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-05-23 07:29:12 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 107 ]
2013-05-23 07:29:12 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 107 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/greyhound/ajax.php(107): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 107, Array)
#1 /home/icgclien/public_html/c/application/classes/controller/greyhound/ajax.php(16): Controller_Greyhound_AJAX->format_json_timestamp_freq(Object(stdClass))
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#7 {main}
2013-05-23 07:29:46 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-05-23 07:29:46 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-05-23 07:29:50 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-05-23 07:29:50 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-05-23 07:29:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-05-23 07:29:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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