<?php

$list = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// Output variable type only.
foreach ($list as $item) {
	if (is_null($item)) { echo "null"			. PHP_EOL ; }
	elseif (is_int($item)) { echo "integer" 	. PHP_EOL ; }
	elseif (is_bool($item)) { echo "boolean" 	. PHP_EOL ; }
	elseif (is_array($item)) { echo "array" 	. PHP_EOL ; }
	elseif (is_string($item)) { echo "string" 	. PHP_EOL ; }
}

// Output values that are scalar.
foreach ($list as $item) {
	if (is_scalar($item)) { echo "{$item}"	. PHP_EOL ; }
 }

// Output all values from all list items, including arrays.
foreach ($list as $item) {
	if (is_array($item)) { 
		foreach ($item as $x) {
			echo "{$x}" . PHP_EOL ;
		}
	} else echo "{$item}" . PHP_EOL ;
}
