<?php

$a = $argv[1];
$b = $argv[2];

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
    	echo "say what?";
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



fwrite(STDOUT, 'A, S, D, M, R' . PHP_EOL);
$operation = trim(fgets(STDIN));

switch ($operation) {
	case 'A':
		echo add($a, $b);
		break;

	case 'S':
		subtract($a, $b);
		break;

	case 'D':
		divide($a, $b);
		break;

	case 'M':
		multiply($a, $b);
		break;

	case 'R':
		remainder($a, $b);
		break;
	
	default:
		echo "default \n";
		break;
}

?>