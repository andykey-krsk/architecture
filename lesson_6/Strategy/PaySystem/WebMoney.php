<?php

namespace app\PaySystem;


class WebMoney implements IPaySystem
{

    public function transaction($cost)
    {
        echo "Платёж проведен через систему WebMoney на сумму $cost" . PHP_EOL;
    }
}