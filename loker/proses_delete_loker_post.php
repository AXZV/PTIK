<?php
	
	include 'koneksi.php';
	
	$id = $_GET['id'];

	$stmt = mysqli_query($connection, "DELETE FROM loker_fix WHERE no = '$id'") or die(mysqli_error($connection));

	if($stmt){

		header("Location: kelola_loker_post.php");

	}else{
		echo 'gagal';
	}
?>