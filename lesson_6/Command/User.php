<?php


class User
{
    private string $text;
    private array $commands;
    private int $currentCommandNumber = 0;

    public function getText()
    {
        return $this->text;
    }

    public function readFile($file)
    {
        $this->text = file_get_contents($file, true);
    }

    public function saveFile($file)
    {
        fopen($file, "r+");
        fwrite($file, $this->text);
        fclose($file);
    }

    public function action(ICommand $command)
    {
        $this->text = $command->execute($this->text);
        if (get_class($command) != 'Copy') {
            $this->commands[] = $command;
            $this->currentCommandNumber++;
        }
    }

    public function undo(int $levels)
    {
        echo "Отменить $levels операций" . PHP_EOL;

        for ($i = 0; $i < $levels; $i++) {
            if ($this->currentCommandNumber > 0) {
                $this->text = $this->commands[--$this->currentCommandNumber]->unExecute($this->text);
            }
        }
    }

    public function redo(int $levels)
    {
        echo "Вернуть $levels операций" . PHP_EOL;

        for ($i = 0; $i < $levels; $i++) {
            if ($this->currentCommandNumber < count($this->commands)) {
                $this->commands[$this->currentCommandNumber++]->execute($this->text);
            }
        }
    }
}