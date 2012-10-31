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

// Randomly assign waiter to user
$myWaiter = $waiters[rand(0, count($waiters)];

// List order items.
$myOrder = Array();

// Menu array
$menu = array();
$menu[] = new MenuItem("Burger", 10.00, "Cheese burger with fries.");
$menu[] = new MenuItem("Fries", 8.00, "Freshcut.");
$menu[] = new MenuItem("Calamari", 12.00, "Fried squid.");
$menu[] = new MenuItem("Pint of Hefeweizen", 5.50, "Wheat beer.  With orange.");
$menu[] = new MenuItem("Cola", 1.00, "Large glass.");
################################################################################

?>
