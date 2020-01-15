<?php
	class NightsWatch {

		public $_army;

		public function __construct(){
			$this->_army = [];
		}
		public function recruit($watcher){
			if ($watcher instanceof IFighter)
				array_push($this->_army, $watcher);
		}
		public function fight(){
			foreach ($this->_army as $each => $watcher) {
				$watcher->fight();
			}
		}
	}
?>