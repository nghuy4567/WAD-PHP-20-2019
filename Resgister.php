
<?php
	if (isset($_POST['register'])) {
 	$email = $_POST["email"];
 	$username = $_POST["username"];
 	$password = $_POST["password"];
 	if ($email == "" ||$username == "" || $password == "") {
 		echo "Nhap thong tin";
 	}else{
 	}
 } 
?>
<form action="Resgister.php" method="POST">
		<table>			
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="register" value="Dang ky"></td>
			</tr>
 
		</table>
</form>

