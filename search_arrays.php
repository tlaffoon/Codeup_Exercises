<?php

$fullnames = [
'Marc Andreessen', 
'Tim Berners-Lee', 
'Len Bosack', 
'Steve Case', 
'Vint Cerf', 
'Len Kleinrock', 
'J.C.R. Licklider', 
'Bob Metcalfe', 
'Ray Tomlinson'
];

// $result = array_search('Sammy', $fullnames);

// var_dump($result);

// $result2 = array_search('Len Bosack', $fullnames);

// var_dump($result2);

// if (array_search('Sammy', $fullnames)) {
// 	echo "I found Sammy.\n" ;
// } else { 
// 	echo "Sammy wasn't found.\n"; 
// }

// if (array_search('Len Bosack', $fullnames)) {
// 	echo "Found Lenny!\n";
// } else { 
// 	echo "Can't find Lenny.\n"; 
// }

// first names

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$names2 = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// $diff = array_diff($names, $names2);

// print_r($diff);

// $merged = array_merge($names, $names2);

// print_r($merged);

// echo count(sort(array_unique($merged))); 

function compare($array1, $array2) {
	$count = count(sort(array_unique(array_merge($array1, $array2))));
	return $count;
}

echo "The number of elements these arrays have in common is: " . compare($names, $names2) . " \n";
