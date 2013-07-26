<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-23 13:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-04-23 13:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-04-23 13:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-04-23 13:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}