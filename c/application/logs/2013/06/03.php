<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-03 10:41:10 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-06-03 10:41:10 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-03 12:44:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-03 12:44:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-06-03 12:46:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-03 12:46:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-06-03 12:47:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-03 12:47:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-06-03 12:47:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-06-03 12:47:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-03 12:47:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-06-03 12:47:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
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
2013-06-03 12:48:15 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-06-03 12:48:15 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-03 14:40:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
2013-06-03 14:40:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 71 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(71): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 71, Array)
#1 [internal function]: Controller_Reds_Ajax->action_add()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}