<?php
function isPrime($number) {
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    
    return true;
}

// Example usage
$test = 29; 
if (isPrime($test)) {
    echo "$test is a prime number.";
} else {
    echo "$test is not a prime number";
}
?>