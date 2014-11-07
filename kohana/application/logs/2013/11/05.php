<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-05 14:22:39 --- CRITICAL: View_Exception [ 0 ]: The requested view index/v_base could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-05 14:22:39 --- DEBUG: #0 Z:\home\kohana\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('index/v_base')
#1 Z:\home\kohana\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('index/v_base', NULL)
#2 Z:\home\kohana\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('index/v_base')
#3 Z:\home\kohana\www\application\classes\Controller\base.php(12): Kohana_Controller_Template->before()
#4 Z:\home\kohana\www\application\classes\Controller\index.php(8): Controller_Base->before()
#5 Z:\home\kohana\www\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\kohana\www\system\classes\Kohana\View.php:137
2013-11-05 14:26:16 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH\classes\Controller\index.php [ 20 ] in file:line
2013-11-05 14:26:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line