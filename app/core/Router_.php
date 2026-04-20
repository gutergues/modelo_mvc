<?php

namespace app\core;

class Router
{
    protected $routes = [];

    public function __construct()
    {
        $this->routes = [
            '/' => ['HomeController', 'index'],
            '/sobre' => ['HomeController', 'sobre'],
            '/contato' => ['HomeController', 'contato'],
        ];
    }

    public function dispatch($url)
    {
        $path = parse_url($url, PHP_URL_PATH);

        if (array_key_exists($path, $this->routes)) {
            $controllerName = 'app\controllers\\' . $this->routes[$path][0];
            $method = $this->routes[$path][1];

            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                if (method_exists($controller, $method)) {
                    $controller->$method();
                } else {
                    echo "Método '$method' não encontrado em $controllerName.";
                }
            } else {
                echo "Controlador '$controllerName' não encontrado.";
            }
        } else {
            http_response_code(404);
            echo "Página não encontrada.";
        }
    }
}