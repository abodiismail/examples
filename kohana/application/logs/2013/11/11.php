<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-11 02:22:47 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/v_base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-11 02:22:47 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/v_base')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/v_base', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('admin/v_base')
#3 Z:\home\kohana\www\application\classes\Controller\base.php(12): Kohana_Controller_Template->before()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-11 02:57:23 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:57:23 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:58:02 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:58:02 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:58:47 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:58:47 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:59:45 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 02:59:45 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:03:06 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:03:06 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:04:33 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:04:33 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:04:40 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:04:40 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:07:29 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:07:29 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:11:56 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:11:56 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-11 03:24:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting T_FUNCTION ~ APPPATH\classes\Controller\index.php [ 76 ] in file:line
2013-11-11 03:24:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 03:37:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Controller\index.php [ 89 ] in file:line
2013-11-11 03:37:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 03:38:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\index.php [ 65 ] in file:line
2013-11-11 03:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 03:47:35 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2013-11-11 03:47:35 --- DEBUG: #0 Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 Z:\home\kohana\www\application\classes\Controller\index.php(61): Kohana_ORM->__get('find_all')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\orm\classes\Kohana\ORM.php:603
2013-11-11 03:47:53 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\index.php [ 61 ] in Z:\home\kohana\www\application\classes\Controller\index.php:61
2013-11-11 03:47:53 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\index.php(61): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\kohana\...', 61, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\index.php:61
2013-11-11 03:49:49 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\kohana\www\application\classes\Controller\index.php:20
2013-11-11 03:49:49 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\index.php(20): Kohana_ORM->find()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\index.php:20
2013-11-11 03:53:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$category ~ APPPATH\classes\Controller\index.php [ 64 ] in Z:\home\kohana\www\application\classes\Controller\index.php:64
2013-11-11 03:53:29 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\index.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 64, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\index.php:64
2013-11-11 06:15:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\index.php [ 71 ] in file:line
2013-11-11 06:15:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 06:16:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\index.php [ 71 ] in file:line
2013-11-11 06:16:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 06:16:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\Controller\index.php [ 58 ] in file:line
2013-11-11 06:16:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 06:20:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\classes\Controller\index.php [ 70 ] in file:line
2013-11-11 06:20:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-11 06:20:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$description ~ APPPATH\classes\Controller\index.php [ 70 ] in Z:\home\kohana\www\application\classes\Controller\index.php:70
2013-11-11 06:20:56 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\index.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana\...', 70, Array)
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\index.php:70