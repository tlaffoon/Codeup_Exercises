<?php

	$number = rand(1, 100);
	//echo "$number\n";

	fwrite(STDOUT, "Hello!  What is your name?\n") && 
		exec('say "Hello!  What is your name?"');
		$name = fgets(STDIN);

	fwrite(STDOUT, "Hey there, $name") && exec('say "Hey there, $name"');
	fwrite(STDOUT, "Think you can guess my number?\n") && exec('say "Think you can guess my number?"');

	$guess = fgets(STDIN);

while ($guess != $number) { 

	if ($guess < $number) { 
		fwrite(STDOUT, "Higher...") && exec('say "Higher!"'); 
			  $guess = fgets(STDIN); 
			} 
		elseif ($guess > $number) { 
			fwrite(STDOUT, "Lower...") && exec('say "Lower!"'); 
				  $guess = fgets(STDIN); 
				}
}

if ($guess == $number) { 
	fwrite(STDOUT, "Wow!  What a guesser you are.  Good job!\n") &&
		exec('say "Wow!  What a guesser you are.  Good job!"'); 
	}
