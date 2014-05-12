<?php

$age = '17';
$is_adult = $age >= 18 ? true : false;

var_dump($is_adult);

$a = 5;
$b = 10;

if ($a == $b) {
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}

// Example ternary 
$a = 5;
$b = 10;

echo ($a == $b) ? "$a is equal to $b" : "$a is not equal to $b";