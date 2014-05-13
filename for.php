<?php

fwrite(STDOUT, 'Please input your starting number: ' . PHP_EOL) ;
$n1 = trim(fgets(STDIN));

fwrite(STDOUT, 'Please input your ending number: ' . PHP_EOL) ;
$n2 = trim(fgets(STDIN));

fwrite(STDOUT, 'Please choose your integer of increment: ' . PHP_EOL) ;
$n3 = trim(fgets(STDIN));

if (empty($n3)) { $n3 = 1; }

if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3)) {
	if ($n1 < $n2) { 
		for ($x=$n1; $x<=$n2; $x+=$n3) {
			echo "\$x is equal to {$x}" . PHP_EOL ;
		}
	} else echo "Your starting number needs to be less than your ending number.\n" . PHP_EOL ;	
} else echo "Please enter all numeric values." . PHP_EOL ;

