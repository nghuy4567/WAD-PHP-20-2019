<?php 
	$name = $_POST["name"];
	$email = $_POST["email"];
//
	if ($_POST[name] == NULL) {
		echo "Nhap name: <br>";	
	}else{
		$name = $_POST["name"];
	}
//
	if ($_POST[email] == NULL) {
		echo "Nhap email: <br>";	
	}else{
		$email = $_POST["email"];
	}	if ($name && $email) {
		echo "name: $name<br> ";
		echo "email: $email<br> ";

	}
 ?>