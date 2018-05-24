
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from detailobat where Kode_Detailobat='$id'");
if($hps){
		?><script language="javascript">document.location.href="detailobat.php"</script><?php
	}
?>

