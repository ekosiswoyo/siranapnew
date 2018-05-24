
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from dokter where Id_Dokter='$id'");
if($hps){
		?><script language="javascript">document.location.href="dokter.php"</script><?php
	}
?>

