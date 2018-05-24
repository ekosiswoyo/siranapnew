
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from pasien where No_RM='$id'");
if($hps){
		?><script language="javascript">document.location.href="pasien.php"</script><?php
	}
?>

