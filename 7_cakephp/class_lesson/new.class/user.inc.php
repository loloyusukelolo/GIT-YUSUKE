<?php 

class User extends Dbh{
	

	protected function getAllUsers(){
		$sql = "SELECT * FROM users";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;
		if ($num_rows > 0) {
			while ($row = $result->fetch_assoc()){
				$data[]= $row;

			}
			return $data;
var_dump($sql);
		}
	}
}

		
	

?>