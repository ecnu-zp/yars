<?php
### Classes ####################################################################
class Waiter {
	// Variables
	private $name;
	private $totalTip;
	
	// Functions
	public function __construct($n = "John") {
		$name = $n;
		$totalTip = 0;
	}
	
	public function addToTip($amount) {
		$totalTip += $amount;
	}
	
	public function name() {
		return name;
	}
} 
################################################################################
