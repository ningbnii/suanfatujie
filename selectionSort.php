<?php
function findSmallest($arr){
	$smallest = $arr[0];
	$smallestIndex = 0;
	foreach ($arr as $key => $value) {
		if($value < $smallest){
			$smallest = $value;
			$smallestIndex = $key;
		}
	}
	return $smallestIndex;
}

function selectionSort($arr){
	$newArr = [];
	foreach ($arr as $key => $value) {
		$smallest = findSmallest($arr);
		$newArr[] = $arr[$smallest];
		array_splice($arr, $smallest, 1);
	}
	return $newArr;
}

print_r(selectionSort([5,3,6,2,10]));