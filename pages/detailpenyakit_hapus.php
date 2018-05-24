
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from detailpenyakit where Kode_Detailpenyakit='$id'");
if($hps){
		?><script language="javascript">document.location.href="detailpenyakit.php"</script><?php
	}
?>

