<?php
 class User{
 	public $userName;
 	public $email;

 	public function setUsername(){
 		echo "my name";
 	} 

 	public function setKey(){
 		echo "qwe123";
 	}
 } 

 $user = new User();
 $user -> setKey();
	// $User -> userName;

 ?>