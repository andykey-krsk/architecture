<?php

namespace app\database;

use app\connection\Connection;
use app\connection\Oracle;

class OracleFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Подключаемся к Oracle".PHP_EOL;
        return new Oracle();
    }
}