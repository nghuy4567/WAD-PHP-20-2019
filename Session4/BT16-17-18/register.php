<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<table>
		<tr>
			<td colspan="2">Form dang ky</td>
		</tr>	
		<tr>
			<td>Username :</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Dang ky"></td>
		</tr>
	</table>
 </form>
<?php 
include_once("connect.php");
if (isset($_POST['submit'])) {
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	$email=mysqli_real_escape_string($connect,$_POST['email']);
	$sql="INSERT INTO users (username,password,email) VALUES(
	'$username',
	'$password',
	'$email')";
$query=mysqli_query($connect,$sql);
}
?>
</body>
</html>