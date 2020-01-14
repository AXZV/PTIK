<?php
	
include 'koneksi.php';



$no = $_POST['no'];
$judul=$_POST['judul'];
$penerbit=$_POST['penerbit'];
$tanggal=$_POST['tanggal'];
$isi=$_POST['isi'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar_berita/$nama_file";
move_uploaded_file($lokasi_file,$direktori);

if($nama_file == NULL){

		$sql="UPDATE berita1 SET
		judul = '$judul',tanggal = '$tanggal',isi = '$isi', penerbit = '$penerbit' WHERE id_berita = '$no' ";



	$query=mysqli_query($connection,$sql);

	if ($query) 
	{
		header('location: kelola_berita.php');
	}
	else 
	{
		echo "gagal";
	}

}else{

	$sql="UPDATE berita1 SET
		judul = '$judul',tanggal = '$tanggal',isi = '$isi',gambar = '$nama_file', penerbit = '$penerbit' WHERE id_berita = '$no' ";

	$query=mysqli_query($connection,$sql);

	if ($query) 
	{
		header('location: kelola_berita.php');
	}
	else 
	{
		echo "gagal";
	}
}

?>