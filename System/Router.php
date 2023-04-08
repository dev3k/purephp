<?php

namespace System;

class Router
{
    public $routes = [];

    public function add(string $uri, string $controller, string $method = 'GET'): self
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller . '.php',
            'method' => $method,
        ];

        return $this;
    }


    public function handle($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && strtoupper($route['method']) === strtoupper($method)) {
                return require base_path('app/' . $route['controller']);
            }
        }
        abort(404);
    }
}
