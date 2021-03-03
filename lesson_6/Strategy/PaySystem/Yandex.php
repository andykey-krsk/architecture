<?php

namespace app\PaySystem;

class Yandex implements IPaySystem
{

    public function transaction($cost)
    {
        echo "Платёж проведен через систему Yandex на сумму $cost" . PHP_EOL;
    }
}