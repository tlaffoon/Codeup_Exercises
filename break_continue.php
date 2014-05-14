<?php

// Label even numbers and continue the loop.
for ($num = 0; $num <= 100; $num++) {
    echo $num . "\n";
    if ($num % 2) {
        continue;
    }
    echo "^ that is an even number.\n";
}

// Break after hitting 10.
for ($num = 0; $num <= 100; $num++) {
    echo $num . "\n";
    if ($num == 10) {
        break;
    }
}