<?php

function arraySort(array $array, $key = 'sort', $sort = SORT_ASC): array
{
	usort($array, function($a, $b) use ($key, $sort){
		return $sort == SORT_ASC ? $a[$key] <=> $b[$key] : -($a[$key] <=> $b[$key]);
	});
	return $array;
}

?>
