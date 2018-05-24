<?php

include "../config.php";


    $kd_detail  = $_POST['kd_detail'];
	$kd_penyakit	= $_POST['kd_penyakit'];
	$no_periksa    =$_POST['no_periksa'];

	$update = "UPDATE detailpenyakit SET Kode_Penyakit ='$kd_penyakit', No_Periksa='$no_periksa' WHERE Kode_Detailpenyakit='$kd_detail'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='detailpenyakit.php';</script>"; 
    
	




?>