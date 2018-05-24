<?php

include "../config.php";

	//wisata
    $kd_kamar         = $_POST['kd_kamar'];
	$nama			= $_POST['nama'];
	$harga       =$_POST['harga'];
	

	$update = "UPDATE kamar SET Nama_Kamar ='$nama', Harga='$harga' WHERE Kode_Kamar='$kd_kamar'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='kamar.php';</script>"; 
    
	




?>