<?php
include "../config.php";
include "../Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$diametr = 5;

$circleAdapter = new CircleAdapter(new CircleAreaLib());

echo "Площадь круга с диаметром $diametr равна " . $circleAdapter->circleArea($diametr) . PHP_EOL;

$diagonal = 7.0710678118654752440084436210485;

$squareAdapter = new SquareAdapter(new SquareAreaLib());

echo "Площадь квадрата с диагональю $diagonal равна " . $squareAdapter->squareArea($diagonal) . PHP_EOL;