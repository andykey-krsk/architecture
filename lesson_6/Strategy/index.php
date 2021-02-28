<?php
include "../config.php";
include "../Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

