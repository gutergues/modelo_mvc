<?php
require_once('../app/controllers/HomeController.php');
//require_once('../app/controllers/SobreController.php');
require_once('../app/controllers/NoticiasController.php');
require_once('../app/controllers/errors/HttpErrorController.php');

class Router {
    public function dispatch($url)
    {
        $url = trim($url, '/');
        
        $parts = $url ? explode('/', $url) : [];
        
        $controllerName = $parts[0] ?? 'Home';
        $controllerName = ucfirst($controllerName).'Controller';
        $actionName = $parts[1] ?? 'index';
        
        
        if (!class_exists($controllerName))
        {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
            //$controllerName = 'HttpErrorController';
        }
        $controller = new $controllerName();
        
        if (!method_exists($controller, $actionName))
        {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }
        
        $params = array_slice($parts, 2);
        
        //var_dump($params);
        //exit;
        
        //$controller->$actionName();
        
        call_user_func_array([$controller, $actionName], $params);
        
        //echo '<hr>';
        //echo 'Controler: ' .$controllerName;
        
        //var_dump($controller, $actionName);
        
    }
}