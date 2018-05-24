
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from periksa where No_Periksa='$id'");
if($hps){
		?><script language="javascript">document.location.href="periksa.php"</script><?php
	}
?>

