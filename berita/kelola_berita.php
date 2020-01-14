<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="../bootstrap.min.css">
	</head>
	<style>
		th{
			text-align: center;
			background-color: #3399ff;
			color: white;
			max-height: 20px;
		}
		td{
			text-align: center;
			padding: 4px 0px 4px 0px;
			height: 100px;
		}

		table{
			margin-top: 100px;
			border:1px solid #3399ff;
		}

		#input{
			position: absolute;
			left: 920px;
			top: 50px;
		}

		.pencarian{
			position: absolute;
			top: 60px;
			left: 430px;
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

	<a class="btn btn-primary" href="input.php" id="input">Input Berita</a>
		<form method="POST">
		<table class="table-hover" border="1" cellpadding="0" cellspacing="1" width="900" cellspacing="4">
			<th>NO</th>
			<th>JUDUL</th>
			<th>PENERBIT</th>
			<th>DESKRIPSI</th>
			<th>TANGGAL</th>
			<th>AKSI</th>


			<?php
				include 'koneksi.php';

				$sql="SELECT * FROM berita1 ORDER BY tanggal DESC";
				$result = mysqli_query($connection,$sql);
				$no=0;

				while ($rows = mysqli_fetch_assoc($result)){
				$no++;
			?>
			<tr>
				<td style="width:50px;"><?php echo $no ?></td>
				<td><?php echo $rows['judul']; ?></td>
				<td style="width:80px;"><?php echo $rows['penerbit']; ?></td>
				<td style="text-align:justify; padding:10px;"><?php echo substr($rows['isi'],0,150);?>....</td>
				<td width="100"><?php echo $rows['tanggal']; ?></td>
				<td width="170"> <a class="btn btn-warning btn-xs" href="kelola_select_edit_berita.php?judul=<?php echo $rows['judul'] ?>">Edit</a>  
					<a class="btn btn-danger btn-xs" href="kelola_hapus_berita.php?judul=<?php echo $rows['judul'] ?>" onClick="alert('Data behasil dihapus')">Delete</a></td>
			</tr>
			<?php

				}
			?>
		</table>
		</form>
		</center>
		
	</body>
	</html>
