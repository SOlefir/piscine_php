<?php
	function get_user(&$all_users, $login){
		foreach ($all_users as $key => $value) {
			if ($value["login"] == $login){
				return ($key);
			}
		}
		return (-1);
	}
	if ($_POST["submit"] == "OK"){
		if ($_POST["login"] || $_POST["oldpw"] || $_POST["newpw"] || file_exists("../private/passwd")){
  			$passwd = hash("whirlpool", $_POST["oldpw"]);
			$str = file_get_contents("../private/passwd");
			$all_users = unserialize($str);
			$user = get_user($all_users, $_POST["login"]);
			if ($user >= 0){
				if ($all_users[$user]["passwd"] == $passwd){
					$all_users[$user]["passwd"] = hash("whirlpool", $_POST["newpw"]);
					file_put_contents("../private/passwd", serialize($all_users));
					echo "OK\n";
					exit (0);
				}
			}
		}
	}
	echo "ERROR\n";