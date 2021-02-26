<?php


class NotifierDecorator implements INotifier
{
    protected $notifier;

    public function __construct(INotifier $notifier)
    {
        $this->notifier = $notifier;
    }

    public function sendNotification()
    {
        return $this->notifier->sendNotification();
    }
}