<?php

namespace app\database;

use app\connection\Connection;
use app\connection\PostgreSQLConnection;
use app\querybuilder\PostgreSQLQueryBuilder;
use app\querybuilder\QueryBuilder;
use app\record\DBRecord;
use app\record\PostgreSQLRecord;

class PostgreSQLFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Создаем подключение к PostgreSQL".PHP_EOL;
        return new PostgreSQLConnection;
    }

    protected function createQuery(): QueryBuilder
    {
        echo "Создаем конструктор запросов PostgreSQL".PHP_EOL;
        return new PostgreSQLQueryBuilder;
    }

    protected function createRecord(): DBRecord
    {
        echo "Далаем запрос в PostgreSQL" . PHP_EOL;
        return new PostgreSQLRecord;
    }
}