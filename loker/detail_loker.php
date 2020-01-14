<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
		<style>
			.wrapper_dalam_loker{
				font-family: arial, helvetica, sans-serif;
				font-size: 15px;
				width: 700px;
				height: auto;
				margin-top: 200px;
				margin-left: 140px;
		
			}

			.label_header{
				background-color: white;
				padding:20px;
				border: 1px solid #dedede;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 30px 0 rgba(0, 0, 0, 0.1);
			}

			.label_header td{
				padding-left: 35px;
				font-size: 15px;
				font-weight: bold;
				line-height: 2;
				color: grey;

			}

			.judul_loker p{
				color: #5092fc;
				font-size: 20px;
				padding-bottom: 5px;
			}

			.isi_loker{
				margin-top: 30px;
				border: 1px solid #dedede;
				color: grey;
				width: 620px;
				height: auto;
				padding: 60px 40px 60px 40px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 30px 0 rgba(0, 0, 0, 0.1);
				background-color: white;
				line-height: 2;

			}

			.deskripsi_loker{
				width: 620px;
				min-height: 210px;
				height: 0px auto;

			}

			.deskripsi_loker img{
				float: left;
				padding: 0px 65px 5px 0px;
				width: 150px;
			}

			.soft_skill{
				height: 0px auto;
				margin-left: 15px;


			}

			h4{
				margin-top: 25px;
			}

			/*======== area kontent ========*/

			.wrapper_kontent_loker{
				font-family: arial, helvetica, sans-serif;
	
				width: 400px;
				height: 0px auto;
				position: absolute;
				margin-left: 930px;
				margin-top: 200px;

			}

			.kontent_loker_sama{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 30px 0 rgba(0, 0, 0, 0.1);
				width: 300px;
				max-height: 340px auto;
				background-color: white;
				margin-left: 50px;
			}

			.label_kontent_loker_sama{
				color: grey;
				text-align:;
				font-size: 13px;
				padding: 10px 10px 10px 10px;
				border: 1px solid #eeeeee;
			}

			.isi_kontent_loker_sama{
				margin-top: 10px;
				color: grey;
				text-align:;
				font-size: 13px;
				padding: 10px 10px 10px 10px;
			}

			.isi_kontent_loker_sama img{
				width: 60px;
				padding-left: 10px;
			}

			.isi_kontent_loker_sama h2{
				float: right;
				font-size: 16px;
				width: 190px;
				max-height: 10px;
				color: #5092fc;
			}

			.isi_kontent_loker_sama h2:hover{
				font-size: 16.5px;
				color: #ff7b00;
				text-decoration: underline;
			}

			/*=============== area label===============*/

			.label{
		        position: relative;
		  
		        top: 50px;
		        left: 0px;

			    }
			 .label1{
			      position: absolute;
			      right: 520px;
			      top: 20px;

			    }
			 h3{
			      position: absolute;
			      z-index: 10;
			      left: 587px;
			      top: 33px;
			      color: white;
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
  			<h3> LOWONGAN KERJA </h3>
  		</div>

		<div class="wrapper_kontent_loker">
			<div class="kontent_loker_sama">
				<div class="label_kontent_loker_sama">
					<h2 style="color:#cecece;">Lowongan Kerja Terbaru</h2>
				</div>
				<?php
					include 'koneksi.php';

					$sql="SELECT * FROM loker_fix ORDER BY tgl_acc DESC LIMIT 3";
					$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));

					while($rows = mysqli_fetch_assoc($stmt)){
				?>
				<div class="isi_kontent_loker_sama">
					<img src="gambar_loker/<?= $rows['gambar']?>">
					<a href="detail_loker.php?id= <?= $rows['no']?>"><h2><?= $rows['judul']?></h2></a>
				</div>
				<?php
					}
				?>
			</div>
		</div>

		<div class="wrapper_dalam_loker">

			<div class="label_header">
			<table width="700" cellspacing="0" cellpadding="0">
			<?php

				include 'koneksi.php';

				$id = $_GET['id'];

				$sql = "SELECT no,judul,gambar,perusahaan,posisi,pendidikan,gaji,date_format(tgl_kadaluarsa, '%e-%m-%Y')tgl_kadaluarsa,
						tipe_pekerjaan,deskripsi,keahlian,tanggungjawab,syarat_berkas,email,no_telp,
						date_format(tgl_acc, '%e/%m/%Y')tgl_acc FROM loker_fix WHERE no = '$id'";

				$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));

				$rows = mysqli_fetch_assoc($stmt); 

			?>	
				<tr class="judul_loker">
					<td colspan="2">
						<p> <?= $rows['judul']; ?> </p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Perusahaan :  <?= $rows['perusahaan']; ?> </p>
						<p>Posisi : <?= $rows['posisi']; ?></p>
						<p>Min Pendidikan :  <?= $rows['pendidikan']; ?></p>
					</td>
					<td>
						<p>Gaji :  <?= $rows['gaji']; ?></p>
						<p>Dateline : <?= $rows['tgl_kadaluarsa']; ?> </p>
						<p>Tipe Pekerjaan : <?= $rows['tipe_pekerjaan']; ?> </p>
					</td>
				</tr>
			</table>

			</div>

			<div class="isi_loker">
			<div class="deskripsi_loker">
				<img src="gambar_loker/<?= $rows['gambar']; ?>">
				<?= $rows['deskripsi']; ?>
			</div>
				<table>
					<tr>
						<h4>* Keahlian yang dibutuhkan</h4>
					</tr>
					<tr>
						<div class="soft_skill">
							<?= $rows['keahlian']; ?>
						</div>
					</tr>
					<tr>
						<h4>* Tanggungjawab</h4>
					</tr>
					<tr>
						<div class="soft_skill">
							<?= $rows['tanggungjawab']; ?>
						</div>
					</tr>
					<tr>
						<h4>* Kualifikasi</h4>
					</tr>
					<tr>
						<div class="soft_skill">
							<?= $rows['syarat_berkas']; ?>
						</div>
					</tr>
					<tr>
						<h4>* Kontak</h4>
					</tr>
					<tr>
						<div class="soft_skill">
							Email : <?= $rows['email']; ?> 
							<p>No_Telp / Hp : <?= $rows['no_telp']; ?>
						</div>
					</tr>
				</table>

			</div>
		</div>


		<?php
			include '../view/footer.php';
		?>
	</body>
	</html>
