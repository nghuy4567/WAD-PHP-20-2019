<?php
	$server= 'localhost'; //
	$username = 'root';
	$password = ''; 
	$database = 'users';
	$connect = mysqli_connect($server, $username, $password, $database);

	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }	

	$title = "Demo title"; // $title = $_POST['title'];
	$sql = "INSERT INTO users (name, phone, email, birthday) VALUES ('$title', '098765432', 'qava@gmail.com', '1999-02-02')";
	if (mysqli_query($connect, $sql) === TRUE) {
		echo "Insert success!";
	}
	
	//var_dump($connect);
 ?>