<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-26 11:07:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 70 ]
2013-03-26 11:07:49 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/reds/template.php [ 70 ]
--
#0 /home/icgclien/public_html/c/application/views/reds/template.php(70): Kohana_Core::error_handler(2, 'Invalid argumen...', '/home/icgclien/...', 70, Array)
#1 /home/icgclien/public_html/c/system/classes/kohana/view.php(61): include('/home/icgclien/...')
#2 /home/icgclien/public_html/c/system/classes/kohana/view.php(343): Kohana_View::capture('/home/icgclien/...', Array)
#3 /home/icgclien/public_html/c/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/icgclien/public_html/c/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /home/icgclien/public_html/c/application/classes/controller/reds/home.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Reds_Home->action_index()
#7 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Home))
#8 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#11 {main}