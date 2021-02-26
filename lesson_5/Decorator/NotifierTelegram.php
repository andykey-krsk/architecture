<?php


class NotifierTelegram extends NotifierDecorator
{
public function sendNotification()
{
    return "Оповещение через Телеграм (" . parent::sendNotification() . ")";
}
}