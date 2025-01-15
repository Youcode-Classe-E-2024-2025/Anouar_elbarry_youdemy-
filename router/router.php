<?php
class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['POST'][$path] = $callback;
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'];
        
        // Remove query strings
        if (strpos($path, '?') !== false) {
            $path = substr($path, 0, strpos($path, '?'));
        }
        
        // Remove base path if exists
        $basePath = '/Anouar_elbarry_youdemy-';
        if (strpos($path, $basePath) === 0) {
            $path = substr($path, strlen($basePath));
        }
        
        // Default to '/' if empty
        $path = $path ?: '/';

        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            call_user_func($callback);
        } else {
            // 404 Not Found
            header("HTTP/1.0 404 Not Found");
            include_once __DIR__ . '/../view/404.php';
        }
    }
}
