<?php
$numbers = [10, 30, 20];

$max = $numbers[0];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

echo  $max;
