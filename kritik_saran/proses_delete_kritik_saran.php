<?php
	
	include 'koneksi.php';

	$no = $_GET['no'];

	$stmt = mysqli_query($connection,"DELETE FROM kritik_saran WHERE no='$no'") or die(mysqli_error($connection));

	if($stmt){

		header("Location: kelola_kritik_saran.php");
	}
?>