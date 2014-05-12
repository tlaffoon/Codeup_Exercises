<?php


fwrite(STDOUT, 'Please input your starting number: ' . PHP_EOL) ;
$n1 = (int) fgets(STDIN);

fwrite(STDOUT, 'Please input your ending number: ' . PHP_EOL) ;
$n2 = (int) fgets(STDIN);

fwrite(STDOUT, 'Please choose your integer of increment: ' . PHP_EOL) ;
$n3 = (int) fgets(STDIN);

if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3)) {

	for ($x=$n1; $x<=$n2; $x+=$n3) {
		echo "\$x is equal to {$x}\n" ;
	}
}