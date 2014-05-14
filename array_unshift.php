<?php

$nums = ['one', 'two', 'three'] ;

foreach ($nums as $index => $num) {
	echo "$index $num\n" ;
}

array_unshift($nums,"");

unset($nums[0]);

foreach ($nums as $index => $num) {
	echo "$index $num\n" ;
}