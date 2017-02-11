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
|	https://codeigniter.com/user_guide/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'account/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Account Rauter
 * */
$route['login'] = "account/login/index";
$route['register'] = "account/register/index";
$route['register/confirm/email'] = "account/confirm/email";
$route['login/forgot/password'] = "account/forgot/password";
$route['login/forgot/password/confirm'] = "account/forgot/password_confirm";
$route['login/reset/password'] = "account/reset/password";
$route['login/reset/password/confirm'] = "account/reset/password_confirm";
/**
 * Customers Rauter
 * */
$route['customers/create'] = "customers/create/index";
$route['customers/delete/(:num)'] = "customers/delete/index/$1";
$route['customers/delete/confirm'] = "customers/delete/confirm";
$route['customers/details/(:num)'] = "customers/details/index/$1";
$route['customers/edit/(:num)'] = "customers/edit/index/$1";
$route['customers/edit/confirm'] = "customers/edit/confirm";
$route['customers'] = "customers/index/index";
/**
 * Dashboard Raouter
 * */
$route['dashboard'] = "dashboard/index/index";
/**
 * Products Rauter
 * */
$route['products'] = "products/index/index";
$route['product/create'] = "products/create/index";
$route['product/create/confirm'] = "products/create/confirm";
$route['product/delete/(:num)'] = "products/delete/index/$1";
$route['products/delete/confirm'] = "products/delete/confirm";
$route['product/edit/(:num)'] = "products/edit/index/$1";
$route['product/edit/confirm'] = "products/edit/confirm";
$route['product/details/(:num)'] = "products/details/index/$1";
/**
 * Suppliers Router
 * */
$route['suppliers'] = "suppliers/index/index";
$route['supplier/create'] = "suppliers/create/index";
$route['supplier/create/confirm'] = "suppliers/create/confirm";
$route['supplier/delete/(:num)'] = "suppliers/delete/index/$1";
$route['supplier/delete/confirm'] = "suppliers/delete/confirm";
$route['supplier/edit/(:num)'] = "suppliers/edit/index/$1";
$route['supplier/edit/confirm'] = "suppliers/edit/confirm";
$route['suppliers/details/(:num)'] = "suppliers/details/index/$1";
/**
 * Orders Rauter
 * */
$route['orders'] = "orders/index/index";
$route['order/create'] = "orders/create/index";
$route['order/create/confirm'] = "orders/create/confirm";
$route['order/delete/(:num)'] = "orders/delete/index/$1";
$route['order/delete/confirm'] = "orders/delete/confirm";
$route['order/edit/(:num)'] = "orders/edit/index/$1";
$route['order/edit/confirm'] = "orders/edit/confirm";
$route['order/details/(:num)'] = "suppliers/details/index/$1";
/**
 * Employes Router
 * */
$route['employes'] = "employes/index/index";
$route['employe/create'] = "employes/create/index";
$route['employe/create/confirm'] = "employes/create/confirm";
$route['employe/delete/(:num)'] = "employes/delete/index/$1";
$route['employe/delete/confirm'] = "employes/delete/confirm";
$route['employe/edit/(:num)'] = "employes/edit/index/$1";
$route['employe/edit/confirm'] = "employes/edit/confirm";
$route['employe/details/(:num)'] = "employes/details/index/$1";
/**
 * Reports Router
 * */
$route['reports'] = "reports/index/index";
