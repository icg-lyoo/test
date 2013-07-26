<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-10 10:01:15 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 53 ]
2013-04-10 10:01:15 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'meta' ~ APPPATH/classes/controller/icg/v1/icg.php [ 53 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/icg/v1/icg.php(53): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/icgclien/...', 53, Array)
#1 [internal function]: Controller_ICG_v1_ICG->before()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Icg_Login))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}