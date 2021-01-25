<?php
include 'config/database.php';
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
    "" => '',
    "" => '',
    "" => '',
    "" => '',
    "404" => 'pages/404.php',
);

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);



if (isset($action)) {
    if (array_key_exists($action, $routes)) {
        $route = $routes[$action];
    } else {
        header("HTTP/1.0 404 Not Found");
        $route = $routes['404'];
    }
} else {
    $route = $routes[''];
}

require 'pages/header.php';
require $route;
require 'pages/footer.php';

