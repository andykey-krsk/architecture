<?php


class Qiwi implements IPaySystem
{

    public function transaction(Order $order)
    {
        echo "Ордер проведен через платежную систему Qiwi" . PHP_EOL;
    }
}