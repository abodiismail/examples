<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//$route['news/(:any)'] = "news/view/$1";
//$route['default_controller'] = "news/index";


//$route['actions/(:any)']  = 'actions/read/$1';
//$route['default_controller'] = "actions";
//$route['actions/(:num)']  = 'actions/read/$1';

//$route['default_controller'] = "welcome";

$route['actions']  = 'actions/index';
$route['actions/(:num)']  = 'actions/read/$1';


$route['posts']  = 'posts/index';
$route['posts/post/(:num)']  = 'posts/read/$1';
/*
$route['blog']  = 'posts/index';
$route['blog/post/(:num)']  = 'posts/read/$1';
$route['blog/category/(:any)']  = 'posts/category/[a-z]';
$route['blog/date/(:any)']  = 'posts/date/';
*/

$route['about'] = 'pages/view/about';
$route['contact'] = 'pages/view/contact';
$route['pages'] = 'pages/view/home';
$route['login'] = 'users/login';
$route['register'] = 'users/register';
$route['fogot'] = 'users/fogot';

//Роуты админской части
$route['admin'] = 'admin/admin/index';
$route['admin/settings'] = 'admin/settings/index';
//$route['admin/posts'] = 'admin/posts/add_post'; //Вывод страницы добавления поста
$route['admin/posts']  = 'admin/posts/index';

//Роут по умолчанию
$route['default_controller'] = 'pages/view/home';



//$route['(:any)'] = 'pages/view/$1';

//$route['default_controller'] = "pages";

$route['404_override'] = '';



/* End of file routes.php */
/* Location: ./application/config/routes.php */