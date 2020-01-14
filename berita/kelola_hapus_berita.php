<?php
	
	include 'koneksi.php';

	$judul = $_GET['judul'];

	
	$sql ="DELETE FROM berita1 WHERE judul = '$judul'";

	if(mysqli_query($connection,$sql)){
		header('location: kelola_berita.php');
	}else{
		echo 'gagal';
	}
?>