<?php

namespace app\database;

use app\connection\Connection;
use app\connection\PostgreSQL;

class PostgreSQLFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Подключаемся к PostgreSQL".PHP_EOL;
        return new PostgreSQL();
    }
}