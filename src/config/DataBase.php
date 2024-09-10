<?php

namespace ExpenseTracker\Config;

class DataBase
{
    const DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;

    public static function getDsn()
    {
        return self::DSN;
    }

    public static function getUser()
    {
        return DB_USER;
    }

    public static function getPassword()
    {
        return DB_PASSWORD;
    }

    public static function getOptions()
    {
        return [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];
    }

    public static function getCharset()
    {
        return DB_CHARSET;
    }

    public static function getDb()
    {
        return DB_NAME;
    }

    public static function getHost()
    {
        return DB_HOST;
    }
}
