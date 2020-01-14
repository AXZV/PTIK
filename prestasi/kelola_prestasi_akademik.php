<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="../bootstrap.min.css">
	</head>
	<style>
		
		*{
			padding: 0px;
			margin: 0px;
		}

		th{
			text-align: center;
			background-color: #3399ff;
			color: white;
		}

		td{
			text-align: center;
		}

		table{
			margin-top: 100px;
			border:1px solid #3399ff;
		}

		#input{
			position: absolute;
			left: 960px;
			top: 50px;
		}

		.pencarian{
			position: absolute;
			top: 60px;
			left: 72px;
		}

		#search{
			display: inline-block;
			position: absolute;
			top: 2px;
			left: 200px;
		}

	</style>
	<body>
	
	<center>
	<form action="kelola_pencarian_prestasi_akademik.php" method="POST">
	<div class="pencarian">
	<input type="text" class="form-control"  name="pencarian" placeholder="nim/nama/tingkat/prestasi" required>
	<input type="submit" class="btn btn-primary btn-sm" id="search" name="cari" value="cari">
	</div>
	</form>

	<a class="btn btn-primary" href="kelola_input_prestasi_akademik.php" id="input">Input Prestasi</a>
		<form method="POST">
		<table class="table-hover" border="1" cellpadding="0" cellspacing="1" width="1000" cellspacing="4">
			<th>NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>KEGIATAN</th>
			<th>TINGKAT</th>
			<th>PRESTASI</th>
			<th>AKSI</th>


			<?php
				include 'koneksi.php';

				$sql="SELECT * FROM akademik";
				$result = mysqli_query($connection,$sql);
				$no=0;

				while ($rows = mysqli_fetch_assoc($result)){
				$no++;
			?>
			<tr>
				<td style="width:50px;"><?php echo $no ?></td>
				<td style="padding: 0px 10px 0px 10px;"><?php echo $rows['nim']; ?></td>
				<td style="width:100px; padding:0px 10px 0px 10px;"><?php echo $rows['nama']; ?></td>
				<td style="text-align:justify; padding:10px;"><?php echo substr($rows['kegiatan'],0,150);?>....</td>
				<td width="100"><?php echo $rows['tingkat']; ?></td>
				<td width="100"><?php echo $rows['prestasi']; ?></td>
				<td width="170"> <a class="btn btn-warning btn-xs" href="kelola_edit_prestasi_akademik.php?id=<?php echo $rows['id'] ?>">Edit</a>  
					<a class="btn btn-danger btn-xs" href="proses_hapus_prestasi_akademik.php?id=<?php echo $rows['id'] ?>" onClick="alert('Data behasil dihapus')">Delete</a></td>
			</tr>
			<?php

				}
			?>
		</table>
		</form>
		</center>
		
	</body>
	</html>
