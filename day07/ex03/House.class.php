<?php
	abstract class House {

		abstract public function getHouseName();
		abstract public function getHouseMotto();
		abstract public function getHouseSeat();

		public $name = self::getHouseName();
		public function introduce(){
			echo "House " . $this->name . " of " . $this->getHouseSeat() . " : " . '"' . $this->getHouseMotto() . '"' . PHP_EOL;
		}
	}
?>