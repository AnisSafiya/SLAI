<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$route['users/mohoniklan/(:any)'] = 'users/mohoniklan/$1';
//$route['users/mohoniklan'] = 'users/mohoniklan';

$route['users/cl'] = 'users/cl';
$route['users/maklumatdiri'] = 'users/maklumatdiri';
$route['users/syarikat'] = 'users/syarikat';
$route['users/syarikat/delete/(:any)'] = 'users/syarikat/delete/$1';

$route['iklan/mohoniklan'] = 'iklan/mohoniklan';
$route['iklan/index'] = 'iklan/index';
$route['iklan/create'] = 'iklan/create';
$route['iklan/(:any)'] = 'iklan/view/$1' ;
$route['iklan'] = 'iklan/index';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1' ;
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
