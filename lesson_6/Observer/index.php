<?php
include "config/config.php";
include "config/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$user1 = new Applicant('Вася');
$user1->toWatch();
$user2 = new Applicant('Петя');
$user2->toWatch();
$user3 = new Applicant('Жора');
$user3->toWatch();
$user4 = new Applicant('Вова');
$user4->toWatch();

HeadHunter::getInstance()->addVacancy('PHP-программист');

$user1->unWatch();

echo "------------------------------------------------------------------".PHP_EOL;

HeadHunter::getInstance()->addVacancy('PHP-программист cо стажем');