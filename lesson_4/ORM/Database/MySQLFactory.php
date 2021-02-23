<?php

namespace app\database;

use app\connection\Connection;
use app\connection\MySQL;

class MySQLFactory extends DBConnection
{
    protected function createConnection(): Connection
    {
        echo "Подключаемся к MySQL".PHP_EOL;
        return new MySQL();
    }
}