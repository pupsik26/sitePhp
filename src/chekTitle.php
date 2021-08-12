<?php

function chekTitle($str)
{
	for($i = 0; $i < count($mainMenu); $i++) {
		if ($mainMenu[$i]['path'] == $str) {
			return $mainMenu[$i]['title'];
		}
	}
}
