<?php
//include "config/config.php";
//include "engine/Autoload.php";

use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);
