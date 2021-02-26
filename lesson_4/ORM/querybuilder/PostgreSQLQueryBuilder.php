<?php


namespace app\querybuilder;


class PostgreSQLQueryBuilder extends QueryBuilder
{

    public function queryBuild()
    {
        echo "Работает PostgreSQLQueryBuilder " . PHP_EOL;
    }
}