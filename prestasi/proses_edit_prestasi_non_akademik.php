<?php
include 'koneksi.php';

$id = $_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kegiatan=$_POST['kegiatan'];
$tingkat=$_POST['tingkat'];
$prestasi=$_POST['prestasi'];
 
$sql="UPDATE nonakademik SET
	id ='$id', nim = '$nim' , nama = '$nama', kegiatan = '$kegiatan', tingkat = '$tingkat', prestasi = '$prestasi' WHERE id = '$id'";
var_export($sql);
$query=mysqli_query($connection,$sql);

if ($query) 
{
	header("location:kelola_prestasi_non_akademik.php");
}
else 
{
	echo "gagal";
}
?>