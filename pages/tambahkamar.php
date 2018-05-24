<?php

include "../config.php";

if (isset($_POST['upload'])){ 
   //wisata
    $nama			= $_POST['nama'];
	$harga       =$_POST['harga'];
	$kd_kamar		    = $_POST['kode_kamar'];
	
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into kamar(Kode_Kamar,Nama_Kamar,Harga) 
values(	'$kd_kamar', 
        '$nama',
        '$harga'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='kamar.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='kamar_tambah.php';</script>";
}														




}
?>