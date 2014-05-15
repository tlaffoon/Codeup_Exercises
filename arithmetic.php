<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a + $b) . PHP_EOL ;
    } else {
        echo "ERROR: Both arguments must be numbers. Attempted $a + $b \n";
    }
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a - $b) . PHP_EOL ;
    } else {
        echo "ERROR: Invalid input. Attempted $a - $b \n";
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a * $b) . PHP_EOL ;
    } else {
        echo "ERROR: Invalid input. Attempted $a * $b \n";
    }
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
    	echo ($a / $b) . PHP_EOL ;
    } else {
        echo "ERROR: Invalid input. Attempted $a / $b \n";
    }
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo ($a % $b) . PHP_EOL ;
    } else {
        echo "ERROR: Invalid input. Attempted $a % $b \n";
    }
}

add(7,4);
subtract(7,4);
multiply(7,4);
divide(7,0);
modulus(10,100);

?>