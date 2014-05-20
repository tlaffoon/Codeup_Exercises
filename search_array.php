<?php

$names1 = ['Dana', 'Tina', 'Mike', 'Amy', 'Adam', 'George', 'Steven', 'Dale', 'Steve'];
$names2 = ['Tina', 'Dean', 'Amy', 'Mel', 'Michael', 'George', 'Steve', 'Freddie'];

/* ----------------------------------------------- */
// One method to solve this exercise.

function array_has_value($needle, $haystack) {

	if (array_search($needle, $haystack)) {
		return false;
	} 
	else
	{
		return true;
	}

}

// var_dump(array_has_value('Bob', $names));

function array_common_count($array1, $array2) {

	$count = 0;

	foreach ($array1 as $key => $name) {
		if (!array_has_value($name, $array2)) {
			$count++;
		} else echo "$name not found.\n";
	}
	
	return $count;
}

// var_dump(array_common_count($names, $names2));

$number = array_common_count($names1, $names2);

echo "The number of names in common is: $number\n" ;
echo "-----------------------------------------\n" ;
/* ----------------------------------------------- */
// Another method.

function merge_and_count($array1, $array2) {

$merged_and_counted = array_count_values(array_merge($array1, $array2));

foreach ($merged_and_counted as $name => $count) {
	if ($count >= 2) {
		$dupNamesCount++;
		$dupNameList .= "\n$name appeared {$count} times.";
	}
}
	return "There are {$dupNamesCount} duplicate names: {$dupNameList}\n";
}

echo merge_and_count($names1, $names2);