<?php
global $router;

$router->get('/', 'controllers/home');

$router->get('/pages', 'controllers/pages/index');
$router->get('/pages/view', 'controllers/pages/view');
$router->get('/pages/create', 'controllers/pages/create');
$router->post('/pages/create', 'controllers/pages/store');
$router->delete('/pages/delete', 'controllers/pages/delete');
