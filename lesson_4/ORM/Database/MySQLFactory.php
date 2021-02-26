<?php

namespace app\database;

use app\connection\Connection;
use app\connection\MySQLConnection;
use app\querybuilder\MySQLQueryBuilder;
use app\querybuilder\QueryBuilder;
use app\record\DBRecord;
use app\record\MySQLRecord;

class MySQLFactory extends DBConnection
{
    protected function createConnection(): Connection
    {
        echo "Создаем подключение к MySQL".PHP_EOL;
        return new MySQLConnection;
    }

    protected function createQuery(): QueryBuilder
    {
        echo "Создаем конструктор запросов MySQL".PHP_EOL;
        return new MySQLQueryBuilder;
    }

    protected function createRecord():DBRecord
    {
        echo "Далаем запрос в MySQL" . PHP_EOL;
        return new MySQLRecord;
    }
}