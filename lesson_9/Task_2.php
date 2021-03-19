<?php

function permutations($string)
{
    $len_string = strlen($string);
    if ($len_string == 1) {
        return str_split($string, 1);
    }

    $word = str_split($string, 1);
    $array[] = implode('', $word);

    $shift = 0;
    while ($shift < $len_string - 1) {
        for ($i = 0; $i < $len_string; $i++) {
            if ($i < $len_string - 1) {
                $temp = $word[$i];
                $word[$i] = $word[$i + 1];
                $word[$i + 1] = $temp;
                $array[] = implode('', $word);
            }
        }
        $shift++;
    }

    $array = array_unique($array);
    sort($array);
    return $array;
}

print_r(permutations('a'));
print_r(permutations('ab'));
print_r(permutations('aabb'));