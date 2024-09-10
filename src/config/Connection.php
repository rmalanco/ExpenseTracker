<?php

namespace ExpenseTracker\Config;

use ExpenseTracker\Config\DataBase;

class Connection
{
    private static $database;

    public static function connect()
    {
        try {
            if (!self::$database) {
                self::$database = new \PDO(
                    DataBase::getDsn(),
                    DataBase::getUser(),
                    DataBase::getPassword(),
                    DataBase::getOptions()
                );
            }
            return self::$database;
        } catch (\PDOException $e) {
            echo ERROR_DB_CONNECTION . $e->getMessage();
            die;
        }
    }

    public static function disconnect()
    {
        self::$database = null;
    }
}
