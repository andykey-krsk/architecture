<?php

namespace app\connection;

class PostgreSQLConnection extends Connection
{

    public function connect()
    {
        echo "Работает соединение с OracleConnection" . PHP_EOL;
    }
}