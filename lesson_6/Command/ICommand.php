<?php


interface ICommand
{
    public function execute(string $text):string;

    public function unExecute(string $text):string;
}