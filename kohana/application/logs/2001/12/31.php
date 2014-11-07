<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2001-12-31 20:46:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.categories' doesn't exist [ SHOW FULL COLUMNS FROM `categories` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2001-12-31 20:46:08 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('categories')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\Index.php(21): Kohana_ORM::factory('Category')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2001-12-31 21:10:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '!', expecting '(' ~ APPPATH\classes\Controller\index.php [ 52 ] in file:line
2001-12-31 21:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 21:21:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: books ~ APPPATH\views\v_base.php [ 3 ] in Z:\home\kohana\www\application\views\v_base.php:3
2001-12-31 21:21:40 --- DEBUG: #0 Z:\home\kohana\www\application\views\v_base.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\v_base.php:3
2001-12-31 21:22:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: books ~ APPPATH\views\v_base.php [ 3 ] in Z:\home\kohana\www\application\views\v_base.php:3
2001-12-31 21:22:44 --- DEBUG: #0 Z:\home\kohana\www\application\views\v_base.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 3, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\v_base.php:3
2001-12-31 22:08:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\avatar.php [ 73 ] in file:line
2001-12-31 22:08:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 22:09:32 --- CRITICAL: View_Exception [ 0 ]: The requested view avatar/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2001-12-31 22:09:32 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('avatar/index')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('avatar/index', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\avatar.php(8): Kohana_View::factory('avatar/index')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2001-12-31 22:25:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\avatar.php [ 11 ] in file:line
2001-12-31 22:25:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 19:43:17 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 19:43:17 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\kohana\www\application\classes\Controller\admin\books.php(45): Kohana_ORM->__get('request')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Books->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Books))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:15:17 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:15:17 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(45): Kohana_ORM->__get('request')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:21:10 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Редактировать - assumed 'Редактировать' ~ APPPATH\views\admin\books\v_books_index.php [ 6 ] in Z:\home\kohana\www\application\views\admin\books\v_books_index.php:6
2001-12-31 20:21:10 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\books\v_books_index.php(6): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\kohana\...', 6, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\admin\v_base.php(6): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\books\v_books_index.php:6
2001-12-31 20:21:59 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:21:59 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(46): Kohana_ORM->__get('request')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:22:49 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:22:49 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(46): Kohana_ORM->__get('request')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:23:18 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete book model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php:44
2001-12-31 20:23:18 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(44): Kohana_ORM->delete()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php:44
2001-12-31 20:23:29 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:23:29 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(46): Kohana_ORM->__get('request')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:25:32 --- CRITICAL: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:25:32 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('request')
#1 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(46): Kohana_ORM->__get('request')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2001-12-31 20:26:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\adminbooks.php [ 46 ] in file:line
2001-12-31 20:26:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 20:26:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete book model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php:44
2001-12-31 20:26:23 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(44): Kohana_ORM->delete()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php:44
2001-12-31 20:26:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\adminbooks.php [ 46 ] in file:line
2001-12-31 20:26:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 20:29:00 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete book model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php:44
2001-12-31 20:29:00 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(44): Kohana_ORM->delete()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php:44
2001-12-31 22:17:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\books\v_add_books.php [ 5 ] in Z:\home\kohana\www\application\views\admin\books\v_add_books.php:5
2001-12-31 22:17:39 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\books\v_add_books.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 5, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\admin\v_base.php(6): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\books\v_add_books.php:5
2001-12-31 22:48:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\admin\adminbooks.php [ 30 ] in file:line
2001-12-31 22:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 22:52:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\admin\adminbooks.php [ 30 ] in file:line
2001-12-31 22:52:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 22:52:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '$' ~ APPPATH\classes\Controller\admin\adminbooks.php [ 33 ] in file:line
2001-12-31 22:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 22:53:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\books\v_add_books.php [ 5 ] in Z:\home\kohana\www\application\views\admin\books\v_add_books.php:5
2001-12-31 22:53:46 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\books\v_add_books.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 5, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\admin\v_base.php(6): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\books\v_add_books.php:5
2001-12-31 22:54:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\admin\books\v_add_books.php [ 10 ] in Z:\home\kohana\www\application\views\admin\books\v_add_books.php:10
2001-12-31 22:54:57 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\books\v_add_books.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 10, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana\www\application\views\admin\v_base.php(6): Kohana_View->__toString()
#5 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#6 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#7 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana\www\application\views\admin\books\v_add_books.php:10
2001-12-31 23:01:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\adminbooks.php [ 48 ] in file:line
2001-12-31 23:01:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 23:02:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\adminbooks.php [ 48 ] in file:line
2001-12-31 23:02:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 23:02:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\adminbooks.php [ 48 ] in file:line
2001-12-31 23:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 23:02:38 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `books` (`title`, `description`) VALUES ('Золушка', 'сказка про золушку') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:02:38 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(38): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:03:00 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `books` (`title`, `description`) VALUES ('орорпоп', 'рорпо') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:03:00 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(38): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:03:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\adminbooks.php [ 66 ] in file:line
2001-12-31 23:03:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2001-12-31 23:53:44 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `books` (`title`, `description`) VALUES ('привет,мир', 'ропорпорпо') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:53:44 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(61): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:54:18 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `books` (`title`, `description`) VALUES ('дррррр', 'орлолрл') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:54:18 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(61): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:54:41 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `books` (`title`, `description`) VALUES ('парарарар', 'папрамисмрпорппорпор') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2001-12-31 23:54:41 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 Z:\home\kohana\www\application\classes\Controller\admin\adminbooks.php(61): Kohana_ORM->save()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251