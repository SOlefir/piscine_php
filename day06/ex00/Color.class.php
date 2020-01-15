<?php
class Color
{
	public $red;
	public $green;
	public $blue;
	static $verbose = FALSE;
	public function __construct($color)
	{
		if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
			$this->red = $color['red'];
			$this->green = $color['green'];
			$this->blue = $color['blue'];
		} else if (isset($color['rgb'])) {
			$this->red = ($color['rgb'] >> 16) & 255;
			$this->green = ($color['rgb'] >> 8) & 255;
			$this->blue = $color['rgb'] & 255;
		}
		if (self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
	}
	public static function doc()
	{
		return (file_get_contents("Color.doc.txt"));
	}
	function __destruct()
	{
		if (self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}
	public function add($color)
	{
		$new_red = $this->red + $color->red;
		$new_green = $this->green + $color->green;
		$new_blue = $this->blue + $color->blue;
		return (new Color(['red' => $new_red, 'green' => $new_green, 'blue' => $new_blue]));
	}
	public function sub($color)
	{
		$new_red = $this->red - $color->red;
		$new_green = $this->green - $color->green;
		$new_blue = $this->blue - $color->blue;
		return (new Color(['red' => $new_red, 'green' => $new_green, 'blue' => $new_blue]));
	}
	public function mult($nbr)
	{
		$new_red = $this->red * $nbr;
		$new_green = $this->green * $nbr;
		$new_blue = $this->blue * $nbr;
		return (new Color(['red' => $new_red, 'green' => $new_green, 'blue' => $new_blue]));
	}
	public function __toString()
	{
		return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
	}
}