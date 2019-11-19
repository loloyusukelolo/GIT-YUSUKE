<?php 
class ViewUser extends User{
	

	public function showAllUsers(){
		$datas = $this->getAllusers();
		foreach($datas as $data){
			echo $data['id'];
			echo $data['name'];
		}
	}
}
 ?>