<?php


abstract class EditorCommand implements ICommand
{
    protected $start;
    protected $end;
    protected $clipboard;

    public function __construct($start, $end)
    {
        $this->clipboard = Clipboard::getInstance();
        $this->start = $start;
        $this->end = $end;
    }

}