<?php


class Clipboard
{
    private static $instance = null;
    private $text;

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function get()
    {
        return $this->text;
    }

    public function set($text)
    {
        $this->text = $text;
    }

    private function __construct() {}
    private function __clone() {}
    //private function __wakeup() {}

}