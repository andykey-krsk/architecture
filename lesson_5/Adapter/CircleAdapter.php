<?php


class CircleAdapter implements ICircle
{

    private $circleAreaLib;

    public function __construct(CircleAreaLib $circleAreaLib)
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    public function circleArea(float $circumference)
    {
        return $this->circleAreaLib->getCircleArea($circumference);
    }
}