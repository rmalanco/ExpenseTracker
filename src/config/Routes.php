<?php

namespace ExpenseTracker\Config;

class Routes
{
    public static function run()
    {
        // Obtener la URL y eliminar los parámetros de consulta
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = trim($url, '/');
        $urlSegments = explode('/', $url);

        // Obtener el controlador y la acción de la URL
        $controller = isset($urlSegments[0]) && $urlSegments[0] !== '' ? ucfirst(strtolower($urlSegments[0])) : 'Home';
        $action = isset($urlSegments[1]) && $urlSegments[1] !== '' ? strtolower($urlSegments[1]) : 'index';

        $controller = 'ExpenseTracker\Controllers\\' . $controller . 'Controller';

        if (!class_exists($controller)) {
            echo 'ERROR: Controller not found';
            die;
        }

        $controllerInstance = new $controller;

        if (!method_exists($controllerInstance, $action)) {
            echo 'ERROR: Action not found';
            die;
        }

        $controllerInstance->$action();
    }
}