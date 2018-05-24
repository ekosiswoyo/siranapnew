<?php

include "../config.php";

if (isset($_POST['upload'])){ 
   //wisata
    $kd_detail			= $_POST['kd_detail'];
	$kd_penyakit       =$_POST['kd_penyakit'];
    $no_periksa		    = $_POST['no_periksa'];
	
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into detailpenyakit(Kode_Penyakit,No_Periksa,Kode_Detailpenyakit) 
values(	'$kd_penyakit', 
        '$no_periksa',
        '$kd_detail'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='detailpenyakit.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='detailpenyakit_tambah.php';</script>";
}														




}
?>