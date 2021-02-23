<?php
include "config/config.php";

use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);


function test(Logistic $logistic)
{
    $logistic->startDelivery();
}

test(new RoadLogistic());
echo "-----------".PHP_EOL;
test(new ShipLogistic());