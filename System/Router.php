<?php

namespace System;

class Router
{
    public $routes = [];

    public function add($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller . '.php',
            //'method' => $method,
        ];

        return $this;
    }

    public function get()
    {

    }

    public function handle($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                return require base_path('app/' . $route['controller']);
            }
        }
        return abort(404);
    }
}
