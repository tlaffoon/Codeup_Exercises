<?php

$a = 5;
$b = 10;
$c = '10';

// Add an else clause to the next two statements
if ($a < $b) { echo "$a is less than $b\n"; }
  else "Here is an else clause.\n";

if ($b > $a) { echo "$b is greater than $a\n"; }
  else "Here is an else clause.\n";

// Shorten the next 2 statements into an if/else
if ($b >= $c) { echo "$b is greater than or equal to $c\n"; }
  else echo "$b is less than or equal to $c\n";

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b === $c) {
    echo "$b is identical to $c\n";
}

if ($b == $c) {
    echo "$b is equal to $c\n";
}

if ($b !== $c) {
    echo "$b is not identical to $c\n";
}

if ($b != $c) {
    echo "$b is not equal to $c\n";
}

?>