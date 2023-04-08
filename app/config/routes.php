<?php
global $router;

$router->get('/', 'controllers/home');

$router->get('/pages', 'controllers/pages/index');
$router->get('/pages/view', 'controllers/pages/view');
$router->get('/pages/create', 'controllers/pages/create');
$router->get('/pages/edit', 'controllers/pages/edit');

$router->post('/pages/create', 'controllers/pages/store');
$router->put('/pages/update', 'controllers/pages/update');
$router->delete('/pages/delete', 'controllers/pages/delete');
