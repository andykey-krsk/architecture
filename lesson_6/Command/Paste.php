<?php


class Paste implements ICommand
{
    protected $start;
    protected $clipboard;

    public function __construct($start)
    {
        $this->clipboard = Clipboard::getInstance();
        $this->start = $start;
    }

    public function execute(string $text): string
    {
       return mb_substr($text, 0, $this->start) . $this->clipboard->get() . mb_substr($text, $this->start);
    }

    public function unExecute(string $text): string
    {
        return mb_substr($text, 0, $this->start) . mb_substr($text, ($this->start + mb_strlen($this->clipboard->get())));
    }
}