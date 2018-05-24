<?php

include "../config.php";


    $no_rm = $_POST['no_rm'];
    $jns  = $_POST['jns'];
	$nama	= $_POST['nama'];
    $tgl  = $_POST['tgl'];
    $gender    =$_POST['gender'];
    $pekerjaan  = $_POST['pekerjaan'];
	$alamat	= $_POST['alamat'];
	$jawab    =$_POST['jawab'];
	$telp    =$_POST['telp'];

	$update = "UPDATE pasien SET Jenis_Pasien ='$jns',Nama_Pasien='$nama',Tanggal_Lahir='$tgl', Jenis_Kelamin='$gender',Pekerjaan='$pekerjaan',Alamat='$alamat',Penanggung_Jawab='$jawab',No_Telpon='$telp'  WHERE No_RM='$no_rm'" or die ("gagal update ");
	$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
	mysqli_query($link,$update);
	echo"<script>window.alert('Simpan Berhasil..!')</script>";
	 echo"<script>document.location='pasien.php';</script>"; 
    
	




?>