<?php


class Cut extends EditorCommand
{

    public function execute(string $text): string
    {
        $this->clipboard->set(mb_substr($text, $this->start, ($this->end - $this->start)));
        return mb_substr($text, 0, $this->start) . mb_substr($text, $this->end);
    }

    public function unExecute(string $text): string
    {
        return mb_substr($text, 0, $this->start) . $this->clipboard->get() . mb_substr($text, $this->start);
    }
}