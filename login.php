<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysql_query("select * from user where username='$username' AND password='$password'");
$coba = mysql_num_rows($query);
echo $coba;
if($coba > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>
