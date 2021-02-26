<?php

namespace app\database;

use app\querybuilder\QueryBuilder;
use app\traits\TSingletone;
use app\connection\Connection;
use app\record\DBRecord;

abstract class DBConnection
{
    use TSingletone;

    private Connection $connection;
    private QueryBuilder $queryBuilder;
    private DBRecord $record;

    public function __construct()
    {
        $this->connection = $this->createConnection();
        $this->queryBuilder = $this->createQuery();
        $this->record = $this->createRecord();
    }

    public function startConnection()
    {
        echo "Начало работы с ДБ!" . PHP_EOL;
        $this->connection->connect();
        echo "Разгребаем ответ" . PHP_EOL;
    }

    abstract protected function createConnection(): Connection;

    abstract protected function createQuery(): QueryBuilder;

    abstract protected function createRecord(): DBRecord;
}