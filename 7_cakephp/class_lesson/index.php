<?php 
class Animal {
	public $food = "";
	public $sleep_hours = 0;
	public $drink = "water";
	public $breathe_in = "oxygen";

	function __construct($food, $drink, $sleep_hours){
		$this->food = $food;
		echo "you started new animal class; this is the beginning";
		echo "<br/>";
	}

	public function eat(){
		echo "eating " . $this->food;
		echo "<br/>";
	}

	function drink(){
		echo "drinking juice";
	}

	function breathe(){
		echo "inhaling oxygen";
	}

	function sleep(){
		echo "sleeping for 8hours";
	}
}

class Dog extends Animal {
	function bark(){
		echo "woof woof";
	}
}

class Bird extends Animal {
	function fly(){
		echo "flyiing";
	}
}

$dog = new Dog("pork", "water", "10");
$dog->eat();
$dog->bark();

$bird = new Bird("seeds", "water", "10");
$bird->fly();



// // - HOW TO MAKE A NEW VARIABLE WITH CLASS INSTANCE
// $lester_var = new Animal("burger", "sake", "10");
// $lester_var->eat();

// $jacob_var = new Animal("eggs", "coke", "5");
// $jacob_var->eat();

// $lester_var->food = "taco";
// $lester_var->drink = "sake";
// $lester_var->sleep_hours = 10;
// $lester_var->breathe_in = "oxygen";

// // - HOW TO CALL A METHOD FROM A CLASS
// $lester_var->eat();
// echo "<br/>";

// $lester_var->drink();
// echo "<br/>";

// $lester_var->breathe();
// echo "<br/>";

// $lester_var->sleep();
























