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

class MenuItem {
	private $name;
	private $price;
	private $description;
	
	public function __construct($n, $p, $desc) {
		$name = $n;
		$price = $p;
		$description = $desc;
	}
}
################################################################################

### Script execution ###########################################################
if (__FILE__ == $argv[0]) {
	// Waiters array
	$waiters = array();
	
	// Menu array
	$menu = array();
}
################################################################################

$cody = new Waiter("Cody");
$graeme = new Waiter("Graeme");

?>
