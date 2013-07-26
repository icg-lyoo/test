<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-26 16:19:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/patriots/home.php [ 45 ]
2012-09-26 16:19:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/patriots/home.php [ 45 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/patriots/home.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Patriots_Home->action_index(Object(Controller_Patriots_Home))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-26 16:21:42 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/patriots/home.php [ 45 ]
2012-09-26 16:21:42 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/controller/patriots/home.php [ 45 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/patriots/home.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Patriots_Home->action_index(Object(Controller_Patriots_Home))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-26 16:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:37:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:37:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/ui-menu-header.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/ui-menu-header.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:49:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:49:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-26 16:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-26 16:49:05 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 136 ]
2012-09-26 16:49:05 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 136 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/greyhound/ajax.php(136): Kohana_Core::error_handler(Object(stdClass))
#1 /home/icgtest/public_html/c/application/classes/controller/greyhound/ajax.php(15): Controller_Greyhound_AJAX->format_json_timestamp_freq()
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule(Object(Controller_Greyhound_AJAX))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}