<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		.wrapper_site_map{
			margin-top: 200px;
			margin-left: 225px;	
			padding: 100px;
			background-color: rgba(225 ,225 ,225 ,0.2);
			box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);
			width: 700px;
			height: 700px;
		}

		.wrapper_site_map ul li{
			margin-top: 20px;
		}

		.label{
		position: relative;
		top: 130px;
		}
		.label1{
			position: relative;
			left: 525px;
			top: 0px;

		}
		h3{
			position: absolute;
			z-index: 10;
			left: 630px;
			top: 10px;
			color: white;
		}

		.wrapper_site_map a{
			color: #6223b0;
			text-decoration: none;
		}

		.wrapper_site_map a:hover{
			color: red;
			text-decoration: none;
		}

	</style>
</head>
<body>
	<?php
		include '../view/navbar.php';
	?>
	<?php
		include '../view/background.php';
	?>

	<div class="label">
	<img class="label1" src="asset/label.png" width="300" height="60"></img>
	<h3>SITE MAP</h3>
	</div>

	<div class="wrapper_site_map">
		<ul>
			<li><a href="../index.php">Halaman utama</a></li>
			<li><a href="../profil/profil.php">Profil PTIK</a></li>
			<li><a href="../info/menampilkan_data.php">Data dosen</a></li>
			<li><a href="../info/menampilkan_data_mahasiswa.php">Data mahasiswa</a></li>
			<li><a href="../prestasi/menampilkan_data_prestasi_akademik.php">Prestasi akademik</a></li>
			<li><a href="../prestasi/menampilkan_data_prestasi_nonakademik.php">Prestasi non akademik</a></li>
			<li><a href="../materi soal/soal_ptik.php">Kumpulan materi dan soal</a></li>
			<li><a href="../berita/berita.php">Berita PTIK</a></li>
			<li><a href="../loker/lowongan_kerja.php">Lowongan Kerja</a></li>
		</ul>
	</div>

	<?php
		include '../view/footer.php';
	?>
	
</body>
</html>