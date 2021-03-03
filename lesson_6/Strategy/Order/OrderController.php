<?php

namespace app\Order;

use app\PaySystem\IPaySystem;

class OrderController
{
    private Order $order;
    private IPaySystem $paySystem;

    public function __construct(Order $order, IPaySystem $paySystem)
    {
        $this->order = $order;
        $this->paySystem = $paySystem;
    }

    public function getPay()
    {
        $name = $this->order->name;
        $cost = $this->order->cost;
        echo "Купил $name за $cost рублей" . PHP_EOL;
        $this->paySystem->transaction($this->order->cost);
    }

}