<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-29 13:25:47 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:25:47 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:41:05 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:41:05 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:41:27 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:41:27 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:42:07 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:42:07 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:47:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:47:39 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:48:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 13:48:20 --- DEBUG: #0 Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohanalast\www\modules\database\classes\Kohana\Database\Query.php:251
2014-01-29 14:08:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting '(' ~ APPPATH\classes\Model\Book.php [ 41 ] in file:line
2014-01-29 14:08:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-29 14:15:14 --- CRITICAL: ReflectionException [ 0 ]: Function not_empty_field() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in Z:\home\kohanalast\www\system\classes\Kohana\Validation.php:396
2014-01-29 14:15:14 --- DEBUG: #0 Z:\home\kohanalast\www\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not_empty_field')
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#2 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#3 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#4 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(71): Kohana_ORM->save()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#8 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohanalast\www\system\classes\Kohana\Validation.php:396
2014-01-29 14:28:45 --- CRITICAL: ReflectionException [ 0 ]: Function not_empty_field() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in Z:\home\kohanalast\www\system\classes\Kohana\Validation.php:396
2014-01-29 14:28:45 --- DEBUG: #0 Z:\home\kohanalast\www\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not_empty_field')
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#2 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#3 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#4 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(71): Kohana_ORM->save()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#8 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohanalast\www\system\classes\Kohana\Validation.php:396
2014-01-29 14:29:42 --- CRITICAL: ReflectionException [ 0 ]: Function not_empty_field() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in Z:\home\kohanalast\www\system\classes\Kohana\Validation.php:396
2014-01-29 14:29:42 --- DEBUG: #0 Z:\home\kohanalast\www\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('not_empty_field')
#1 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#2 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#3 Z:\home\kohanalast\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#4 Z:\home\kohanalast\www\application\classes\Controller\admin\Adminbooks.php(71): Kohana_ORM->save()
#5 Z:\home\kohanalast\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminbooks->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#8 Z:\home\kohanalast\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohanalast\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohanalast\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohanalast\www\system\classes\Kohana\Validation.php:396