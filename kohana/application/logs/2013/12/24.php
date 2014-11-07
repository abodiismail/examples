<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-24 13:40:02 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete author model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\kohana\www\application\classes\Controller\admin\adminauthors.php:92
2013-12-24 13:40:02 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\adminauthors.php(92): Kohana_ORM->delete()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\adminauthors.php:92
2013-12-24 13:40:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete author model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in Z:\home\kohana\www\application\classes\Controller\admin\adminauthors.php:92
2013-12-24 13:40:15 --- DEBUG: #0 Z:\home\kohana\www\application\classes\Controller\admin\adminauthors.php(92): Kohana_ORM->delete()
#1 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Adminauthors->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Adminauthors))
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana\www\application\classes\Controller\admin\adminauthors.php:92