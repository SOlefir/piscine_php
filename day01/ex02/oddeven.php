#!/usr/bin/php
<?php
while (1)
{
	print ("Enter a number: ");
	$fd = fopen ( 'php://stdin', 'r' );
	$arg = trim(fgets($fd));
	while (feof($fd))
	{
		print("^D\n");
		exit();
	}
	if (!is_numeric ($arg))
		print ("'$arg' is not a number\n");
	else if ($arg % 2 == 0)
		print ("The number $arg is even\n");
	else
		print ("The number $arg is odd\n");
}
?> 
