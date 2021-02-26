<?php

namespace app\connection;

class OracleConnection extends Connection
{

    public function connect()
    {
        echo "Работает соединение с OracleConnection" . PHP_EOL;
    }
}