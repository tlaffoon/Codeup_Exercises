<?php

	$number = rand(1, 100);
	//echo "$number\n";

	fwrite(STDOUT, "Hello!  What is your name?\n");
	$name = fgets(STDIN);

	fwrite(STDOUT, "Hey there, $name");
	fwrite(STDOUT, "Think you can guess my number??\n");

	$guess = fgets(STDIN);

while ($guess != $number) { 

		if ($guess < $number) { fwrite(STDOUT, "Higher..."); $guess = fgets(STDIN); } 
		elseif ($guess > $number) { fwrite(STDOUT, "Lower..."); $guess = fgets(STDIN); }
			else { fwrite(STDOUT, "This always happens."); }	
}

if ($guess == $number) { fwrite(STDOUT, "Wow!  What a guesser you are.  Good job!\n"); }

/*	do { 

		echo "Ok; here we go - \n";

		if ($guess < $number) { fwrite(STDOUT, "Higher..."); }
			elseif ($guess > $number) { fwrite(STDOUT, "Lower..."); } 
			
	 }; while ($guess != $number) ;

	 echo "This is outside the do-while loop.\n" 
*/