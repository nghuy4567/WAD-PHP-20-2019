<?php 
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
if ($username == '') {
    echo 'Bạn chưa nhập tên đăng nhập';
}
 
if ($password == '') {
    echo 'Bạn chưa nhập mật khẩu';
}
 ?>