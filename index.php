<?php
// Hide deprecated and notice warnings
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);

require 'vendor/autoload.php';
require 'app/controllers/employee_controller.php';

use Jenssegers\Blade\Blade;

// Initialize Blade
$blade = new Blade('app/views', 'cache');

// Handle the request via controller
$data = handleEmployeeRequest();

// Render the selected view with data
echo $blade->render($data['view'], $data);
