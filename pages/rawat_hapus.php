
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from rawatinap where No_Daftar='$id'");
if($hps){
		?><script language="javascript">document.location.href="rawatinap.php"</script><?php
	}
?>

