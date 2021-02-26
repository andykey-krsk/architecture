<?php

namespace app\database;

use app\connection\Connection;
use app\connection\OracleConnection;
use app\querybuilder\OracleQueryBuilder;
use app\querybuilder\QueryBuilder;
use app\record\DBRecord;
use app\record\OracleRecord;

class OracleFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Создаем подключение к Oracle".PHP_EOL;
        return new OracleConnection;
    }

    protected function createQuery(): QueryBuilder
    {
        echo "Создаем конструктор запросов Oracle".PHP_EOL;
        return new OracleQueryBuilder;
    }

    protected function createRecord(): DBRecord
    {
        echo "Далаем запрос в MySQL" . PHP_EOL;
        return new OracleRecord;
    }
}