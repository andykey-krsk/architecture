<?php

class Notifier implements INotifier
{
    public $notification;
    public $email, $SMS, $telegram = false;

    public function sendNotification()
    {
        return $this->notification;
    }
}