<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-11 09:15:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Patriots_Home::_auth_call() ~ APPPATH\classes\controller\patriots\home.php [ 40 ]
2012-12-11 09:15:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Patriots_Home::_auth_call() ~ APPPATH\classes\controller\patriots\home.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:26:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Patriots_Home::_auth_call() ~ APPPATH\classes\controller\patriots\home.php [ 40 ]
2012-12-11 09:26:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Patriots_Home::_auth_call() ~ APPPATH\classes\controller\patriots\home.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:26:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Patriots_Home::_auth_call() ~ APPPATH\classes\controller\patriots\home.php [ 40 ]
2012-12-11 09:26:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Patriots_Home::_auth_call() ~ APPPATH\classes\controller\patriots\home.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 12:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asd/dasda/a was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-11 12:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asd/dasda/a was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Ampps\www\c\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Ampps\www\c\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Ampps\www\c\index.php(109): Kohana_Request->execute()
#3 {main}