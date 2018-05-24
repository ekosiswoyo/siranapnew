<?php

include "../config.php";


    $kd_detail  = $_POST['kd_detail'];
	$kd_obat	= $_POST['kd_obat'];
	$no_periksa    =$_POST['no_periksa'];
    $jml  = $_POST['jml'];

	$update = "UPDATE detailobat SET Kode_Obat ='$kd_obat', No_Periksa='$no_periksa',Jumlah_Obat='$jml' WHERE Kode_Detailobat='$kd_detail'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='detailobat.php';</script>"; 
    
	




?>