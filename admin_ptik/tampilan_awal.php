<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<style>
			table{
				margin-top: 80px;
			}
			.icon td{
				border:1px solid #e8e8e8;
				padding: 15px;
				-webkit-transition-duration:0.2s;
				transition-duration:0.2s;
			}

			.keterangan td{
				background-color: #f7f8f9;
				text-align: center;
				font-weight: bold;
				padding: 5px;
				border:1px solid #e8e8e8;
			}

			.icon td:hover{
				border:1px solid #e8e8e8;
				background-color: #e2e2e2;
				padding: 15px;
			}

			.p_awal{
				margin-left: 30px;
			}

			.p_awal h1{
				text-decoration: underline;
				font-family:sans-serif;
				color: grey;
				font-style: italic;
				font-size: 35px;
				text-transform: uppercase;
			}

			.p_awal p{
				font-size: 18px;
			}

		</style>
	</head>
	<body>
	<div class="p_awal">

		<h1>HAY
			<?php
			echo $_GET['nama'];
			?>
		</h1>
		<p>Anda telah masuk halaman utama admin ptik silahkan kelola dengan klik control panel yang ada dibawah ini.</p>

	</div>

	<center>
		<table cellpadding="1" cellspacing="0">
			<tr class="keterangan">
				<td>Mahasiswa</td>
				<td>Dosen</td>
				<td>Prestasi Akademik</td>
				<td>Prestasi non Akademik</td>
				<td>Berita</td>
			</tr>
			
			<tr class="icon">
				<td><a href="../info/opsi_dosen.php"><img src="img/tampilan_awal/Graduated_Icon_256.png" width="100"></a></td>
				<td><a href="../info/opsi_mahasiswa.php"><img src="img/tampilan_awal/e-dosen.png" width="100"></a></td>
				<td><a href="../prestasi/kelola_prestasi_akademik.php"><img src="img/tampilan_awal/mahasiswa-berprestasi.png" width="120"></a></td>
				<td><a <a href="../prestasi/kelola_prestasi_non_akademik.php"><img src="img/tampilan_awal/piala12.png" width="100"></a></td>
				<td><a href="../berita/kelola_berita.php"><img src="img/tampilan_awal/newsicon.png" width="120"></a></td>
			</tr>
			<tr class="keterangan">
				<td>Loker Masuk</td>
				<td>Lowongan Kerja</td>
				<td>Kritik & Saran</td>
			</tr>
			<tr class="icon">
				<td><a href="../loker/kelola_loker_masuk.php"><img src="img/tampilan_awal/loker_masuk.png" width="100"></a></td>
				<td><a href="../loker/kelola_loker_post.php"><img src="img/tampilan_awal/loker.png" width="100"></a></td>
				<td><a href="../kritik_saran/kelola_kritik_saran.php"><img src="img/tampilan_awal/komentar.png" width="120"></a></td>
			</tr>
		</table>
	</center>

	</body>
	</html>
