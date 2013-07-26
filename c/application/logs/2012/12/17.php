<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-17 09:14:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-17 09:14:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reds was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2012-12-17 09:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/css/stylesUDF.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:22:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Greyhound_Page::$auto_render ~ APPPATH/classes/controller/greyhound/admin.php [ 14 ]
2012-12-17 09:22:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Greyhound_Page::$auto_render ~ APPPATH/classes/controller/greyhound/admin.php [ 14 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/greyhound/admin.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/icgtest/p...', 14, Array)
#1 [internal function]: Controller_Greyhound_Admin->before()
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#6 {main}
2012-12-17 09:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/home/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/api/get_subtheme_content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-12-17 09:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/api/get_subtheme_content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2012-12-17 09:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/api/get_subtheme_content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-12-17 09:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/api/get_subtheme_content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2012-12-17 09:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}
2012-12-17 09:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/ajax/generatePromo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-12-17 09:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/ajax/generatePromo was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2012-12-17 09:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/api/get_subtheme_content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-12-17 09:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL patriots/home/api/get_subtheme_content was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2012-12-17 09:53:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-17 09:53:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: patriots/home/ajax/event/get_active ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}