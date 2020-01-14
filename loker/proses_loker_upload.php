<?php
									// proses untuk masuk ke web

	include 'koneksi.php';

	$no = $_POST['no'];
	$no_id = $_POST['no_id'];
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
	$gambar_upload = $_POST['gambar_upload'];

	if(isset($_FILES['gambar'])){
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file = $_FILES['gambar']['type'];
	$nama_file = $_FILES['gambar']['name'];
	$direktori = "gambar_loker/$nama_file";
	}
	move_uploaded_file($lokasi_file, $direktori);


	if($nama_file == NULL AND $lokasi_file == NULL AND $tipe_file == NULL){

		$sql = "INSERT INTO loker_fix VALUES ('$no', '$nama', '$nim', '$email','$no_telp', '$tgl_acc',
								'$tgl_kadaluarsa', '$judul','$perusahaan','$alamat', '$pendidikan', '$tipe_pekerjaan','$deskripsi','$gaji', '$posisi', 
								'$keahlian', '$tanggungjawab', '$syarat_berkas', '$gambar_upload')";


		$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));
	

	if($stmt){

			$stmt_hapus = mysqli_query($connection, "DELETE FROM loker WHERE no = '$no_id'") or die(mysqli_error($connection));

				if($stmt_hapus){

					header("Location: kelola_loker_post.php");

				}else{
					echo 'gagal';
				}
			
			}else{

				echo "gagal";
			}


	}else{


		$sql = "INSERT INTO loker_fix VALUES ('$no', '$nama', '$nim', '$email','$no_telp', '$tgl_acc',
								'$tgl_kadaluarsa','$judul','$perusahaan','$alamat', '$pendidikan', '$tipe_pekerjaan', '$deskripsi','$gaji', '$posisi', 
								'$keahlian', '$tanggungjawab', '$syarat_berkas', '$nama_file')";


		$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));
		

		if($stmt){

				$stmt_hapus = mysqli_query($connection, "DELETE FROM loker WHERE no = '$no'") or die(mysqli_error($connection));

				if($stmt_hapus){

					header("Location: kelola_loker_post.php");

				}else{
					echo 'gagal';
				}
		
				}else{

					echo "gagal";
				}

		}


?>