<?php
//include "config/config.php";

use app\engine\Autoload;

//include "engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);
