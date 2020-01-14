<?php
include 'koneksi.php';

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$nidn=$_POST['nidn'];
$kode_dosen=$_POST['kode_dosen'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$pendidikan_terakhir=$_POST['pendidikan_terakhir'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar_dsn/$nama_file";
move_uploaded_file($lokasi_file,$direktori); 

$sql="INSERT INTO dosen(nip,nama,nidn,kode_dosen,jenis_kelamin,agama,email,pendidikan_terakhir,gambar) values ('$nip','$nama','$nidn','$kode_dosen','$jenis_kelamin','$agama','$email','$pendidikan_terakhir','$nama_file')";

$query=mysqli_query($connection,$sql);

if ($query) 
{
	header("location:opsi_dosen.php");
}
else 
{
	echo "gagal";
}

?>