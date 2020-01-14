<!DOCTYPE html>
										<!-- untuk berita diadmin yang sudah masuk -->
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
		}
		td{
			text-align: center;
			padding: 4px 0px 4px 0px;
			height: 60px;
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

		<a class="btn btn-primary" href="kelola_input_loker_post.php" id="input">Input Loker</a>
		<form method="POST">
		<table class="table-hover" border="1" cellpadding="0" cellspacing="1" width="900" cellspacing="4">
			<th>NO</th>
			<th>TANGGAL</th>
			<th>PERUSAHAAN</th>
			<th>ALAMAT</th>
			<th>POSISI</th>
			<th>GAJI</th>
			<th>TANGGAL KADALUARSA</th>
			<th>AKSI</th>

			<?php
				include 'koneksi.php';

				$sql = "SELECT * FROM loker_fix ORDER BY tgl_acc DESC";

				$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));

				$no=0;
				while ($rows = mysqli_fetch_assoc($stmt)):
				$no++;	
			?>

			<tr>
				<td><?= $no ?></td>
				<td style="width:100px;"><?= $rows['tgl_acc']; ?></td>
				<td style="width:100px;"><?= $rows['perusahaan']; ?></td>
				<td style="width:150px;"><?= $rows['alamat']; ?></td>
				<td style="width:100px;"><?= $rows['posisi']; ?></td>
				<td style="width:180px;"><?= $rows['gaji']; ?></td>
				<td><?= $rows['tgl_kadaluarsa']; ?></td>
				<td width="170"> 
					<a class="btn btn-warning btn-xs" href="kelola_select_edit_loker_post.php?id=<?= $rows['no']; ?>">Edit</a>  
					<a class="btn btn-danger btn-xs" href="proses_delete_loker_post.php?id=<?= $rows['no']; ?>" onCLick="alert('loker berhasil dihapus')">Delete</a></td>
			</tr>
			<?php
				endwhile;
			?>
		</table>
		</form>
		</center>
		
	</body>
	</html>
