<?php
class User {

	public $name;


	function set_name($name) {
		$this->name = $name;
	}
	function get_name() {
		return $this->name;
	}
}

$person = new User();
$person->set_name('CLASS IS INITIALISED!');
echo $person->name;

$person = new User();
$person->set_name('CLASS IS INITIALISED!');
echo $person->name;
$person = new User();
$person->set_name('CLASS IS INITIALISED!');
echo $person->name;

?>