<?php

include "../config.php";


    $no_periksa = $_POST['no_periksa'];
    $no_daftar = $_POST['no_daftar'];
	$tgl_periksa	= $_POST['tgl_periksa'];
    $jam_periksa  = $_POST['jam_periksa'];
    $keluhan    =$_POST['keluhan'];
    $terapi  = $_POST['terapi'];
    $diagnosa	= $_POST['diagnosa'];
    $kesadaran  = $_POST['kesadaran'];
    $tinggi    =$_POST['tinggi'];
    $berat  = $_POST['berat'];
	$tindakan	= $_POST['tindakan'];
    $kd_penyakit = $_POST['kd_penyakit'];
    $kd_obat = $_POST['kd_obat'];


	$update = "UPDATE periksa SET No_Daftar ='$no_daftar',Tanggal_Periksa='$tgl_periksa',Jam_Periksa='$jam_periksa', Keluhan='$keluhan',Terapi='$terapi',Diagnosa='$diagnosa',
                Kesadaran = '$kesadaran', Tinggi_Badan='$tinggi', Berat_Badan='$berat', Tindakan='$tindakan', Kode_Penyakit='$kd_penyakit', Kode_Obat='$kd_obat'
                 WHERE No_Periksa='$no_periksa'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='periksa.php';</script>"; 
    
	




?>