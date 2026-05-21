<?php

require_once('../app/controllers/HomeController.php');
require_once('../app/controllers/NoticiasController.php');
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

        $actionName = $parts[1] ?? 'index';

        if (!method_exists($controller, $actionName))
        {
            $controllerName = 'NotFoundController';
            $controller = new $controllerName;
            $actionName = 'index';
        }

        $params = array_slice($parts, 2);

        //var_dump($params);
        //exit;

        call_user_func_array([$controller, $actionName], $params);

        //$controller->$actionName();

    }
}