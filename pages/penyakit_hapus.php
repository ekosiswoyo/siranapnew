
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from penyakit where Kode_Penyakit='$id'");
if($hps){
		?><script language="javascript">document.location.href="penyakit.php"</script><?php
	}
?>

