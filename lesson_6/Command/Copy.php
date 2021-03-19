<?php


class Copy extends EditorCommand
{

    public function execute(string $text): string
    {
        $copy = mb_substr($text, $this->start, ($this->end - $this->start));
        $this->clipboard->set($copy);
        return $text;
    }

    public function unExecute(string $text): string
    {
        $this->clipboard->get();
        return $text;
    }
}