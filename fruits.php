<?php

// Create an array of fruits

$fruits = ['banana', 'apple', 'orange', 'strawberry', 'mango'] ;

// Write a for loop that prints the fruits

for ($i=0; $i < count($fruits); $i++) { 
	echo "{$fruits[$i]}" . PHP_EOL ;
}

// Write a foreach loop that prints the fruits

foreach ($fruits as $fruit) {
	echo "{$fruit}" . PHP_EOL ;
}

// Modify the array so that "fruit name" => "color"

$fruits = 
[	'banana' => YELLOW, 
	'apple' => RED, 
	'orange' => ORANGE, 
	'strawberry' => PINK, 
	'mango' => BLEH ] ;

// Print modified array using a foreach

foreach ($fruits as $key => $value) {
	echo "$key is $value" . PHP_EOL ;
}

