#!/usr/bin/php
<?php
	if ($argc < 2)
		exit (0);
	unset($argv[0]);
	foreach ($argv as $value)
		$str .= $value . " ";
	$array = explode(' ', trim($str));
	natcasesort($array, SORT_NAT);
	foreach ($array as $key => $value)
	{
		$i = ord($value);
		if (($i >= 65 && $i <= 90) ||
			($i >= 97 && $i <= 122))
			$alpha .= $value . " ";
		else if ($i >= 48 && $i <= 57)
			$nbr .= $value . " ";
		else if (($i >= 33 && $i <= 47) ||
		($i >= 91 && $i <= 96) || ($i >= 123 && $i <= 126))
			$other .= $value . " ";
	}
	$alpha = explode(' ', trim($alpha));
	$nbr = explode(' ', trim($nbr));
	$other = explode(' ', trim($other));
	sort_spec($alpha);
	sort_spec($nbr);
	sort_spec($other);
	foreach ($alpha as $i)
        print $i . "\n";
    foreach ($nbr as $i)
        print $i . "\n";
    foreach ($other as $i)
        print $i . "\n";
?>
