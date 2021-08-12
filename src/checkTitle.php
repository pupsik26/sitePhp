<?php

function checkTitle($arr)
{
	//var_dump($arr);
	$url = $_SERVER["REQUEST_URI"];
	foreach ($arr as $value) {
		if ($value['path'] == $url) {
			return $value['title'];
		}
	}
	return 'Project - ведение списков';
}

?>