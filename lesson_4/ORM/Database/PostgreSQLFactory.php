<?php


class PostgreSQLFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Подключаемся к PostgreSQL".PHP_EOL;
        return new PostgreSQL();
    }
}