<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-17 12:51:20 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-17 12:51:20 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\kohana\www\application\classes\Controller\base.php(12): Kohana_Controller_Template->before()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-17 13:40:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Controller\index\books.php [ 36 ] in file:line
2013-11-17 13:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 13:43:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\index\books.php [ 23 ] in file:line
2013-11-17 13:43:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 13:44:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH\classes\Controller\index\books.php [ 32 ] in file:line
2013-11-17 13:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 13:44:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\index\books.php [ 38 ] in file:line
2013-11-17 13:44:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 13:50:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\index\books.php [ 12 ] in file:line
2013-11-17 13:50:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-17 13:51:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\v_base.php [ 8 ] in Z:\home\kohana\www\application\views\index\v_base.php:8
2013-11-17 13:51:06 --- DEBUG: #0 Z:\home\kohana\www\application\views\index\v_base.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 8, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Books))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\index\v_base.php:8