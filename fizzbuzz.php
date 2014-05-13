<?php
		fwrite(STDOUT, 'Please enter a minimum, then maximum number: ' . PHP_EOL);
		$min = (int) fgets(STDIN);
		$max = (int) fgets(STDIN);

		for ($x=$min; $x<=$max; $x+=1) {
			
			if (!($x % 3) && !($x % 5) ) {
				echo "FizzBuzz" . PHP_EOL;
				$fbcount++;

			} elseif (!($x % 3)) {
				echo "Fizz" . PHP_EOL;
				$fcount++;

			} elseif (!($x % 5)) {
				echo "Buzz" . PHP_EOL;
				$bcount++;

			} else echo "{$x}" . PHP_EOL ;
		}

		echo "\n";
		echo "\"Fizz\" - {$fcount} occurrences.\n";
		echo "\"Buzz\" - {$bcount} occurrences.\n";
		echo "\"FizzBuzz\" - {$fbcount} occurrences."  . PHP_EOL ;