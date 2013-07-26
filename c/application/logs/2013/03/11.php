<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-11 16:56:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Toaster::sayHello() ~ APPPATH/bootstrap.php [ 223 ]
2013-03-11 16:56:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Toaster::sayHello() ~ APPPATH/bootstrap.php [ 223 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-11 17:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-03-11 17:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: reds/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/icgclien/public_html/c/index.php(108): Kohana_Request->execute()
#1 {main}