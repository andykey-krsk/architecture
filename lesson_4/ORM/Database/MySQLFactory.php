<?php



class MySQLFactory extends DBConnection
{
    protected function createConnection(): Connection
    {
        echo "Подключаемся к MySQL".PHP_EOL;
        return new MySQL();
    }
}