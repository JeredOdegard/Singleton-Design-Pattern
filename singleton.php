<?php
	class ThereCanOnlyBeOne {
		private static $instance;
		
		private function __constructor() {}
		public static function getInstance() {
			if (empty(self::$instance)) {
				self::$instance = new ThereCanOnlyBeOne();
			}
			return self::$instance;
		}
	}
?>