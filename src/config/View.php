<?php

namespace ExpenseTracker\Config;

class View
{
    public static function render($view, $args = [])
    {
        extract($args);
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
