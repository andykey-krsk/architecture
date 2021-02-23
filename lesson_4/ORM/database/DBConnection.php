<?php


abstract class DBConnection
{
    private Connection $connection;

    public function __construct()
    {
        $this->connection = $this->createConnection();
    }

    public function startDelivery()
    {
        echo "Посылаем запрос в ДБ!".PHP_EOL;
        $this->connection->connect();
        echo "Разгребаем ответ".PHP_EOL;
    }

    abstract protected function createConnection() : Connection;
}