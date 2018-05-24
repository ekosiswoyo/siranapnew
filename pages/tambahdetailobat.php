<?php

include "../config.php";

if (isset($_POST['upload'])){ 
   //wisata
    $kd_detail			= $_POST['kd_detail'];
	$kd_obat       =$_POST['kd_obat'];
    $no_periksa		    = $_POST['no_periksa'];
	$jml		    = $_POST['jml'];
	
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into detailobat(Kode_Obat,No_Periksa,Kode_Detailobat,Jumlah_Obat) 
values(	'$kd_obat', 
        '$no_periksa',
        '$kd_detail',
        '$jml'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='detailobat.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='detailobat_tambah.php';</script>";
}														




}
?>