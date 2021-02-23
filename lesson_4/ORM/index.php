<?php
//include "config/config.php";
//use app\engine\Autoload;
//spl_autoload_register([new Autoload(), 'loadClass']);

require 'Traits/TSingletone.php';

require 'Database/DBConnection.php';
require 'Database/MySQLFactory.php';
require 'Database/OracleFactory.php';
require 'Database/PostgreSQLFactory.php';

require 'Connection/Connection.php';
require 'Connection/MySQL.php';
require 'Connection/Oracle.php';
require 'Connection/PostgreSQL.php';


function test(DBConnection $dbConnection)
{
    $dbConnection->startConnection();
}

test(new MySQLFactory());
echo "-----------".PHP_EOL;
test(new OracleFactory());
echo "-----------".PHP_EOL;
test(new PostgreSQLFactory());