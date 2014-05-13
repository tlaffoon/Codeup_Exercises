<?php

		for ($x=0; $x<=100; $x+=1) {
			if (($x % 3) == 0 && ($x % 5) == 0) {
				echo "FizzBuzz" . PHP_EOL;
			} elseif (($x % 3) == 0) {
				echo "Fizz" . PHP_EOL;
			} elseif (($x % 5) == 0) {
				echo "Buzz" . PHP_EOL;
			} else echo "{$x}" . PHP_EOL ;
		}