<?php

include "../config.php";

	//wisata
    $nama         = $_POST['nama'];
	$password			= $_POST['password'];
	

	$update = "UPDATE user SET Password =MD5('$password') WHERE Username='$nama'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!Silahkan Login Kembali')</script>";
	 echo"<script>document.location='../index.php';</script>"; 
    
	




?>