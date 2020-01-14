<?php
	
	include 'koneksi.php';

	$id = $_GET['id'];

	
	$sql ="DELETE FROM nonakademik WHERE id = '$id'";

	if(mysqli_query($connection,$sql)){
		header('location: kelola_prestasi_non_akademik.php');
	}else{
		echo 'gagal';
	}
?>