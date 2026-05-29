<?php

namespace App;

class Router
{
    private static array $routes = [];

    public static function addRoute(string $method, string $path, string $controller, string $function) : void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];  
    }

    public static function run() : void
    {
        $path = "/";
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        } else {
            $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            
            $basePath = str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']);
            
            if (strpos($requestUri, $basePath) === 0) {
                $path = substr($requestUri, strlen($basePath));
            } else {
                $path = $requestUri;
            }
            
            if (strpos($path, '/public') === 0) {
                $path = substr($path, 7);
            }
            
            if ($path == '') {
                $path = '/';
            }
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                $controllerClass = "\\App\\controller\\" . $route['controller'];
                $controller = new $controllerClass();
                $function = $route['function'];
                $controller->$function();
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found: " . htmlspecialchars($path);
    }
}