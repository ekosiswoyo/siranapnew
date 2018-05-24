<?php

include "../config.php";

if (isset($_POST['upload'])){ 
    $no_daftar = $_POST['no_daftar'];
    $no_rm = $_POST['no_rm'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $tgl_keluar = $_POST['tgl_keluar'];
    $kd_kamar =$_POST['kd_kamar'];
    $id_dokter = $_POST['id_dokter'];
    $status = $_POST['status'];
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into rawatinap(No_RM,No_Daftar,Tanggal_Daftar,Tanggal_Keluar,Kode_Kamar,Id_Dokter,Status_Pasien) 
values(	'$no_rm', 
        '$no_daftar',
        '$tgl_daftar',
        '$tgl_keluar',
        '$kd_kamar',
        '$id_dokter',
        '$status'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='rawatinap.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='rawat_tambah.php';</script>";
}														




}
?>