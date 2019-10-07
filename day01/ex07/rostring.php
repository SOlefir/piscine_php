#!#!/usr/bin/php
<?php
	if ($argc < 2)
		exit (0);
	$arr = explode(' ', trim($argv[1]));
	$first_w = $arr[0];
	unset($arr[0]);
	foreach ($arr as $i)
        $str .= $i . " ";
   	$str .= $first_w;
   	$str = trim($str);
	print ("$str\n");
?>
