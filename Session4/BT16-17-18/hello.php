<?php
require_once('connect.php');
$id = $_SESSION['id'];
$username = $password = $email = '';
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$username = $row["username"];
		$password = $row["[password]"];
		$gender = $row["Gender"];
	}
}
?>
<div>
	<h1>Welcome <?php echo $username." ".$email; ?></h1>
</div>