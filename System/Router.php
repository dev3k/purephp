<?php

namespace System;

class Router
{
    public array $routes = [];

    public function add(string $uri, string $controller, string $method = 'GET'): self
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller . '.php',
            'method' => $method,
        ];

        return $this;
    }

    public function get(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function path(string $uri, string $controller): self
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function put($uri, $controller): self
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function handle($uri, $method): mixed
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && strtoupper($route['method']) === strtoupper($method)) {
                return require base_path('app/' . $route['controller']);
            }
        }
        abort(404);
    }
}
