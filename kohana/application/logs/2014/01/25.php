<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-25 01:12:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_admin ~ APPPATH\classes\Controller\Admin.php [ 11 ] in Z:\home\kohana\www\application\classes\Controller\Admin.php:11
2014-01-25 01:12:24 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\Admin.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 11, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Admin->before()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\Admin.php:11
2014-01-25 01:13:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\admin\v_base.php [ 5 ] in Z:\home\kohana\www\application\views\admin\v_base.php:5
2014-01-25 01:13:04 --- DEBUG: #0 Z:\home\kohana\www\application\views\admin\v_base.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 5, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\admin\v_base.php:5
2014-01-25 01:14:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 01:14:26 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\application\classes\Controller\admin\Adminbooks.php(63): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 01:34:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 4 ] in Z:\home\kohana\www\application\views\index\v_base.php:4
2014-01-25 01:34:59 --- DEBUG: #0 Z:\home\kohana\www\application\views\index\v_base.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 4, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\index\v_base.php:4
2014-01-25 01:35:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: site_name ~ APPPATH\views\index\v_base.php [ 20 ] in Z:\home\kohana\www\application\views\index\v_base.php:20
2014-01-25 01:35:47 --- DEBUG: #0 Z:\home\kohana\www\application\views\index\v_base.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana\...', 20, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana\...')
#2 Z:\home\kohana\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana\...', Array)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\application\views\index\v_base.php:20
2014-01-25 01:36:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 01:36:58 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohana\www\application\classes\Controller\admin\Adminbooks.php(137): Kohana_ORM->add('authors', NULL)
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 04:13:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\Controller\admin\Adminauthors.php [ 16 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 04:13:19 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 16, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 04:38:40 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 04:38:40 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(137): Kohana_ORM->add('authors', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 04:39:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 04:39:24 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(137): Kohana_ORM->add('authors', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 04:39:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 04:39:51 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(135): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 08:02:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\Controller\admin\Adminauthors.php [ 16 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:02:36 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 16, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:02:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\Controller\admin\Adminauthors.php [ 16 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:02:49 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 16, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:04:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\Controller\admin\Adminauthors.php [ 16 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:04:31 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 16, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:09:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\Controller\admin\Adminauthors.php [ 16 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:09:17 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 16, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminauthors.php:16
2014-01-25 08:15:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\Controller\admin\Admincategories.php [ 17 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Admincategories.php:17
2014-01-25 08:15:49 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Admincategories.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 17, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Admincategories->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Admincategories))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Admincategories.php:17
2014-01-25 08:20:13 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/settings/v_settings could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohanalast\www\system\classes\Kohana\View.php:137
2014-01-25 08:20:13 --- DEBUG: #0 Z:\home\kohanalast\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/settings/...')
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/settings/...', NULL)
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Settings.php(9): Kohana_View::factory('admin/settings/...')
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Settings->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Settings))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\system\classes\Kohana\View.php:137
2014-01-25 09:53:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\admin\books\v_books_index.php [ 52 ] in Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php:52
2014-01-25 09:53:07 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 52, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php:52
2014-01-25 10:10:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\Controller\admin\Adminbooks.php [ 26 ] in file:line
2014-01-25 10:10:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 10:13:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH\classes\Controller\admin\Adminbooks.php [ 26 ] in file:line
2014-01-25 10:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 11:05:32 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/widgets/pagination could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohanalast\www\system\classes\Kohana\View.php:137
2014-01-25 11:05:32 --- DEBUG: #0 Z:\home\kohanalast\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/widgets/p...')
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/widgets/p...', NULL)
#2 Z:\home\kohanalast\www\modules\pagination\classes\kohana\pagination.php(274): Kohana_View::factory('admin/widgets/p...')
#3 Z:\home\kohanalast\www\modules\pagination\classes\kohana\pagination.php(374): Kohana_Pagination->render()
#4 Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php(52): Kohana_Pagination->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#9 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#10 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#11 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#15 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\kohanalast\www\system\classes\Kohana\View.php:137
2014-01-25 11:19:24 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete book model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:180
2014-01-25 11:19:24 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(180): Kohana_ORM->delete()
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:180
2014-01-25 11:20:56 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php:603
2014-01-25 11:20:56 --- DEBUG: #0 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php(22): Kohana_ORM->__get('name')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#4 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#7 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php:603
2014-01-25 12:16:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\admin\books\v_add_books.php [ 14 ] in file:line
2014-01-25 12:16:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 13:04:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: editor1 ~ APPPATH\views\admin\books\v_add_books.php [ 43 ] in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:04:10 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohanal...', 43, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:04:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: editor1 ~ APPPATH\views\admin\books\v_add_books.php [ 43 ] in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:04:35 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohanal...', 43, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:06:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: editor1 ~ APPPATH\views\admin\books\v_add_books.php [ 43 ] in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:06:53 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohanal...', 43, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:24:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: editor1 ~ APPPATH\views\admin\books\v_add_books.php [ 43 ] in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:24:25 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php(43): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohanal...', 43, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_add_books.php:43
2014-01-25 13:28:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:28:12 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:29:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:29:32 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:35:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:35:19 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:37:01 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:37:01 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:37:56 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:37:56 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:38:16 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:38:16 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:39:24 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'authors_id' in 'field list' [ INSERT INTO `books_authors` (`book_id`, `authors_id`) VALUES (24, '6') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:39:24 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(85): Kohana_ORM->add('authors', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:39:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'authors_id' in 'field list' [ INSERT INTO `books_authors` (`book_id`, `authors_id`) VALUES (25, '10') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:39:52 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(85): Kohana_ORM->add('authors', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:43:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:43:32 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(83): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:44:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'authors_id' in 'field list' [ INSERT INTO `books_authors` (`book_id`, `authors_id`) VALUES (27, '8') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:44:17 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(85): Kohana_ORM->add('authors', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:51:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'authors_id' in 'field list' [ INSERT INTO `books_authors` (`book_id`, `authors_id`) VALUES (28, '7') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 13:51:41 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(85): Kohana_ORM->add('authors', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-25 14:29:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$authors ~ APPPATH\classes\Controller\admin\Adminbooks.php [ 39 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:39
2014-01-25 14:29:57 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 39, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:39
2014-01-25 14:32:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$authors ~ APPPATH\classes\Controller\admin\Adminbooks.php [ 39 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:39
2014-01-25 14:32:47 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 39, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:39
2014-01-25 14:46:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: authors ~ APPPATH\classes\Controller\admin\Adminbooks.php [ 46 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:46
2014-01-25 14:46:20 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 46, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:46
2014-01-25 14:46:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$authors ~ APPPATH\classes\Controller\admin\Adminbooks.php [ 40 ] in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:40
2014-01-25 14:46:39 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 40, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php:40
2014-01-25 14:49:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cat ~ APPPATH\views\admin\books\v_books_index.php [ 23 ] in Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php:23
2014-01-25 14:49:50 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 23, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_books_index.php:23
2014-01-25 15:33:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\views\admin\books\v_edit_books.php [ 17 ] in Z:\home\kohanalast\www\application\views\admin\books\v_edit_books.php:17
2014-01-25 15:33:45 --- DEBUG: #0 Z:\home\kohanalast\www\application\views\admin\books\v_edit_books.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohanal...', 17, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#2 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#3 Z:\home\kohanalast\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohanalast\www\application\views\admin\v_base.php(38): Kohana_View->__toString()
#5 Z:\home\kohanalast\www\system\classes\Kohana\View.php(61): include('Z:\home\kohanal...')
#6 Z:\home\kohanalast\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohanal...', Array)
#7 Z:\home\kohanalast\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#11 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohanalast\www\application\views\admin\books\v_edit_books.php:17
2014-01-25 15:42:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\classes\Controller\Welcome.php [ 20 ] in file:line
2014-01-25 15:42:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 15:42:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\classes\Controller\Welcome.php [ 20 ] in file:line
2014-01-25 15:42:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 15:50:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting T_FUNCTION ~ APPPATH\classes\Model\author.php [ 21 ] in file:line
2014-01-25 15:50:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 15:54:25 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\Controller\Welcome.php [ 23 ] in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:23
2014-01-25 15:54:25 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\Welcome.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 23, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:23
2014-01-25 15:55:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\Controller\Welcome.php [ 23 ] in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:23
2014-01-25 15:55:26 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\Welcome.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 23, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:23
2014-01-25 16:00:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 49 ] in file:line
2014-01-25 16:00:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:00:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$categories ~ APPPATH\classes\Controller\Welcome.php [ 23 ] in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:23
2014-01-25 16:00:50 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\Welcome.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 23, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:23
2014-01-25 16:02:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Welcome.php [ 40 ] in file:line
2014-01-25 16:02:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:09:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 61 ] in file:line
2014-01-25 16:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:09:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 74 ] in file:line
2014-01-25 16:09:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:09:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 74 ] in file:line
2014-01-25 16:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:09:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 57 ] in file:line
2014-01-25 16:09:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:09:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting T_FUNCTION ~ APPPATH\classes\Controller\Welcome.php [ 57 ] in file:line
2014-01-25 16:09:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 16:09:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\Controller\Welcome.php [ 46 ] in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:46
2014-01-25 16:09:49 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\Welcome.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohanal...', 46, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:46
2014-01-25 16:16:12 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Book class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php:603
2014-01-25 16:16:12 --- DEBUG: #0 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 Z:\home\kohanalast\www\application\classes\Controller\Welcome.php(44): Kohana_ORM->__get('find_all')
#2 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php:603
2014-01-25 16:17:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$books ~ APPPATH\classes\Controller\Welcome.php [ 55 ] in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:55
2014-01-25 16:17:04 --- DEBUG: #0 Z:\home\kohanalast\www\application\classes\Controller\Welcome.php(55): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohanal...', 55, Array)
#1 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohanalast\www\application\classes\Controller\Welcome.php:55