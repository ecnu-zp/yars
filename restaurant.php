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
// Waiters array
$waiters = array(new Waiter("Cody"), new Waiter("Graeme"));

// Menu array
$menu = array();

// Customer loop
while(true) {
	// Order loop
	// TODO Make loop
}

function printMenu() {
	for ($i=0; $i<count($menu); $i++) {
		echo $menu[$i];
	}
}
################################################################################

?>
