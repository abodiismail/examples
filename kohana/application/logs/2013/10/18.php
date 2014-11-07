<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-18 08:12:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in Z:\home\books\www\system\classes\Kohana\Cookie.php:67
2013-10-18 08:12:23 --- DEBUG: #0 Z:\home\books\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('vc', NULL)
#1 Z:\home\books\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('vc')
#2 Z:\home\books\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\books\www\system\classes\Kohana\Cookie.php:67