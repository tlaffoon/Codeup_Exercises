<?php

if ($argc > 0) {

$a = $argv[1];
$b = $argv[2];

echo 'A, S, D, M, R';
$operation = trim(fgets(STDIN));

switch ($operation) {
	case 'A':
		echo add($a, $b);
		break;

	case 'S':
		echo subtract($a, $b);
		break;

	case 'D':
		echo divide($a, $b);
		break;

	case 'M':
		echo multiply($a, $b);
		break;

	case 'R':
		echo remainder($a, $b);
		break;
	
	default:
		echo "default \n";
		break;
} else
	echo add();
	echo subtract();
	echo multiply();
	echo divide();
	echo remainder();

/*		---------------------------------		*/

function check($a, $b) {
  if (is_numeric($a) && is_numeric($b)) {
	return true;
	  } else 
		echo "ERROR: Invalid input. \$a = $a, \$b = $b" . PHP_EOL;
		return false;
}

function add($a, $b) {
	if (check($a, $b)) {
	return ($a + $b) . PHP_EOL;
   }
}

function subtract($a, $b) {
	if (check($a, $b)) {
	return ($a - $b) . PHP_EOL;
	}
}

function multiply($a, $b) {
	if (check($a, $b)) {
	return ($a * $b) . PHP_EOL;
	}
}

function remainder($a, $b) {
	if (check($a, $b)) {
	return ($a % $b) . PHP_EOL;
	}
}	

function divide($a, $b) {
    if (check($a, $b)) {
    } elseif ($b != 0) {
        return ($a / $b) . PHP_EOL;
    } else echo "Man, you aren't trying to divide by zero - are you?" . PHP_EOL;
}

