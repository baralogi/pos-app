<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username=="admin"&&$password=="admin"){
	header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>