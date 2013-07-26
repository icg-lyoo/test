<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-12 11:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL waffle/v2/hardware/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-12 11:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL waffle/v2/hardware/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}
2013-02-12 11:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL waffle/v2/hardware/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-02-12 11:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL waffle/v2/hardware/authorize was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/icgclien/public_html/c/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/icgclien/public_html/c/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#3 {main}