<?php

include "../config.php";


    $id_dokter  = $_POST['id_dokter'];
	$nama	= $_POST['nama'];
	$gender    =$_POST['gender'];
    $tgl  = $_POST['tgl'];
	$alamat	= $_POST['alamat'];
	$agama    =$_POST['agama'];
	$telp    =$_POST['telp'];

	$update = "UPDATE dokter SET Nama_Dokter ='$nama', Jenis_Kelamin='$gender',Tanggal_Lahir='$tgl',Alamat='$alamat',Agama='$agama',No_Telpon='$telp'  WHERE Id_Dokter='$id_dokter'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='dokter.php';</script>"; 
    
	




?>