<?php

class Notebook
{
    public $price;
    public $ram;
    public $manufacturer;

    public function __construct($price,$ram,$manufacturer)
    {
        $this->price = $price;
        $this->ram = $ram;
        $this->manufacturer = $manufacturer;
    }
}