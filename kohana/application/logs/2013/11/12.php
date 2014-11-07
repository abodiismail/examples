<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-12 01:42:21 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\uploads/ must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-12 01:42:21 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\avatar.php(51): Kohana_Upload::save(Array, NULL, 'Z:\home\kohana\...')
#1 Z:\home\kohana\www\application\classes\Controller\avatar.php(23): Controller_Avatar->_save_image(Array)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Avatar->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Avatar))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\application\classes\Controller\avatar.php:51
2013-11-12 07:09:28 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:09:28 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:11:54 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:11:54 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:11:55 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:11:55 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:18 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:18 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:18 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:18 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:42 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:42 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:43 --- CRITICAL: View_Exception [ 0 ]: The requested view inex/main/v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-12 07:12:43 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inex/main/v_mai...')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('inex/main/v_mai...', NULL)
#2 Z:\home\kohana\www\application\classes\Controller\index\main.php(11): Kohana_View::factory('inex/main/v_mai...')
#3 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Index_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137