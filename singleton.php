<?php
	class ThereCanOnlyBeOne {
		private static $instance;
		
		private function __construct() {}
		public static function getInstance() {
			if (empty(self::$instance)) {
				self::$instance = new ThereCanOnlyBeOne();
			}
			return self::$instance;
		}
	}
	
	// Implementation
	$Singleton = ThereCanOnlyBeOne::getInstance();
?>