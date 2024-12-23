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
$route['default_controller'] = 'beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'login/index'; // Route to display the login page
$route['login/do_login'] = 'login/do_login'; // Route for handling login action
$route['about'] = 'about/index'; // Route to About controller
$route['contact'] = 'contact/index'; // Route to Contact controller
$route['logout'] = 'login/logout'; // Route for logging out
$route['books'] = 'books/index'; // Ubah sesuai dengan controller Anda
$route['admin'] = 'admin'; // Jika ingin mengakses admin dashboard dengan URL "yourdomain.com/admin"
$route['admin/dashboard'] = 'admin/index'; // Bisa digunakan untuk menentukan aksi default
$route['admin/view_user/(:num)'] = 'admin/view_user/$1'; // Menampilkan detail user dengan ID tertentu
$route['admin/delete_user/(:num)'] = 'admin/delete_user/$1'; // Menghapus user dengan ID tertentu
$route['book/create'] = 'book/create';
$route['book/edit/(:num)'] = 'book/edit/$1';
$route['book/delete/(:num)'] = 'book/delete/$1';
$route['libraryadmin'] = 'libraryadmin/index';


