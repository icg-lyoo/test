<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-25 09:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:11:29 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 136 ]
2012-09-25 09:11:29 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 136 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/greyhound/ajax.php(136): Kohana_Core::error_handler(Object(stdClass))
#1 /home/icgclien/public_html/c/application/classes/controller/greyhound/ajax.php(15): Controller_Greyhound_AJAX->format_json_timestamp_freq()
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule(Object(Controller_Greyhound_AJAX))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-25 09:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/img/glyphicons-halflings.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 09:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 09:14:07 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 136 ]
2012-09-25 09:14:07 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$num ~ APPPATH/classes/controller/greyhound/ajax.php [ 136 ]
--
#0 /home/icgclien/public_html/c/application/classes/controller/greyhound/ajax.php(136): Kohana_Core::error_handler(Object(stdClass))
#1 /home/icgclien/public_html/c/application/classes/controller/greyhound/ajax.php(15): Controller_Greyhound_AJAX->format_json_timestamp_freq()
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule(Object(Controller_Greyhound_AJAX))
#3 /home/icgclien/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-25 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 11:47:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 11:47:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/promodata.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-25 13:37:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-25 13:37:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}