<?php

include 'Notebook.php';

$manufacturer = ['Lenovo', 'Asus', 'Aser', 'Apple', 'Xiaomi','HP','Dell','MSI'];

$ram = ['4Gb', '6Gb', '8Gb', '12Gb', '16Gb'];

function randomPrice($min, $max, $step)
{
    return random_int(floor($min / $step), floor($max / $step)) * $step;
}

for ($i = 0; $i < 5000; $i++) {
    $notebooks[] = new Notebook(randomPrice(500, 1000, 100), $ram[random_int(0, 4)], $manufacturer[random_int(0, 7)]);
}

function megaSort($array)
{
    usort($array, function ($a,$b){
        $res = 0;

        $ramA = preg_replace('/Gb/', '', $a->ram);
        $ramB = preg_replace('/Gb/', '', $b->ram);

        if (($a->price != $b->price)){
            $res = ($a->price < $b->price) ? -1 : 1;
        }elseif ($ramA != $ramB){
            $res = ($ramA > $ramB) ? 1 : -1;
        }else{
            $compare = strcmp($a->manufacturer, $b->manufacturer);
            if ($compare !== 0) {
                $res = ($compare > 0) ? 1 : -1;
            }
        }

        return $res;
    });

    return $array;
}

$notebooks = megaSort($notebooks);

print_r($notebooks);