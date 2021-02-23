<?php
define("ROOT", dirname(__DIR__));
include ROOT . "/config/config.php";

include ROOT . "/engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


