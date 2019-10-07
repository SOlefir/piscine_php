<?php
	function unique($str, $login){
		$arr = unserialize($str);
		foreach ($arr as $value) {
			if ($value["login"] == $login){
				return (0);
			}
		}
		return ($arr);
	}
	if ((!$_POST["login"] || !$_POST["passwd"]) && $_POST["submit"] == "OK") {
		echo "ERROR\n";
		exit (1);
	}
	if ($_POST["login"] && $_POST["submit"] && $_POST["submit"] == "OK"){
		if (!file_exists("../private")){
			mkdir("../private");
		}
		if (!file_exists("../private/passwd")){
			$all_users = [];
		}
		else if (!($all_users = unique(file_get_contents("../private/passwd"), $_POST["login"]))){
			echo "ERROR\n";
			exit (1);
		}
		$user = ["login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"])];
		array_push($all_users, $user);
		file_put_contents("../private/passwd", serialize($all_users));
		echo "OK\n";
	}
?>