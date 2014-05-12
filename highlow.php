<?php
	
// -------------------------------------------------- //

// Set initial random number between 1 and 100.
	$number = rand(1, 100);

// -------------------------------------------------- //

// Prompt for user name.
	fwrite(STDOUT, "Hello!  What is your name?\n") && exec("say 'Hello!  What is your name?'");

// Get user name from user input.
	$name = fgets(STDIN);

// -------------------------------------------------- //

// Output greeting and prompt for action.
	fwrite(STDOUT, "Hey there, $name\n") && exec("say 'Hey there, $name'");
	fwrite(STDOUT, "I'm thinking of a number between 0 and 100. Think you can guess my number?\n") 
		&& exec('say "Think you can guess my number?"');

// -------------------------------------------------- //

// Get User Input for first guess.
	$guess = fgets(STDIN);

// -------------------------------------------------- //

// Initialize iterative count outside of main while loop.
	$count = 1;

// -------------------------------------------------- //

// Begin Main Loop
	while ($guess != $number) { 

// increment the count each time through loop.
  		$count += 1;

// Check to see if guess is higher than number, then prompt.
	if ($guess < $number) { 
		fwrite(STDOUT, "Higher...\n") && exec('say "Higher!"'); 
		
		// Prompt user for another guess.
		$guess = fgets(STDIN); 
	} 

// Check to see if guess is lower than number, then prompt.
	elseif ($guess > $number) { 
		fwrite(STDOUT, "Lower...\n") && exec('say "Lower!"'); 
		
		// Prompt user for another guess.
		$guess = fgets(STDIN);
	}
}

// -------------------------------------------------- //

// Once the guess matches the number, the main while loop exits and this code runs.
if ($guess == $number) { 
	fwrite(STDOUT, "Wow!  You guessed my number in $count tries.  Good job!\n") &&
		exec("say 'Wow!  You guessed my number in $count tries.  Good job!'\n"); 
	}

// -------------------------------------------------- //
