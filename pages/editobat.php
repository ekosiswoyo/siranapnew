<?php

include "../config.php";

	//wisata
    $kd_obat    = $_POST['kd_obat'];
	$nama		 =$_POST['nama'];
	$dosis      =$_POST['dosis'];
	

	$update = "UPDATE obat SET Nama_Obat ='$nama', Dosis='$dosis' WHERE Kode_Obat='$kd_obat'" or die ("gagal update ");
    $link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='obat.php';</script>"; 
    
	




?>