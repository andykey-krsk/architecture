<?php


class WebMoney implements IPaySystem
{

    public function transaction(Order $order)
    {
        echo "Ордер проведен через платежную систему WebMoney" . PHP_EOL;
    }
}