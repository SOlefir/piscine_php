#!/usr/bin/php
<?php
	function ft_is_sort($tab)
	{
		$sorted_tab = $tab;
		sort($sorted_tab);
		foreach($sorted_tab as $i => $value)
			if($value != $tab[$i])
	  			return (false); 
		return (true);
	}
?>