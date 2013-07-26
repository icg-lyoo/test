<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-30 12:11:20 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:11:20 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:12:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:12:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:12:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:12:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:12:33 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:12:33 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:12:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 225 ]
2013-03-30 12:12:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 225 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(225): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 225, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-30 12:12:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:12:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:23 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:13:23 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:30 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 225 ]
2013-03-30 12:13:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/reds/ajax.php [ 225 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(225): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 225, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-30 12:13:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:13:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:13:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
2013-03-30 12:13:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/stand.php [ 52 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/stand.php(52): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 52, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(250): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:14:00 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:14:00 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:14:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:14:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:14:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:14:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:14:02 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:14:02 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:14:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:14:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 12:14:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
2013-03-30 12:14:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/standdetails.php [ 13 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/standdetails.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 13, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(270): Kohana_View->__toString()
#5 [internal function]: Controller_Reds_Ajax->action_query()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 16:21:25 --- ERROR: Request_Exception [ 0 ]: Error fetching remote /c/index.php/auth/v1/user/is_admin [ status 0 ] Couldn't resolve host 'pancake.icgclients.com' ~ SYSPATH/classes/kohana/request/client/curl.php [ 100 ]
2013-03-30 16:21:25 --- STRACE: Request_Exception [ 0 ]: Error fetching remote /c/index.php/auth/v1/user/is_admin [ status 0 ] Couldn't resolve host 'pancake.icgclients.com' ~ SYSPATH/classes/kohana/request/client/curl.php [ 100 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client/external.php(137): Kohana_Request_Client_Curl->_send_message(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_External->execute_request(Object(Request))
#2 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#3 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(93): Kohana_Request->execute()
#4 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(26): Controller_ICG_v1_ICG->_pancake_call('auth', 'user', 'is_admin', Array, 1, 1)
#5 [internal function]: Controller_ICG_v1_ICG->before()
#6 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Login))
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#10 {main}
2013-03-30 17:29:45 --- ERROR: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
2013-03-30 17:29:45 --- STRACE: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/home/icgclien/...', 257, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-30 17:29:56 --- ERROR: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
2013-03-30 17:29:56 --- STRACE: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/home/icgclien/...', 257, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-30 17:30:09 --- ERROR: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
2013-03-30 17:30:09 --- STRACE: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/home/icgclien/...', 257, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-03-30 17:30:24 --- ERROR: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
2013-03-30 17:30:24 --- STRACE: ErrorException [ 8 ]: Undefined index: stand ~ APPPATH/classes/controller/reds/ajax.php [ 257 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(257): Kohana_Core::error_handler(8, 'Undefined index...', '/home/icgclien/...', 257, Array)
#1 [internal function]: Controller_Reds_Ajax->action_query()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}