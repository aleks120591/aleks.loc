<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/login'] ='admin/lunit/login';
$route['admin/logout'] ='admin/lunit/logout';
$route['admin'] = 'admin/lunit/index';

$route['contact'] = 'pages/contact';
$route['go/(:any)'] = 'click/go/$1';
$route['(:any).html'] ='pages/show/$1';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
