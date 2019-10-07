#!/usr/bin/php
<?php
	if ($argc != 2)
		exit ();
	$str = (preg_replace("/\s\s+/", " ", $argv[1]));
	print (trim($str));
	print ("\n");
?>
