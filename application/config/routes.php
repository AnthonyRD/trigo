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
 * Account Router
 * */
$route['login'] = "account/login/index";
$route['register'] = "account/register/index";
$route['register/confirm/email'] = "account/confirm/email";
$route['login/forgot/password'] = "account/forgot/password";
$route['login/forgot/password/confirm'] = "account/forgot/password_confirm";
$route['login/reset/password'] = "account/reset/password";
$route['login/reset/password/confirm'] = "account/reset/password_confirm";
/**
 * Customers Router
 * */
$route['customers'] = "customers/index/index";
$route['customer/create'] = "customers/create/index";
$route['customer/create/confirm'] = "customers/create/confirm";
$route['customer/delete/(:num)'] = "customers/delete/index/$1";
$route['customer/delete/confirm'] = "customers/delete/confirm";
$route['customer/details/(:num)'] = "customers/details/index/$1";
$route['customer/edit/(:num)'] = "customers/edit/index/$1";
$route['customer/edit/confirm'] = "customers/edit/confirm";
$route['customers'] = "customers/index/index";
/**
 * Dashboard Raouter
 * */
$route['dashboard'] = "dashboard/index/index";
/**
 * Products Router
 * */
$route['products'] = "products/index/index";
$route['product/create'] = "products/create/index";
$route['product/create/confirm'] = "products/create/confirm";
$route['product/delete/(:num)'] = "products/delete/index/$1";
$route['product/delete/confirm'] = "products/delete/confirm";
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
 * Locations Router
 * */
$route['locations'] = "locations/index/index";
$route['location/create'] = "locations/create/index";
$route['location/create/confirm'] = "locations/create/confirm";
$route['location/delete/(:num)'] = "locations/delete/index/$1";
$route['location/delete/confirm'] = "locations/delete/confirm";
$route['location/edit/(:num)'] = "locations/edit/index/$1";
$route['location/edit/confirm'] = "locations/edit/confirm";
$route['locations/details/(:num)'] = "locations/details/index/$1";
/**
 * Departments Router
 * */
$route['departments'] = "departments/index/index";
$route['department/create'] = "departments/create/index";
$route['department/create/confirm'] = "departments/create/confirm";
$route['department/delete/(:num)'] = "departments/delete/index/$1";
$route['department/delete/confirm'] = "departments/delete/confirm";
$route['department/edit/(:num)'] = "departments/edit/index/$1";
$route['department/edit/confirm'] = "departments/edit/confirm";
$route['departments/details/(:num)'] = "departments/details/index/$1";
/**
 * Positions Router
 * */
$route['positions'] = "positions/index/index";
$route['position/create'] = "positions/create/index";
$route['position/create/confirm'] = "positions/create/confirm";
$route['position/delete/(:num)'] = "positions/delete/index/$1";
$route['position/delete/confirm'] = "positions/delete/confirm";
$route['position/edit/(:num)'] = "positions/edit/index/$1";
$route['position/edit/confirm'] = "positions/edit/confirm";
$route['positions/details/(:num)'] = "positions/details/index/$1";
/**
 * Orders Router
 * */
$route['orders'] = "orders/index/index";
$route['order/create'] = "orders/create/index";
$route['order/create/confirm'] = "orders/create/confirm";
$route['order/delete/(:num)'] = "orders/delete/index/$1";
$route['order/delete/confirm'] = "orders/delete/confirm";
$route['order/edit/(:num)'] = "orders/edit/index/$1";
$route['order/edit/confirm'] = "orders/edit/confirm";
$route['order/details'] = "orders/details";
$route['order/print'] = "orders/create/prints";
/**
 * Employees Router
 * */
$route['employees'] = "employees/index/index";
$route['employee/create'] = "employees/create/index";
$route['employee/create/confirm'] = "employees/create/confirm";
$route['employee/delete/(:num)'] = "employees/delete/index/$1";
$route['employee/delete/confirm'] = "employees/delete/confirm";
$route['employee/edit/(:num)'] = "employees/edit/index/$1";
$route['employee/edit/confirm'] = "employees/edit/confirm";
$route['employees/details/(:num)'] = "employees/details/index/$1";
/**
 * Users Router
 * */
$route['users'] = "users/index/index";
$route['user/create'] = "users/create/index";
$route['user/create/confirm'] = "users/create/confirm";
$route['user/delete/(:num)'] = "users/delete/index/$1";
$route['user/delete/confirm'] = "users/delete/confirm";
$route['user/edit/(:num)'] = "users/edit/index/$1";
$route['user/edit/confirm'] = "users/edit/confirm";
$route['users/details/(:num)'] = "users/details/index/$1";
/**
 * Reports Router
 * */
$route['reports'] = "reports/index/index";
/**
 * Categories Router
 * */
$route['product/categories'] = "categories/index/index";
$route['product/category/create'] = "categories/create/index";
$route['product/category/create/confirm'] = "categories/create/confirm";
$route['product/category/delete/(:num)'] = "categories/delete/index/$1";
$route['product/category/delete/confirm'] = "categories/delete/confirm";
$route['product/category/edit/(:num)'] = "categories/edit/index/$1";
$route['product/category/edit/confirm'] = "categories/edit/confirm";
$route['product/category/details/(:num)'] = "categories/details/index/$1";

/**
 * Call request page
 * */
$route['ajax/customer/getall'] = "trigo/ajax/customers/getall";
$route['ajax/customer/get/([a-zA-Z0-9]+)'] = "trigo/ajax/customers/get/$1";
$route['ajax/customer/search'] = "trigo/ajax/customers/search";

/****/
//$route['ajax/employee/getall'] = "ajax/employees/getall";
//$route['ajax/employee/get/([a-zA-Z0-9]+)'] = "ajax/employees/get/$1";
//$route['ajax/employee/search'] = "ajax/employees/search"; 
/****/
$route['/ajax/order/create'] = "trigo/ajax/orders/create";
/****/
$route['/ajax/product/getall'] = "trigo/ajax/products/getall";
