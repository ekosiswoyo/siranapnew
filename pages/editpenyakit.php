<?php

include "../config.php";

	//wisata
    $kd_penyakit        = $_POST['kode_penyakit'];
	$nama			= $_POST['nama'];
	
	

	$update = "UPDATE penyakit SET Nama_Penyakit ='$nama' WHERE Kode_Penyakit='$kd_penyakit'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='penyakit.php';</script>"; 
    
	




?>