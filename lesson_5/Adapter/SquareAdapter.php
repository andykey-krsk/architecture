<?php


class SquareAdapter implements ISquare
{
    private $squareAreaLib;

    public function __construct(SquareAreaLib $squareAreaLib)
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    public function squareArea(float $sideSquare)
    {
        $diagonal = $sideSquare * (sqrt(2));
        return  $this->squareAreaLib->getSquareArea($diagonal);
    }
}