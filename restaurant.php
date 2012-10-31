<?php
### Classes ####################################################################
class Waiter {
	// Variables
	private $wname;
	private $totalTip;
	
	// Functions
	public function __construct($n = "John") {
		$this->wname = $n;
		$this->totalTip = 0;
	}
	
	public function addToTip($amount) {
		$this->totalTip += $amount;
	}
	
	public function getName() {
		return $this->wname;
	}
} 

class MenuItem {
	private $iname;
	private $iprice;
	private $idescription;
	
	public function __construct($n, $p, $desc) {
		$this->iname = $n;
		$this->iprice = $p;
		$this->idescription = $desc;
	}
	
	public function __toString() {
		return $this->iname . ". " . $this->idescription . ": $" .
			$this->iprice;
	}
}
################################################################################

### Functions ##################################################################
function printMenu($menu) {
	$i = 0;
	echo "0)\t I am done!\n";
	for (; $i<count($menu); $i++) {
		echo ($i+1).")\t " . $menu[$i] . "\n";
	}
	echo ($i+1).")\t View/pay bill.\n";
	echo "?: ";
}
################################################################################

### Script execution ###########################################################
// Standard in.
$stdin = fopen('php://stdin', 'r');

// Menu array
$menu = array();
$menu[] = new MenuItem("Burger", 10.00, "Cheese burger with fries");
$menu[] = new MenuItem("Fries", 8.00, "Freshcut");
$menu[] = new MenuItem("Calamari", 12.00, "Fried squid");
$menu[] = new MenuItem("Pint of Hefeweizen", 5.50, "Wheat beer.  With orange");
$menu[] = new MenuItem("Cola", 1.00, "Large glass");

// User input.
$choice = 0;

// Customer loop
do {
	echo "Hello there.  Would you like a seat?\n";
	echo "0)\t No, thank you.\n";
	echo "1)\t Absolutely!\n";
	echo "?: ";
	$choice = trim(fgets($stdin));
	echo "\n";
	
	// Order loop
	if ($choice == 1) {
		// Randomly assign waiter to user
		$myWaiter = $waiters[rand(0, count($waiters))];

		// Waiters array
		$waiters = array(new Waiter("Cody"), new Waiter("Graeme"));
		
		// List order items.
		$myOrder = Array();
		
		do {
			printMenu($menu);
			$choice = trim(fgets($stdin));
		} while ($choice);
		
		// Force outer loop to continue.
		$choice = 1;
	}
} while($choice)
// TODO: Display statistics about tips.
################################################################################

?>
