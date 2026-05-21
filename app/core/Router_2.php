<?php

require_once('../app/controllers/HomeController.php');
require_once('../app/controllers/errors/NotFoundController.php');

class Router {
    public function dispatch($url)
    {

        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];

        //$controllerName = $parts[0] ?? 'HomeController';

        $controllerName = $parts[0] ?? 'Home';

        $controllerName = ucfirst($controllerName) . 'Controller';

        if (!class_exists($controllerName))
        {
            $controllerName = 'NotFoundController';
        }

        $controller = new $controllerName();
        $controller->index();

        //echo 'URL: '. var_dump($parts);
        //echo '<hr>';
        //echo 'Controller: ' . $controllerName;

    }
}