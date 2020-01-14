<?php
	
	include 'koneksi.php';

	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$tgl_acc = $_POST['tgl_acc'];
	$tgl_kadaluarsa = $_POST['tgl_kadaluarsa'];
	$judul = $_POST['judul'];
	$perusahaan = $_POST['perusahaan'];
	$posisi = $_POST['posisi'];
	$gaji = $_POST['gaji'];
	$alamat = $_POST['alamat'];
	$pendidikan = $_POST['pendidikan'];
	$tipe_pekerjaan = $_POST['tipe_pekerjaan'];
	$deskripsi = $_POST['deskripsi'];
	$keahlian = $_POST['keahlian'];
	$tanggungjawab = $_POST['tanggungjawab'];
	$syarat_berkas = $_POST['syarat_berkas'];
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file = $_FILES['gambar']['type'];
	$nama_file = $_FILES['gambar']['name'];
	$direktori = "gambar_loker/$nama_file";
	move_uploaded_file($lokasi_file, $direktori);

	if($nama_file == NULL){

		$sql = "UPDATE loker_fix SET nama='$nama', nim='$nim', email='$email', no_telp='$no_telp', 
							tgl_acc='$tgl_acc', tgl_kadaluarsa='$tgl_kadaluarsa', judul='$judul',perusahaan='$perusahaan', 
							pendidikan='$pendidikan',tipe_pekerjaan='$tipe_pekerjaan',deskripsi='$deskripsi', alamat='$alamat',gaji='$gaji', posisi='$posisi', 
							keahlian='$keahlian', tanggungjawab='$tanggungjawab', syarat_berkas='$syarat_berkas' 
							 WHERE no = $no";


	$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));
	

	if($stmt){

				header("Location: kelola_loker_post.php");

			}else{
				echo 'gagal';
			}

	}else{


		$sql = "UPDATE loker_fix SET nama='$nama', nim='$nim', email='$email', no_telp='$no_telp', 
								tgl_upload='$tgl_upload', tgl_kadaluarsa='$tgl_kadaluarsa', judul='$judul',perusahaan='$perusahaan', 
								pendidikan='$pendidikan',tipe_pekerjaan='$tipe_pekerjaan', deskripsi='$deskripsi', alamat='$alamat',gaji='$gaji', posisi='$posisi', 
								keahlian='$keahlian', tanggungjawab='$tanggungjawab', syarat_berkas='$syarat_berkas', 
								gambar='$nama_file' WHERE no = $no";


		$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));
		

		if($stmt){

					header("Location: kelola_loker_post.php");

				}else{
					echo 'gagal';
				}

	}


?>