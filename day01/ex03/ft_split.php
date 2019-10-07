#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$str = preg_replace("/\s\s+/", " ", $str);
		$array = array_filter(explode(' ', $str));
		sort($array);
		return ($array);
	}
?>
