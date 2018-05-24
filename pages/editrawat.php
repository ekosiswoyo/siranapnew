<?php

include "../config.php";


    $no_daftar = $_POST['no_daftar'];
    $no_rm  = $_POST['no_rm'];
	$tgl_daftar	= $_POST['tgl_daftar'];
    $tgl_keluar  = $_POST['tgl_keluar'];
    $kd_kamar    =$_POST['kd_kamar'];
    $id_dokter  = $_POST['id_dokter'];
	$status	= $_POST['status'];

	$update = "UPDATE rawatinap SET No_RM ='$no_rm',Tanggal_Daftar='$tgl_daftar',Tanggal_Keluar='$tgl_keluar', Kode_Kamar='$kd_kamar',Id_Dokter='$id_dokter',Status_Pasien='$status' WHERE No_Daftar='$no_daftar'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='rawatinap.php';</script>"; 
    
	




?>