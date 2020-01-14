<?php

	include 'koneksi.php';

	$no = $_POST['no'];
	$tanggal = $_POST['tanggal'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$kritik_saran = $_POST['komentar'];

	$stmt = mysqli_query($connection,"INSERT INTO kritik_saran VALUES ('$no','$tanggal','$nama','$email','$kritik_saran')") 
			or die(mysqli_error($connection));

	if ($stmt) {
		header('Location:../index.php');
	}else{
		echo "gagal";
	}

?>