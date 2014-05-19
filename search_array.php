<?php

$names = ['Dana', 'Tina', 'Mike', 'Amy', 'Adam', 'George', 'Steven', 'Dale', 'Steve'];
$names2 = ['Tina', 'Dean', 'Amy', 'Mel', 'Michael', 'George', 'Steve', 'Freddie'];

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

$number = array_common_count($names, $names2);

echo "The number of names in common is: $number\n" ;


/*
function list_unique($array1, $array2) {

	return array_unique(array_merge($array1, $array2));
}

$unique_names = list_unique($names, $names2);


function list_unique_names_and_counts($unique_names, $array1, $array2) {

// List unique names and counts.

	foreach ($unique_names as $unique_name) {

		if (array_has_value($unique_name, $array1)) {
			# code...
		}

		$unique_count = array_common_count($unique_name, $array1, $array2);
 		echo "$unique_name appears $unique_count times.\n";
 	} 
}

list_unique_names_and_counts($unique_names, $names, $names2);  */