<?php
function connectDB(): \PDO
{
    static $dbh = null;

    if (!is_null($dbh)) {
        return $dbh;
    }

    try {
        //подключаем конфиг бд и считываем массив в переменную
        $config = require  __DIR__ . '/../config/database.php';
        $dbh = new \PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4",
            $config['username'],
            $config['password'],
            $config['options']
        );

        return $dbh;
    } catch (\PDOException $e) {
        throw new \PDOException("Internal Server Error: {$e->getMessage()}", 500);
    }
}