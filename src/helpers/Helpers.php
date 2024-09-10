<?php

namespace ExpenseTracker\Helpers;

class Helpers
{
    public static function url($url)
    {
        return BASE_URL . $url;
    }

    public static function redirect($url)
    {
        header('Location: ' . self::url($url));
    }

    public static function asset($asset)
    {
        return BASE_URL . 'assets/' . $asset;
    }

    public static function path($path)
    {
        return BASE_URL . 'public/' . $path;
    }

    public static function debugDetails($data)
    {
        dd($data);
        die;
    }

    public static function checkSessionAuth()
    {
        if (!isset($_SESSION['user_authenticated']) || $_SESSION['user_authenticated'] !== true) {
            header('Location: /home/login');
            exit();
        }
    }

    public static function checkSession()
    {
        if (isset($_SESSION['user_authenticated']) && $_SESSION['user_authenticated'] === true) {
            header('Location: /dashboard');
            exit();
        }
    }

    public static function logout()
    {
        session_destroy();
        header('Location: /');
    }
}