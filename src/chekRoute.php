<?php

function checkRoute(array $arr) : bool
{
	$pathRoute = $_SERVER["REQUEST_URI"];
	return in_array($pathRoute, $arr);
}

?>
