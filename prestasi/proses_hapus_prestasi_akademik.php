<?php
	
	include 'koneksi.php';

	$id = $_GET['id'];

	
	$sql ="DELETE FROM akademik WHERE id = '$id'";

	if(mysqli_query($connection,$sql)){
		header('location: kelola_prestasi_akademik.php');
	}else{
		echo 'gagal';
	}
?>