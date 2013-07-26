<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-07-01 05:38:47 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH/classes/kohana/request/client/curl.php [ 85 ]
2013-07-01 05:38:47 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH/classes/kohana/request/client/curl.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-01 06:29:07 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH/classes/kohana/request/client/curl.php [ 85 ]
2013-07-01 06:29:07 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH/classes/kohana/request/client/curl.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-07-01 08:35:42 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/reds/ajax.php [ 322 ]
2013-07-01 08:35:42 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/reds/ajax.php [ 322 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/reds/ajax.php(322): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 322, Array)
#1 [internal function]: Controller_Reds_Ajax->action_runRS232Command()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Reds_Ajax))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}