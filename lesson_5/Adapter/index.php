<?php
include "../config.php";
include "../Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$l = 31.4159;

$circleAdapter = new CircleAdapter(new CircleAreaLib());

echo "Площадь круга с длинной окружности $l равна " . $circleAdapter->circleArea($l) . PHP_EOL;

$a = 5;

$squareAdapter = new SquareAdapter(new SquareAreaLib());

echo "Площадь квадрата со стороной $a равна " . $squareAdapter->squareArea($a) . PHP_EOL;