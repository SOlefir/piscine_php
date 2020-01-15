<?php
	class Jaime extends Lannister {
		public function sleepWith($class){
			switch (get_class($class)){
				case "Tyrion":
					echo "Not even if I'm drunk !\n";
					break ;
				case "Sansa":
					echo "Let's do this.\n";
					break ;
				case "Cersei":
					echo "With pleasure, but only in a tower in Winterfell, then.\n";
					break ;
			}
		}
	}
?>