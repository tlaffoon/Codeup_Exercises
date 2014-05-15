<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a + $b) . PHP_EOL ;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a - $b) . PHP_EOL ;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a * $b) . PHP_EOL ;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a / $b) . PHP_EOL ;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a % $b) . PHP_EOL ;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

add(7,4);
subtract(7,4);
multiply(7,4);
divide(7,4);
modulus(10,100);

?>