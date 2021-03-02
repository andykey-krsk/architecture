<?php


class Yandex implements IPaySystem
{

    public function transaction(Order $order)
    {
        echo "Ордер проведен через платежную систему Yandex" . PHP_EOL;
    }
}