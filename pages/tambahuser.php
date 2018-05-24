<?php

include "../config.php";

if (isset($_POST['upload'])){ 
   //wisata
    $nama			= $_POST['nama'];
	$password       =$_POST['password'];
	
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into user(Username,Password) 
values(	'$nama', 
        MD5('$password')
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='index.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='user.php';</script>";
}														




}
?>