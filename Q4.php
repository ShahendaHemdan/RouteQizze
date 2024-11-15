<?php
$array = [2,4,3,1,6,7,5,8,0,9];
$count = count($array);
$sum=0;
for ($i = 0; $i < $count; $i++) {
    $sum += $array[$i]; 
}

$average = $sum / $count; 
echo "Average: $average";