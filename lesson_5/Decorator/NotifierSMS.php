<?php

class NotifierSMS extends NotifierDecorator
{
    public function sendNotification()
    {
        return "Оповещение по SMS (" . parent::sendNotification() . ")";
    }

}