
<?php

$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', '', 'puskesmassragi');
$hps = mysqli_query($link, "delete from kamar where Kode_Kamar='$id'");
if($hps){
		?>
		<script language="javascript">document.location.href="kamar.php"</script>
		<?php
	}
?>

