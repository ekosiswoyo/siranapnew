<?php

include "../config.php";

if (isset($_POST['upload'])){ 
   //wisata
    $nama			= $_POST['nama'];
	$dosis       =$_POST['dosis'];
	$kd_obat		    = $_POST['kode_obat'];
	
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into obat(Kode_Obat,Nama_Obat,Dosis) 
values(	'$kd_obat', 
        '$nama',
        '$dosis'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='obat.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='obat_tambah.php';</script>";
}														




}
?>