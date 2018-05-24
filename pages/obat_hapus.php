
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from obat where Kode_Obat='$id'");
if($hps){
		?><script language="javascript">document.location.href="obat.php"</script><?php
	}
?>

