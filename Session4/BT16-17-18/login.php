<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
  <table>
    <tr>
      <td colspan="2">Form dang nhap</td>
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
      <td colspan="2" align="center"><input type="submit" name="submit" value="Dang nhap"></td>
    </tr>
  </table>
 </form>
</body>
</html>
<?php 
include_once("connect.php");
$username = $password = '';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username' AND Password='$password'";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $id = $row["id"];
    $username = $row["username"];
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $username;
  }
  header("Location: hello.php");
}
else
{
  echo "Invalid username or password";
}
?>