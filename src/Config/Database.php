<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    public static function connection(): PDO
    {
        static $pdo = null;

        if ($pdo === null) {

            $pdo = new PDO(
                "mysql:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};dbname={$_ENV['DB_NAME']};charset=utf8mb4",
                $_ENV['DB_USER'],
                $_ENV['DB_PASS'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        }

        return $pdo;
    }
}