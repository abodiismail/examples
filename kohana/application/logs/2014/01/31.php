<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-31 02:52:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 02:52:53 --- DEBUG: #0 /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 /home/u212457485/public_html/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u212457485/public_html/application/classes/Controller/Admin/Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 /home/u212457485/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u212457485/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 /home/u212457485/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u212457485/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u212457485/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 03:01:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:01:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:02:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:02:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:02:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:02:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:02:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:02:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:04:33 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_authors` (`book_id`, `author_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 03:04:33 --- DEBUG: #0 /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 /home/u212457485/public_html/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u212457485/public_html/application/classes/Controller/Admin/Adminbooks.php(73): Kohana_ORM->add('authors', NULL)
#3 /home/u212457485/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u212457485/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 /home/u212457485/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u212457485/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u212457485/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 03:05:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:08:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:08:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:11:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:43:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:43:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:45:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:45:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:46:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 03:46:10 --- DEBUG: #0 /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 /home/u212457485/public_html/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u212457485/public_html/application/classes/Controller/Admin/Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 /home/u212457485/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u212457485/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 /home/u212457485/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u212457485/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u212457485/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 03:46:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 03:48:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_category' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-01-31 03:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-31 04:04:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 04:04:20 --- DEBUG: #0 /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 /home/u212457485/public_html/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u212457485/public_html/application/classes/Controller/Admin/Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 /home/u212457485/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u212457485/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 /home/u212457485/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u212457485/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u212457485/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 08:04:22 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 08:04:22 --- DEBUG: #0 /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 /home/u212457485/public_html/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u212457485/public_html/application/classes/Controller/Admin/Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 /home/u212457485/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u212457485/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 /home/u212457485/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u212457485/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u212457485/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 08:07:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `books_categories` (`book_id`, `category_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-31 08:07:52 --- DEBUG: #0 /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bo...', false, Array)
#1 /home/u212457485/public_html/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/u212457485/public_html/application/classes/Controller/Admin/Adminbooks.php(72): Kohana_ORM->add('categories', NULL)
#3 /home/u212457485/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin_Adminbooks->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/u212457485/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminbooks))
#6 /home/u212457485/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/u212457485/public_html/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/u212457485/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /home/u212457485/public_html/modules/database/classes/Kohana/Database/Query.php:251