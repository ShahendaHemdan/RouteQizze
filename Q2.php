<?php
$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}


for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = $rows; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}







echo "<hr>";








$rows = 5; 

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
for ($i = 5; $i >=1 ; $i--) {
    
    for ($j = $i; $j >= 1; $j--) {
        echo "* ";
    }
    echo "<br>";
}




echo "<hr>";






$rows = 3; 

for ($i = 1; $i <= $rows; $i++) {
    $numStars = 2 * $i - 1;
    for ($j = 1; $j <=$numStars; $j++) {
        
            echo "* ";
        }
    echo "<br>";
}

for ($i = $rows-1; $i >=1; $i--) {
    $numStars = 2 * $i - 1;
    for ($j = $numStars; $j >=1; $j--) {
        
            echo "* ";
        }
    echo "<br>";
}

?>
