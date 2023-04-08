<?php
global $router;

$router->add('/', 'controllers/home');
$router->add('/about', 'controllers/about');
$router->add('/pages', 'controllers/pages/index');
$router->add('/pages/view', 'controllers/pages/view');
$router->add('/pages/delete', 'controllers/pages/delete');
