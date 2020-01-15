<?php
	class Color {

		public $red;
		public $green;
		public $blue;
		static $verbose = TRUE;

		public function __construct($array){
			if (static::$verbose == TRUE){
				echo "a huli\n";
			}
			$this->red = $array["red"];
			$this->green = $array["green"];
			$this->blue = $array["blue"];
			echo "red:$this->red, green:$this->green, blue:$this->blue\n";
		}
		public function __toString(){
			return ('red:' . $this->red . ', green:' . $this->green . ', blue:' . $this->blue);
		}
		function __destruct(){
			if (static::$verbose == TRUE){
				echo "destruct\n";
			}
		}
	}
?>

<?php
	require_once 'Color.class.php';

	$arr = array( "red" => 1, "green" => 2, "blue" => 3);
	$yo = new Color($arr);
	echo $yo . "\n";
?>