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
        $diagonal = $circumference / M_PI;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }
}