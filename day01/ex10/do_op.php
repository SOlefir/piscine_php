#!/usr/bin/php
<?php
	if ($argc != 4) 
	{
		print "Incorrect Parameters\n";
		exit();
	}
	else if (trim($argv[2]) == "+")
		print ($argv[1] + $argv[3]);
	else if (trim($argv[2]) == "-")
		print ($argv[1] - $argv[3]);
	else if (trim($argv[2]) == "*")
		print ($argv[1] * $argv[3]);
	else if (trim($argv[2]) == "/")
		print ($argv[1] / $argv[3]);
	else if (trim($argv[2]) == "%")
		print ($argv[1] % $argv[3]);
	print "\n";
?>
