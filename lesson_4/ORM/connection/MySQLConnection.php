<?php

namespace app\connection;

class MySQLConnection extends Connection
{

    public function connect()
    {
        echo "Работает соединение с MySQLConnection" . PHP_EOL;
    }
}