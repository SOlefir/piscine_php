#!/usr/bin/php
<?php
	if ($argc <= 1)
		exit (0);
	print (preg_replace('!\s+!', ' ', trim($argv[1])));
	print ("\n");
?>