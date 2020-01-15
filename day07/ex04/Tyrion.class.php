<?php
	class Tyrion extends Lannister {
		public function sleepWith($class){
			if ($class instanceof Lannister)
				echo "Not even if I'm drunk !\n";
			else if (get_class($class) == "Sansa")
				echo "Let's do this.\n";
		}
	}
?>