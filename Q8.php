<?php
$Date = new DateTime();

$Date->modify('-1 month');

$previousMonthNumber = $Date->format('n'); 

echo  $previousMonthNumber;
?>