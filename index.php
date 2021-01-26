<?php
error_reporting(E_ALL);
ini_set('display_errors',true);

$routes = array(
    "home" => 'app/controllers/homeController.php',
    "" => '',
    "" => '',
    "404" => 'pages/404.php',
);

if (filter_has_var(INPUT_GET,'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!array_key_exists($action, $routes)) {
        $action = '404';
    }
} else {
    $action ='home';
}
require 'config/database.php';
$route = $routes[$action];
require $route;

