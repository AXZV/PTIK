<?php
include 'koneksi.php';

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$tahun_angkatan=$_POST['tahun_angkatan'];
$kode_dosen=$_POST['kode_dosen'];
$nama_dosen_wali=$_POST['nama_dosen_wali'];
$telepon=$_POST['telepon'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$email=$_POST['email'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar_mhs/$nama_file";
move_uploaded_file($lokasi_file,$direktori);

if($nama_file == NULL){

	$sql="UPDATE mahasiswa SET nim = '$nim',nama = '$nama',tahun_angkatan = '$tahun_angkatan', kode_dosen = '$kode_dosen',nama_dosen_wali = '$nama_dosen_wali',no_telepon = '$telepon',tanggal_lahir = '$tanggal_lahir',email = '$email', jenis_kelamin = '$jenis_kelamin' WHERE nim ='$nim'";

	$query=mysqli_query($connection,$sql);

	if ($query) 
	{
		header("location:opsi_mahasiswa.php");
	}
	else 
	{
		echo "gagal";
	}

}else{
	$sql="UPDATE mahasiswa SET nim = '$nim',nama = '$nama',tahun_angkatan = '$tahun_angkatan', kode_dosen = '$kode_dosen' ,nama_dosen_wali = '$nama_dosen_wali',no_telepon = '$telepon',tanggal_lahir = '$tanggal_lahir',email = '$email', jenis_kelamin = '$jenis_kelamin',gambar = '$nama_file' WHERE nim ='$nim'";

	$query=mysqli_query($connection,$sql);

	if ($query) 
	{
		header("location:opsi_mahasiswa.php");
	}
	else 
	{
		echo "gagal";
	}
}

?>