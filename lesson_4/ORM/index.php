<?php
include 'config/config.php';

use app\database\DBConnection;
use app\database\MySQLFactory;
use app\database\OracleFactory;
use app\database\PostgreSQLFactory;
use app\engine\Autoload;

include "engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);



function test(DBConnection $dbConnection)
{
    $dbConnection->startConnection();
}

test(new MySQLFactory());
echo "-----------".PHP_EOL;
test(new OracleFactory());
echo "-----------".PHP_EOL;
test(new PostgreSQLFactory());