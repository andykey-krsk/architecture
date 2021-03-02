<?php


class OrderController
{
    private $order;
    private IPaySystem $paySystem;

    public function __construct($order, IPaySystem $paySystem)
    {
        $this->order = $order;
        $this->paySystem = $paySystem;
    }

    public function getPay()
    {
        $this->paySystem->transaction($this->order);
    }

}