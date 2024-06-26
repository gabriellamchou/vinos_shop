<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# ADMIN
$route['admin/vinos'] = 'VinoController/show_vinos';
$route['admin/nuevo_vino'] = 'VinoController/new_vino';
$route['admin/nuevo_vino/submit'] = 'VinoController/new_vino_submit';

# DEFAULT
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
