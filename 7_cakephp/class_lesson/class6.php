<?php 


//moduler coding!!


class DARABESE{

	public $HOST="";
	public $USER="";
	public $PASS="";
	public $DATABESE-"";




	public $connection =null;


	function __construct(){
		$this->connection = mysql_connect(
		$this->HOST=
		$this->PASS
		$this->DATABESE
	);

		public function executed_query($query="")
		return mysqli_query($this->connection,$query);
	}
} ?>