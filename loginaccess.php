<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');

$login = mysqli_query($link, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:pages/index.php");
}else{
    echo "<script>window.alert('Login Failed')</script>";
	echo "<script>window.location='index.php';</script>";
}
 