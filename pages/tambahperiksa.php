<?php

include "../config.php";

if (isset($_POST['upload'])){ 
    $no_periksa = $_POST['no_periksa'];
    $no_daftar = $_POST['no_daftar'];
    $tgl_periksa = $_POST['tgl_periksa'];
    $jam_periksa = $_POST['jam_periksa'];
    $keluhan =$_POST['keluhan'];
    $terapi = $_POST['terapi'];
    $diagnosa = $_POST['diagnosa'];
    $kesadaran = $_POST['kesadaran'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $tekanan = $_POST['tekanan'];
    $tindakan = $_POST['tindakan'];
    $kd_penyakit = $_POST['kd_penyakit'];
    $kd_obat = $_POST['kd_obat'];
    
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$query = mysqli_query($link, "insert into periksa(No_Periksa,No_Daftar,Tanggal_Periksa,Jam_Periksa,Keluhan,Terapi,Diagnosa,Kesadaran,Tinggi_Badan,Berat_Badan,Tekanan_Darah,Tindakan,
        Kode_Penyakit,Kode_Obat) 
values(	'$no_periksa', 
        '$no_daftar',
        '$tgl_periksa',
        '$jam_periksa',
        '$keluhan',
        '$terapi',
        '$diagnosa',
        '$kesadaran',
        '$tinggi',
        '$berat',
        '$tekanan',
        '$tindakan',
        '$kd_penyakit',
        '$kd_obat'
        )");

if($query){
echo"<script>window.alert('Simpan Berhasil..!')</script>";
echo"<script>document.location='periksa.php';</script>"; 
}else{
echo"<script>window.alert('Simpan Gagal..!')</script>";
echo"<script>document.location='periksa_tambah.php';</script>";
}														




}
?>