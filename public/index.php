<?php

//todo for login
//session_start();

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . '/System/Functions.php';
$config = require base_path('app/config/main.php');

//to load any unknown class from base path
spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

$router = new \System\Router();
$routes = require base_path('app/config/routes.php');

$router->handle(parse_url($_SERVER['REQUEST_URI'])['path'], $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']);
