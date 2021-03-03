<?php

namespace app\PaySystem;

interface IPaySystem
{
    public function transaction(Order $order);
}