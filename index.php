<?php
session_start();
if (isset($_SESSION['countViewPage'])) {
    $_SESSION['countViewPage']++;
} else {
    $_SESSION['countViewPage'] = 0;
}
if (!isset($_SESSION['dateFirstVisit'])) {
    $_SESSION['dateFirstVisit'] =  date('Y-m-d-H-i-s');
}


$routes = array(
    "index" => '/app/controllers/homeController.php',
    "" => '',
    "" => '',
    "" => '',
    "404" => 'pages/404.php',
);

$page = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);



if (isset($action)) {
    if (array_key_exists($page, $routes)) {
        $route = $routes[$page];
    } else {
        header("HTTP/1.0 404 Not Found");
        $route = $routes['404'];
    }
} else {
    $route = $routes['index'];
}
include 'config/database.php';
require 'app/controllers/homeController.php';
