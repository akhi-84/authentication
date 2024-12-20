<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['admin/categories'] = 'admin/categories';
$route['admin/users'] = 'admin/Users';
$route['admin/user'] = 'admin/User';
$route['admin/logout'] = 'admin/account/logout';
$route['admin/dashboard'] = 'admin/account/dashboard';
$route['admin'] = 'admin/account';
$route['login-details'] = 'admin/account/auth';
$route['create'] = 'admin/User/create';
$route['user-add'] = 'admin/User/add';
$route['user/edit/(:any)'] = 'admin/User/edit/$1';
$route['user/update'] = 'admin/User/update';
$route['user/delete/(:any)'] = 'admin/User/delete/$1';
$route['users/create'] = 'admin/Users/create';
$route['users-add'] = 'admin/Users/add';
$route['users/edit/(:any)'] = 'admin/Users/edit/$1';
$route['users/update'] = 'admin/Users/update';
$route['users/delete/(:any)'] = 'admin/Users/delete/$1'; 
$route['admin/categories/list'] = 'admin/categories/index';
$route['admin/categories/add'] = 'admin/categories/add';
$route['admin/categories/create'] = 'admin/categories/create';
$route['admin/categories/edit/(:num)'] = 'admin/categories/edit/$1';
$route['admin/categories/update_category/(:num)'] = 'admin/categories/update_category/$1';
$route['admin/categories/delete/(:num)'] = 'admin/categories/delete/$1';
$route['profile/view'] = 'profile/view';  // View Profile
$route['profile/settings'] = 'profile/settings';  // Settings Page
$route['logout'] = 'auth/logout';  // Logout
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

