<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-18 07:06:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\admin\books.php [ 36 ] in file:line
2013-11-18 07:06:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 07:07:32 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/books/v_add_books_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:07:32 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/books/v_a...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/books/v_a...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\books.php(25): Kohana_View::factory('admin/books/v_a...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Books->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:07:57 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/books/v_add_books_index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:07:57 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/books/v_a...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/books/v_a...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\books.php(25): Kohana_View::factory('admin/books/v_a...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Books->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:09:11 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/books/v_books_index.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:09:11 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/books/v_b...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/books/v_b...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\books.php(16): Kohana_View::factory('admin/books/v_b...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Books->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:09:54 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/books/v_books_index.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:09:54 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/books/v_b...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/books/v_b...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\books.php(16): Kohana_View::factory('admin/books/v_b...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Books->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:10:30 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/books/v_books_index.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:10:30 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/books/v_b...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/books/v_b...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\admin\books.php(16): Kohana_View::factory('admin/books/v_b...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Books->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-18 07:11:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: books ~ APPPATH\views\admin\books\v_books_index.php [ 4 ] in Z:\home\kohana\www\application\views\admin\books\v_books_index.php:4
2013-11-18 07:11:06 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\books\v_books_index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 4, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\admin\v_base.php(6): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\books\v_books_index.php:4
2013-11-18 07:16:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: books ~ APPPATH\views\admin\books\v_books_index.php [ 3 ] in Z:\home\kohana\www\application\views\admin\books\v_books_index.php:3
2013-11-18 07:16:30 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\books\v_books_index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\admin\v_base.php(6): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\books\v_books_index.php:3
2013-11-18 07:25:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Books::find_all() ~ APPPATH\classes\Controller\admin\books.php [ 16 ] in file:line
2013-11-18 07:25:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 07:25:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Books::find() ~ APPPATH\classes\Controller\admin\books.php [ 16 ] in file:line
2013-11-18 07:25:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 07:26:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Books::find() ~ APPPATH\classes\Controller\admin\books.php [ 16 ] in file:line
2013-11-18 07:26:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 07:27:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Books::find_all() ~ APPPATH\classes\Controller\admin\books.php [ 16 ] in file:line
2013-11-18 07:27:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-18 07:29:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\views\admin\books\v_books_index.php [ 4 ] in file:line
2013-11-18 07:29:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line