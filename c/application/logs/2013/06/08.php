<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-08 09:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-08 09:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-06-08 09:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-08 09:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-06-08 09:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-08 09:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-06-08 09:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-08 09:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2013-06-08 09:53:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-08 09:53:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-08 09:53:16 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-08 09:53:16 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-08 09:54:17 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
2013-06-08 09:54:17 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 81 ]
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
2013-06-08 09:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-08 09:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/reds/videos/CommCups_2013 V2.f4v ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}