#!/usr/bin/php
<?php
	if ($argc < 2)
		exit (0);
	unset($argv[0]);
	foreach ($argv as $value)
		$str .= $value . " ";
	$array = explode(' ', trim($str));
	sort($array);
	foreach ($array as $i)
        print $i . "\n";
?>
