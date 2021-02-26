<?php


class NotifierEmail extends NotifierDecorator
{
    public function sendNotification()
    {
        return "Оповещение по электронной почте (" . parent::sendNotification() . ")";
    }
}