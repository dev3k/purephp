<?php
/**************
 * General Helpers
 **************/

function base_path(string $path): string
{
    return BASE_PATH . $path;
}


function view(string $path, array $attributes = []): void
{
    extract($attributes);
    require base_path('app/views/' . $path . '.php');
}

function routeIs(string $uri): bool
{
    return $_SERVER['REQUEST_URI'] === $uri;
}


function abort(int $code = 404): void
{
    http_response_code($code);
    require base_path("app/views/{$code}.php");
    die();
}

function dd(mixed $value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
