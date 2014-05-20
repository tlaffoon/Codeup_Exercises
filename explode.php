<?php

// explode turns a string into an array.

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicists_array = explode(', ', $physicists_string);


echo "$physicists_string\n";
print_r($physicists_array);

echo "{$physicists_array[array_rand($physicists_array)]}\n";