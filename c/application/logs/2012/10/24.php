<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-24 12:04:46 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/rtable/events.php [ 178 ]
2012-10-24 12:04:46 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/rtable/events.php [ 178 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/events.php(178): Kohana_Core::error_handler('Array')
#1 [internal function]: Controller_Rtable_Events->action_edit()
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Rtable_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-24 14:43:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Frodo_Baggins_by_PamelaKaye_1351114938.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-24 14:43:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/Frodo_Baggins_by_PamelaKaye_1351114938.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 14:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/hoff_1351115730.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-24 14:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/hoff_1351115730.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 14:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/hoff_1351115730.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-24 14:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/hoff_1351115730.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 14:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/hoff_1351115730.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-10-24 14:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/rtable/hoff_1351115730.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 14:57:50 --- ERROR: ErrorException [ 2 ]: Missing argument 4 for Controller_Rtable_Ajax_Events::_image_resize(), called in /home/icgtest/public_html/c/application/classes/controller/rtable/ajax/events.php on line 108 and defined ~ APPPATH/classes/controller/rtable/ajax/events.php [ 293 ]
2012-10-24 14:57:50 --- STRACE: ErrorException [ 2 ]: Missing argument 4 for Controller_Rtable_Ajax_Events::_image_resize(), called in /home/icgtest/public_html/c/application/classes/controller/rtable/ajax/events.php on line 108 and defined ~ APPPATH/classes/controller/rtable/ajax/events.php [ 293 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/ajax/events.php(293): Kohana_Core::error_handler('media/rtable/ho...', 1280, 720)
#1 /home/icgtest/public_html/c/application/classes/controller/rtable/ajax/events.php(108): Controller_Rtable_Ajax_Events->_image_resize()
#2 [internal function]: Controller_Rtable_Ajax_Events->action_upload(Object(Controller_Rtable_Ajax_Events))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#6 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-24 17:12:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/ajax/media.php [ 91 ]
2012-10-24 17:12:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  media ~ APPPATH/classes/controller/rtable/ajax/media.php [ 91 ]
--
#0 /home/icgtest/public_html/c/application/classes/controller/rtable/ajax/media.php(91): Kohana_Core::error_handler()
#1 [internal function]: Controller_Rtable_Ajax_Media->action_recieve(Object(Controller_Rtable_Ajax_Media))
#2 /home/icgtest/public_html/c/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /home/icgtest/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /home/icgtest/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /home/icgtest/public_html/c/index.php(109): Kohana_Request->execute()
#6 {main}