<?php

require 'TSingleton.php';

class Db
{
    use TSingleton;

    private $connection = null;

    public function getConnection()
    {
        if (is_null($this->connection)){
            echo "Создаем соединение с BD" . PHP_EOL;
            $this->connection = "Соединение создано";
        } else {
            echo "Cоединение с DB уже создано" . PHP_EOL;
        }

        return $this->connection;
    }
}