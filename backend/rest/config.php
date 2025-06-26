<?php

class Config {
    public static function DB_HOST() {
        return 'localhost';
    }
    public static function DB_PORT() {
        return 3306;
    }
    public static function DB_NAME() {
        return 'football_test_db';
    }
    public static function DB_USERNAME() {
        return 'root';
    }
    public static function DB_PASSWORD() {
        return '';
    }
}

class Database {
    private static $connection = null;

    public static function connectDatabase() {
        if(self::$connection === null) {
            try {
                self::$connection = new PDO("mysql:host=" . Config::DB_HOST(). ";dbname=" . Config::DB_NAME(), Config::DB_USERNAME(), Config::DB_PASSWORD(),
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC] );

                echo ("Database connected sucesfully! <br>");
            }
            catch (PDOException $e) {
                die("Connection failed! <br>" . $e->getMessage());
            }
            //return self::$connection;
        }
    }
}