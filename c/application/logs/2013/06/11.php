<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-11 16:12:36 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
2013-06-11 16:12:36 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/patriots/home.php [ 46 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/patriots/home.php(46): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgclien/...', 46, Array)
#1 [internal function]: Controller_Patriots_Home->action_index()
#2 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Patriots_Home))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2013-06-11 16:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL patriots was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-06-11 16:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL patriots was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-06-11 16:17:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-06-11 16:17:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}