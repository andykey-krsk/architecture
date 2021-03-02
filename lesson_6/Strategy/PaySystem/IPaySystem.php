<?php

interface IPaySystem
{
    public function transaction(Order $order);
}