<?php

include "../config.php";

if (isset($_POST['upload'])){ 
    $id_dokter = $_POST['id_dokter'];
    $nama = $_POST['nama'];
	$gender =$_POST['gender'];
	$tgl = $_POST['tgl'];
    $alamat = $_POST['alamat'];
	$agama =$_POST['agama'];
	$telp		    = $_POST['telp'];
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into dokter(Id_Dokter,Nama_Dokter,Jenis_Kelamin,Tanggal_Lahir,Alamat,Agama,No_Telpon) 
values(	'$id_dokter', 
        '$nama',
        '$gender',
        '$tgl',
        '$alamat',
        '$agama',
        '$telp'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='dokter.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='dokter_tambah.php';</script>";
}														




}
?>