<?php
	include 'koneksi.php';
	$nip=$_GET['nip'];
	mysqli_query($connection,"DELETE FROM dosen WHERE nip='$nip'") or die (mysql_error());
?>