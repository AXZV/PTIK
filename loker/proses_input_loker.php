<?php
							// untuk masuk ke admin sebelum disetujui	
	include 'koneksi.php';

	$no = $_POST['no_id'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$tgl_upload = $_POST['tgl_upload'];
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


	$sql = "INSERT INTO loker VALUES ('$no_id','$nama', '$nim', '$email','$no_telp', '$tgl_upload', '$tgl_kadaluarsa',
							'$judul','$perusahaan', '$alamat','$pendidikan','$tipe_pekerjaan', '$deskripsi','$gaji', '$posisi', 
							'$keahlian', '$tanggungjawab', '$syarat_berkas', '$nama_file')";


	$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));
	

	if($stmt){
	
		header('Location: lowongan_kerja.php');
		?>
			<script>
				alert("Berhasil menginput loker")
			</script>
		<?php
	
	}else{

		echo "gagal";
	}


?>