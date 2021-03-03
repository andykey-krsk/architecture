<?php

class Applicant implements IApplicant
{
    private string $name;
    private string $email = "user@mail.ru";
    private bool $watch = false;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        echo "Соискатель $this->name получил уведомление по электронной почте $this->email. Ссылка: $data" . PHP_EOL;
    }

    public function toWatch()
    {
        if (!$this->watch) {
            HeadHunter::getInstance()->register($this);
            $this->watch = true;
        } else {
            echo "Соискатель $this->name уже следит за вакансиями" . PHP_EOL;
        }
    }

    public function unWatch()
    {
        if ($this->watch) {
            HeadHunter::getInstance()->unRegister($this);
            $this->watch = false;
        }else{
            echo "Соискатель $this->name уже не следит за вакансиями" . PHP_EOL;
        }
    }
}