<?php

namespace app\database;

use app\traits\TSingletone;
use app\connection\Connection;

abstract class DBConnection
{
    use TSingletone;

    private Connection $connection;

    public function __construct()
    {
        $this->connection = $this->createConnection();
    }

    public function startConnection()
    {
        echo "Посылаем запрос в ДБ!".PHP_EOL;
        $this->connection->connect();
        echo "Разгребаем ответ".PHP_EOL;
    }

    abstract protected function createConnection() : Connection;
}