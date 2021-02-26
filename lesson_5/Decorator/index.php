<?php
include "../config.php";
include "../Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

function testDecorator(INotifier $notifier)
{
    echo "Рзультат: " . $notifier->sendNotification();
}

$notifier = new Notifier();
$notifier->notification = "Шев всё пропало! Гипс снимают! Клиент уезжает!";
$notifier->email = true;
$notifier->SMS = true;
$notifier->telegram = false;

$stack = $notifier;

if ($notifier->telegram){
    $stack = new NotifierTelegram($stack);
}

if ($notifier->SMS){
    $stack = new NotifierSMS($stack);
}

if ($notifier->email){
    $stack = new NotifierEmail($stack);
}

testDecorator($stack);
echo PHP_EOL;
echo "--------------------------------------------------------";
echo PHP_EOL;


testDecorator($notifier);
echo PHP_EOL;

testDecorator(new NotifierTelegram($notifier));
echo PHP_EOL;

testDecorator(new NotifierSMS(new NotifierEmail(new NotifierTelegram($notifier))));
echo PHP_EOL;