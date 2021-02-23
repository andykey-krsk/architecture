<?php


class OracleFactory extends DBConnection
{

    protected function createConnection(): Connection
    {
        echo "Подключаемся к Oracle".PHP_EOL;
        return new Oracle();
    }
}