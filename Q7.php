<?php

$oldDate = '2012-12-21';

$date = new DateTime($oldDate);

// Increment the date by one month
$date->modify('+1 month');

$newDate = $date->format('Y-m-d');

// Print the expected output
echo $newDate;
?>