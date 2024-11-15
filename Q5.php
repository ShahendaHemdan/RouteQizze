<?php

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$oddArray = [];


for ($i = 0; $i < count($array); $i++) {

    if ($array[$i] % 2 !== 0) {
        $oddArray[] = $array[$i];
    }
}

print_r($oddArray);
