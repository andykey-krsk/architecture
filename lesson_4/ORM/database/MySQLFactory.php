<?php


class MySQLFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Подключаемся к MySQL";
        return new MySQL();
    }
}