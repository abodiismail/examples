<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 02:56:00 --- CRITICAL: Database_Exception [ 1146 ]: Table 'books.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:56:00 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('books')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\index.php(20): Kohana_ORM::factory('book')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:56:23 --- CRITICAL: Database_Exception [ 1146 ]: Table 'books.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:56:23 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('books')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\index.php(20): Kohana_ORM::factory('book')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:57:02 --- CRITICAL: Database_Exception [ 1146 ]: Table 'books.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:57:02 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('books')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\index.php(20): Kohana_ORM::factory('Book')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:57:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'books.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 02:57:09 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('books')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\index.php(20): Kohana_ORM::factory('Book')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 09:04:00 --- CRITICAL: Database_Exception [ 1146 ]: Table 'books.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 09:04:00 --- DEBUG: #0 Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('books')
#2 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\kohana\www\application\classes\Controller\index.php(20): Kohana_ORM::factory('Book')
#7 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-11-08 12:04:38 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 63 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2013-11-08 12:04:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\kohana\...', 423, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Route.php(423): preg_match('#^avatar(?:/(?P...', 'avatar', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\kohana\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line