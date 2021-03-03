<?php
include "config/config.php";

use app\Order\{Order,OrderController};
use app\PaySystem\{Qiwi,Yandex,WebMoney};

include "config/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$order = new Order("Носки", 100);

$controller = new OrderController($order, new Qiwi());
$controller->getPay();
echo "--------------------------------".PHP_EOL;
$controller = new OrderController($order, new Yandex());
$controller->getPay();
echo "--------------------------------".PHP_EOL;
$controller = new OrderController($order, new WebMoney());
$controller->getPay();
