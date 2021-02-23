<?php

require 'traits/TSingletone.php';

require 'database/DBConnection.php';
require 'database/MySQLFactory.php';
require 'database/OracleFactory.php';
require 'database/PostgreSQLFactory.php';

require 'connection/Connection.php';
require 'connection/MySQL.php';
require 'connection/Oracle.php';
require 'connection/PostgreSQL.php';


function test(DBConnection $dbConnection)
{
    $dbConnection->startConnection();
}

test(new MySQLFactory());
echo "-----------".PHP_EOL;
test(new OracleFactory());
echo "-----------".PHP_EOL;
test(new PostgreSQLFactory());