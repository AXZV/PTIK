<?php
include 'koneksi.php';

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kegiatan=$_POST['kegiatan'];
$tingkat=$_POST['tingkat'];
$prestasi=$_POST['prestasi'];

$sql="INSERT INTO akademik (nim,nama,kegiatan,tingkat,prestasi) values 
	('$nim','$nama','$kegiatan','$tingkat','$prestasi')";

$query=mysqli_query($connection,$sql);

if ($query) 
{
	header("location:kelola_prestasi_akademik.php");
}
else 
{
	echo "gagal";
}
?>