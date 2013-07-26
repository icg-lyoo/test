<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-12 11:50:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 11:50:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 12:00:03 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 15 ]
2012-09-12 12:00:03 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 15 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Greyhound_Admin->before()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 12:02:15 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 18 ]
2012-09-12 12:02:15 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 18 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\Program File...', 18, Array)
#1 [internal function]: Controller_Greyhound_Admin->before()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 12:58:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 17 ]
2012-09-12 12:58:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 17 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\Program File...', 17, Array)
#1 [internal function]: Controller_Greyhound_Admin->before()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 12:58:44 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 17 ]
2012-09-12 12:58:44 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\greyhound\admin.php [ 17 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\Program File...', 17, Array)
#1 [internal function]: Controller_Greyhound_Admin->before()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 12:59:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\controller\greyhound\admin.php [ 8 ]
2012-09-12 12:59:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\controller\greyhound\admin.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-12 13:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:01:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:01:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:01:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\greyhound\ajax.php [ 166 ]
2012-09-12 13:01:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\greyhound\ajax.php [ 166 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(166): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 166, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(19): Controller_Greyhound_AJAX->format_json_timestamp_freq(NULL)
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:02:00 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\greyhound\ajax.php [ 166 ]
2012-09-12 13:02:00 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\greyhound\ajax.php [ 166 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(166): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Program File...', 166, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(19): Controller_Greyhound_AJAX->format_json_timestamp_freq(NULL)
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:11:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Greyhound_AJAX::_pancake_call() ~ APPPATH\classes\controller\greyhound\ajax.php [ 15 ]
2012-09-12 13:11:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Greyhound_AJAX::_pancake_call() ~ APPPATH\classes\controller\greyhound\ajax.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-12 13:11:36 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Icg_Pancakecontroller::_pancake_call(), called in C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php on line 15 and defined ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 21 ]
2012-09-12 13:11:36 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Icg_Pancakecontroller::_pancake_call(), called in C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php on line 15 and defined ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 21 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\icg\pancakecontroller.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Program File...', 21, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(15): Controller_Icg_Pancakecontroller->_pancake_call('schedule/feed')
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:12:22 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Icg_Pancakecontroller::_pancake_call(), called in C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php on line 15 and defined ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 21 ]
2012-09-12 13:12:22 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Icg_Pancakecontroller::_pancake_call(), called in C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php on line 15 and defined ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 21 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\icg\pancakecontroller.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Program File...', 21, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(15): Controller_Icg_Pancakecontroller->_pancake_call('schedule/feed')
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:12:46 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Icg_Pancakecontroller::_pancake_call(), called in C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php on line 15 and defined ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 21 ]
2012-09-12 13:12:46 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Icg_Pancakecontroller::_pancake_call(), called in C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php on line 15 and defined ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 21 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\icg\pancakecontroller.php(21): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Program File...', 21, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(15): Controller_Icg_Pancakecontroller->_pancake_call('schedule/feed')
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:23:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 26 ]
2012-09-12 13:23:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-12 13:24:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Greyhound_AJAX::$client ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 24 ]
2012-09-12 13:24:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Greyhound_AJAX::$client ~ APPPATH\classes\controller\icg\pancakecontroller.php [ 24 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\icg\pancakecontroller.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Program File...', 24, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(15): Controller_Icg_Pancakecontroller->_pancake_call('schedule/feed')
#2 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:26:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Greyhound_AJAX::$client ~ APPPATH\classes\controller\greyhound\ajax.php [ 15 ]
2012-09-12 13:26:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Greyhound_AJAX::$client ~ APPPATH\classes\controller\greyhound\ajax.php [ 15 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Program File...', 15, Array)
#1 [internal function]: Controller_Greyhound_AJAX->action_get_schedule()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 13:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:28:01 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
2012-09-12 13:28:01 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\kohana\controller\template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-12 13:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:31:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 13:31:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 13:38:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\views\greyhound\page\upload.php [ 52 ]
2012-09-12 13:38:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\views\greyhound\page\upload.php [ 52 ]
--
#0 C:\Program Files\Ampps\www\application\views\greyhound\page\upload.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 52, Array)
#1 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Ampps\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files\Ampps\www\application\views\greyhound\admin\template.php(282): Kohana_View->__toString()
#5 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files\Ampps\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(49): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Greyhound_Admin->after()
#10 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#11 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-12 13:40:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\classes\controller\greyhound\page.php [ 18 ]
2012-09-12 13:40:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\classes\controller\greyhound\page.php [ 18 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\page.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 18, Array)
#1 [internal function]: Controller_Greyhound_Page->action_upload()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 13:40:55 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\greyhound\page\upload.php [ 51 ]
2012-09-12 13:40:55 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\greyhound\page\upload.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-12 13:41:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\views\greyhound\page\upload.php [ 52 ]
2012-09-12 13:41:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\views\greyhound\page\upload.php [ 52 ]
--
#0 C:\Program Files\Ampps\www\application\views\greyhound\page\upload.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 52, Array)
#1 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Ampps\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files\Ampps\www\application\views\greyhound\admin\template.php(282): Kohana_View->__toString()
#5 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files\Ampps\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(49): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Greyhound_Admin->after()
#10 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#11 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-12 13:42:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\views\greyhound\page\upload.php [ 52 ]
2012-09-12 13:42:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: backup_schedules ~ APPPATH\views\greyhound\page\upload.php [ 52 ]
--
#0 C:\Program Files\Ampps\www\application\views\greyhound\page\upload.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 52, Array)
#1 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Ampps\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files\Ampps\www\application\views\greyhound\admin\template.php(282): Kohana_View->__toString()
#5 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files\Ampps\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(49): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Greyhound_Admin->after()
#10 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#11 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-12 13:47:50 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347475670greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\page.php [ 36 ]
2012-09-12 13:47:50 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347475670greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\page.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 36, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\page.php(36): move_uploaded_file('C:\Program File...', '/archive/greyho...')
#2 [internal function]: Controller_Greyhound_Page->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 13:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL greyhound/page/ajax/upload_file was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-12 13:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL greyhound/page/ajax/upload_file was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-12 13:55:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_X_REQUESTED_WITH ~ APPPATH\views\greyhound\page\upload.php [ 25 ]
2012-09-12 13:55:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_X_REQUESTED_WITH ~ APPPATH\views\greyhound\page\upload.php [ 25 ]
--
#0 C:\Program Files\Ampps\www\application\views\greyhound\page\upload.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 25, Array)
#1 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Ampps\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files\Ampps\www\application\views\greyhound\admin\template.php(282): Kohana_View->__toString()
#5 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files\Ampps\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(49): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Greyhound_Admin->after()
#10 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#11 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-12 13:56:40 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_X_REQUESTED_WITH ~ APPPATH\views\greyhound\page\upload.php [ 41 ]
2012-09-12 13:56:40 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_X_REQUESTED_WITH ~ APPPATH\views\greyhound\page\upload.php [ 41 ]
--
#0 C:\Program Files\Ampps\www\application\views\greyhound\page\upload.php(41): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 41, Array)
#1 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files\Ampps\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files\Ampps\www\application\views\greyhound\admin\template.php(282): Kohana_View->__toString()
#5 C:\Program Files\Ampps\www\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files\Ampps\www\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files\Ampps\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files\Ampps\www\application\classes\controller\greyhound\admin.php(49): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Greyhound_Admin->after()
#10 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Greyhound_Page))
#11 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-12 14:24:10 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347477850greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
2012-09-12 14:24:10 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347477850greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 218, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(218): move_uploaded_file('C:\Program File...', '/archive/greyho...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 14:25:26 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(localhost/archive/greyhound/schedule/1347477926greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
2012-09-12 14:25:26 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(localhost/archive/greyhound/schedule/1347477926greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 218, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(218): move_uploaded_file('C:\Program File...', 'localhost/archi...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 14:26:00 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(http://localhost/archive/greyhound/schedule/1347477960greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
2012-09-12 14:26:00 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(http://localhost/archive/greyhound/schedule/1347477960greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 218, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(218): move_uploaded_file('C:\Program File...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 14:28:41 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347478121greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
2012-09-12 14:28:41 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347478121greyhound_schedule.xls) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 218 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 218, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(218): move_uploaded_file('C:\Program File...', '/archive/greyho...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 14:34:42 --- ERROR: ErrorException [ 8 ]: Undefined index: schedule_xlsx ~ APPPATH\classes\controller\greyhound\ajax.php [ 212 ]
2012-09-12 14:34:42 --- STRACE: ErrorException [ 8 ]: Undefined index: schedule_xlsx ~ APPPATH\classes\controller\greyhound\ajax.php [ 212 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(212): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 212, Array)
#1 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 14:35:15 --- ERROR: ErrorException [ 8 ]: Undefined index: schedule_xlsx ~ APPPATH\classes\controller\greyhound\ajax.php [ 212 ]
2012-09-12 14:35:15 --- STRACE: ErrorException [ 8 ]: Undefined index: schedule_xlsx ~ APPPATH\classes\controller\greyhound\ajax.php [ 212 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(212): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 212, Array)
#1 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 14:35:44 --- ERROR: ErrorException [ 2 ]: file_put_contents(http://localhost/archive/greyhound/schedule/1347478544greyhound_schedule.xlsx) [function.file-put-contents]: failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
2012-09-12 14:35:44 --- STRACE: ErrorException [ 2 ]: file_put_contents(http://localhost/archive/greyhound/schedule/1347478544greyhound_schedule.xlsx) [function.file-put-contents]: failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'C:\Program File...', 219, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(219): file_put_contents('http://localhos...', 'PK??????????!?!...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 14:36:53 --- ERROR: ErrorException [ 2 ]: file_put_contents() [function.file-put-contents]: connect() failed: No connection could be made because the target machine actively refused it.
 ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
2012-09-12 14:36:53 --- STRACE: ErrorException [ 2 ]: file_put_contents() [function.file-put-contents]: connect() failed: No connection could be made because the target machine actively refused it.
 ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'C:\Program File...', 219, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(219): file_put_contents('ftp://localhost...', 'PK??????????!?!...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 14:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 14:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 14:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 14:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 14:39:31 --- ERROR: ErrorException [ 2 ]: file_put_contents(file://localhost/archive/greyhound/schedule/1347478771greyhound_schedule.xlsx) [function.file-put-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
2012-09-12 14:39:31 --- STRACE: ErrorException [ 2 ]: file_put_contents(file://localhost/archive/greyhound/schedule/1347478771greyhound_schedule.xlsx) [function.file-put-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'C:\Program File...', 219, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(219): file_put_contents('file://localhos...', 'PK??????????!?!...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 15:54:26 --- ERROR: ErrorException [ 2 ]: move_uploaded_file() expects exactly 2 parameters, 3 given ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
2012-09-12 15:54:26 --- STRACE: ErrorException [ 2 ]: move_uploaded_file() expects exactly 2 parameters, 3 given ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 219, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(219): move_uploaded_file('C:\Program File...', '/archive/greyho...', 'PK??????????!?!...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 15:54:39 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347483279greyhound_schedule.xlsx) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
2012-09-12 15:54:39 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347483279greyhound_schedule.xlsx) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 219, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(219): move_uploaded_file('C:\Program File...', '/archive/greyho...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 15:58:10 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347483490greyhound_schedule.xlsx) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 221 ]
2012-09-12 15:58:10 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347483490greyhound_schedule.xlsx) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 221 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 221, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(221): move_uploaded_file('C:\Program File...', '/archive/greyho...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:04:20 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347483860greyhound_schedule.xlsx) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
2012-09-12 16:04:20 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/archive/greyhound/schedule/1347483860greyhound_schedule.xlsx) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 219 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\Program File...', 219, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(219): move_uploaded_file('C:\Program File...', '/archive/greyho...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:11:44 --- ERROR: ErrorException [ 2 ]: copy(localhost./archive/greyhound/schedule/1347484304greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
2012-09-12 16:11:44 --- STRACE: ErrorException [ 2 ]: copy(localhost./archive/greyhound/schedule/1347484304greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(localhost....', 'C:\Program File...', 225, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(225): copy('localhost./arch...', './archive/greyh...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:12:15 --- ERROR: ErrorException [ 2 ]: copy(localhost./archive/greyhound/schedule/1347484335greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
2012-09-12 16:12:15 --- STRACE: ErrorException [ 2 ]: copy(localhost./archive/greyhound/schedule/1347484335greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(localhost....', 'C:\Program File...', 225, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(225): copy('localhost./arch...', './archive/greyh...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:12:36 --- ERROR: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
2012-09-12 16:12:36 --- STRACE: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(./archive/...', 'C:\Program File...', 227, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(227): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:13:01 --- ERROR: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
2012-09-12 16:13:01 --- STRACE: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(./archive/...', 'C:\Program File...', 227, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(227): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:13:14 --- ERROR: ErrorException [ 2 ]: copy(/archive/greyhound/schedule/1347484394greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
2012-09-12 16:13:14 --- STRACE: ErrorException [ 2 ]: copy(/archive/greyhound/schedule/1347484394greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(/archive/g...', 'C:\Program File...', 225, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(225): copy('/archive/greyho...', './archive/greyh...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:18:29 --- ERROR: ErrorException [ 2 ]: copy(/archive/greyhound/schedule/1347484709greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
2012-09-12 16:18:29 --- STRACE: ErrorException [ 2 ]: copy(/archive/greyhound/schedule/1347484709greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 225 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(/archive/g...', 'C:\Program File...', 225, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(225): copy('/archive/greyho...', './archive/greyh...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:19:06 --- ERROR: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
2012-09-12 16:19:06 --- STRACE: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(./archive/...', 'C:\Program File...', 227, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(227): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:22:18 --- ERROR: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
2012-09-12 16:22:18 --- STRACE: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(./archive/...', 'C:\Program File...', 227, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(227): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:23:41 --- ERROR: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 229 ]
2012-09-12 16:23:41 --- STRACE: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 229 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(./archive/...', 'C:\Program File...', 229, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(229): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:24:25 --- ERROR: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 231 ]
2012-09-12 16:24:25 --- STRACE: ErrorException [ 2 ]: copy(./archive/greyhound/schedule/greyhound_schedule.xlsx) [function.copy]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\greyhound\ajax.php [ 231 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(./archive/...', 'C:\Program File...', 231, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(231): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:25:31 --- ERROR: ErrorException [ 2 ]: copy(http://localhost/pancake) [function.copy]: failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\controller\greyhound\ajax.php [ 229 ]
2012-09-12 16:25:31 --- STRACE: ErrorException [ 2 ]: copy(http://localhost/pancake) [function.copy]: failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\classes\controller\greyhound\ajax.php [ 229 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'copy(http://loc...', 'C:\Program File...', 229, Array)
#1 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(229): copy('./archive/greyh...', 'http://localhos...')
#2 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 16:32:20 --- ERROR: ErrorException [ 8 ]: Undefined index: schedule_xslx ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
2012-09-12 16:32:20 --- STRACE: ErrorException [ 8 ]: Undefined index: schedule_xslx ~ APPPATH\classes\controller\greyhound\ajax.php [ 227 ]
--
#0 C:\Program Files\Ampps\www\application\classes\controller\greyhound\ajax.php(227): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 227, Array)
#1 [internal function]: Controller_Greyhound_AJAX->action_upload_file()
#2 C:\Program Files\Ampps\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Greyhound_AJAX))
#3 C:\Program Files\Ampps\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files\Ampps\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-12 18:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:20:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:20:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:31:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:31:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:34:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:34:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:46:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:46:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:47:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:47:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 18:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 18:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:17:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:17:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:19:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:19:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:20:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:20:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 19:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 19:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:08:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:08:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery-1.7.2.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_both.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/sort_asc.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-12 20:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-12 20:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: greyhound/media/images/bullet_edit.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files\Ampps\www\index.php(109): Kohana_Request->execute()
#1 {main}