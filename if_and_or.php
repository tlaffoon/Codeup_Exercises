<?php

$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

// if $x is greater than 0 OR less than 10, echo the result as a sentence "$x is greater than 0 OR less than 10".

// repeat the if statement for $y and $z.

// If $x is greater than 0 AND less than 10, echo the result as a sentence "$x is greater than 0 AND less than 10".

// repeat the if statement for $y and $z.

echo "$x < $y < $z\n";

if ($x > 0 || $x < 10) { echo "$x is greater than 0 OR less than 10\n"; }

if ($y > 0 || $y < 10) { echo "$y is greater than 0 OR less than 10\n"; }

if ($z > 0 || $z < 10) { echo "$z is greater than 0 OR less than 10\n"; }

if ($x > 0 && $x < 10) { echo "$x is greater than 0 AND less than 10\n"; }

if ($y > 0 && $y < 10) { echo "$y is greater than 0 AND less than 10\n"; }

if ($z > 0 && $z < 10) { echo "$z is greater than 0 AND less than 10\n"; }


/*
0 < 5 < 10
0 is greater than 0 OR less than 10
5 is greater than 0 OR less than 10
10 is greater than 0 OR less than 10
5 is greater than 0 AND less than 10
*/