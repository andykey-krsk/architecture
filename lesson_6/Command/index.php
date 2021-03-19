<?php
include "config/config.php";
include "config/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$user = new User();
$user->readFile('file.txt');

echo "Исходник: " . $user->getText() . PHP_EOL;

$user->action(new Copy(20,30));
echo "Копирование: " . $user->getText() . PHP_EOL;

$user->action(new Paste(0));
echo "Вставка: " . $user->getText() . PHP_EOL;

$user->action(new Cut(20,30));
echo "Вырезать: " . $user->getText() . PHP_EOL;

$user->action(new Paste(0));
echo "Вставка: " . $user->getText() . PHP_EOL;

$user->undo(3);
echo "Всё отменили: " . $user->getText() . PHP_EOL;












/*function myCopy($string, $start, $end)
{
    return mb_substr($string, $start, $end-$start);
}

function myDel($string, $start, $end)
{
    return mb_substr($string, 0, $start) . mb_substr($string, $end, strlen($string)-$end);
}

function myPaste($string, $position, $buffer)
{
    return mb_substr($string, 0, $position) . $buffer .  mb_substr($string, $position, strlen($string)-$position);
}

function myCut($string, $start, $end)
{
    $buffer = myCopy($string, $start, $end);
    return myDel($string, $start, $end) . PHP_EOL . $buffer;
}

echo "Результат: " . $file;

echo PHP_EOL;

echo "Результат: " . myCopy($file,$start,$end);

echo PHP_EOL;

echo "Результат: " . myDel($file,$start,$end);

echo PHP_EOL;

echo "Результат: " . myPaste($file,20,' ttt ');

echo PHP_EOL;

echo "Результат: " . myCut($file,$start,$end);

echo PHP_EOL;*/

/*$buffer = mb_substr($file, $start, $len);
$result = mb_substr($file, 0, $start) . mb_substr($file, $end, strlen($file));;
echo $result;

echo PHP_EOL;

echo $buffer;*/

//$result = array_merge($arr1, $arr2);

//echo $file;

//echo mb_str_split($file)[3];