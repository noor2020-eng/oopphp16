<<?php 

 class Test extends Dbh {
 	public function getUser(){
 		$sql="SELECT * FROM users";
 		$stmt=$this->connect()->query($sql);
 		while($row = $stmt->fetch()){
 			echo $row['first_name'] . '<br>';
 		}
 	}
 }