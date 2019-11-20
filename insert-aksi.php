<?php 
include 'config.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
 
mysql_query("INSERT INTO user VALUES('','$nama','$nim')");
 
header("location:insert.php?pesan=input");
?>