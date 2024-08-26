<?php

$A = trim(fgets(STDIN));
$B = intval(trim(fgets(STDIN)));

$remainder = 0;

for ($i = 0; $i < strlen($A); $i++) {
    $digit = intval($A[$i]);
    $remainder = ($remainder * 10 + $digit) % $B;
}

echo $remainder . PHP_EOL;