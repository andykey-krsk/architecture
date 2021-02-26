<?php


namespace app\querybuilder;


class MySQLQueryBuilder extends QueryBuilder
{

    public function queryBuild()
    {
        echo "Работает MySQLQueryBuilder " . PHP_EOL;
    }
}