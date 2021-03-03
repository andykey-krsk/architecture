<?php

namespace app\PaySystem;

class Qiwi implements IPaySystem
{
    public function transaction($cost)
    {
        echo "Платёж проведен через систему Qiwi на сумму $cost" . PHP_EOL;
    }
}