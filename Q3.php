<?php
$array = [2,4,3,1,6,7,5,8,0,9];
$count = count($array);

for ($i = 0; $i <$count - 1; $i++) {
    $min_index = $i;
    for ($j = $i + 1; $j < $count; $j++) {
        if ($array[$j] < $array[$min_index]) {
            $min_index = $j;
        }
    }
    $temp = $array[$i];
    $array[$i] = $array[$min_index];
    $array[$min_index] = $temp;
}

echo "Sorted in asc: ";
print_r($array);

echo "<hr>";

for ($i = 0; $i < $count- 1; $i++) {
    $max_index = $i;
    for ($j = $i + 1; $j <$count; $j++) {
        if ($array[$j] > $array[$max_index]) {
            $max_index = $j;
        }
    }
    $temp = $array[$i];
    $array[$i] = $array[$max_index];
    $array[$max_index] = $temp;
}

echo "Sorted in dsc: ";
print_r($array);