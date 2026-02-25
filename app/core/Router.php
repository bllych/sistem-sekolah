<?php

namespace App\Core;

use App\Controllers\StudentController;

class Router
{

    private array $routes = [];


    public function add(string $method, string $uri, string $controller, string $function) 
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public function run()
{
    // Routing logic goes here
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    foreach ($this->routes as $route) {

        $pattern = str_replace(
            '{id}',
            '([0-9]+)',
            $route['uri']
        );

        $pattern = '#^' . $pattern . '$#';

        // Example: /student/([0-9]+)

        if ($method === $route['method'] && preg_match($pattern, $uri, $matches)) {

            require_once '../app/controllers/' . $route['controller'] . '.php';

            $controllerClass = 'App\\Controllers\\' . $route['controller'];
            $controller = new $controllerClass();
            $function = $route['function'];

            array_shift($matches); // remove full match

            call_user_func_array([$controller, $function], $matches);

            return;
        }
    }

    http_response_code(404);
    echo '<h1>404 - Page Not Found</h1>';
}
}