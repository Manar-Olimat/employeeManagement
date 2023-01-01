<?php
defined('BASEPATH') OR exit('No direct script access allowed');








$route['tasks/create/(:any)'] = 'tasks/create/$1';

$route['employee/create'] = 'employees/create';
$route['employee/update'] = 'employees/update';

// $route['employees'] = 'employees/index';
$route['employee/(:any)'] = 'employees/view/$1';

$route['default_controller'] = 'employees';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
