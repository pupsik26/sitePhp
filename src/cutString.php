<?php

function cutString($line, $length = 15, $append = '...') : string
{
	if (strlen($line) < $length) {
		return $line;
	}
	$line = substr($line, 0, 12);
	return ($line . $append);
};

?>

