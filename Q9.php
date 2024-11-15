<?php
$string = "Hello, My name is Shahenda and I am learning PHP";

$search = "PHP";

if (preg_match("/" . preg_quote($search, '/') . "/", $string)) {
    echo "The string '$search' is found ";
} else {
    echo "The string '$search' is not found ";
}
?>