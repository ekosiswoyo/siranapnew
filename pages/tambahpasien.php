<?php

include "../config.php";

if (isset($_POST['upload'])){ 
    $no_rm = $_POST['no_rm'];
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $gender =$_POST['gender'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
	$jawab =$_POST['jawab'];
	$telp		    = $_POST['telp'];
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into pasien(No_RM,Jenis_Pasien,Nama_Pasien,Tanggal_Lahir,Jenis_Kelamin,Pekerjaan,Alamat,Penanggung_Jawab,No_Telpon) 
values(	'$no_rm', 
        '$jenis',
        '$nama',
        '$tgl',
        '$gender',
        '$pekerjaan',
        '$alamat',
        '$jawab',
        '$telp'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='pasien.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='pasien_tambah.php';</script>";
}														




}
?>