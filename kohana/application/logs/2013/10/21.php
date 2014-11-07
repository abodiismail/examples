<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 09:35:50 --- CRITICAL: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-21 09:35:50 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\kohana\www\application\classes\Controller\base.php(12): Kohana_Controller_Template->before()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-21 09:35:52 --- CRITICAL: View_Exception [ 0 ]: The requested view v_base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-10-21 09:35:52 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_base')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_base', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_base')
#3 Z:\home\kohana\www\application\classes\Controller\base.php(12): Kohana_Controller_Template->before()
#4 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137