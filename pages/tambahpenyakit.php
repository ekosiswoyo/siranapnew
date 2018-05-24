<?php

include "../config.php";

if (isset($_POST['upload'])){ 
   //wisata
    $nama			= $_POST['nama'];
	$kd_penyakit    = $_POST['kode_penyakit'];
	
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into penyakit(Kode_Penyakit,Nama_Penyakit) 
values(	'$kd_penyakit', 
        '$nama'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='penyakit.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='penyakit_tambah.php';</script>";
}														




}
?>