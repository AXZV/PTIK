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

		.peringatan{
		    font-size: 14px;
		    font-family: arial, helvetica, sans-serif;
		    color: grey;
		    text-align: center;
		    margin-top: 250px;
		    letter-spacing: 3px;


		  }

	</style>
	<body>
	
	<center>

		<form method="POST">

			<?php
				include 'koneksi.php';

				$sql = "SELECT * FROM loker ORDER BY tgl_upload DESC";
				$stmt = mysqli_query($connection,$sql);

				if(mysqli_num_rows($stmt)>0){

				?>

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

					$no=0;
					while ($rows = mysqli_fetch_assoc($stmt)){
					$no++;	
			?>

			<tr>
				<td><?= $no ?></td>
				<td style="width:100px;"><?= $rows['tgl_upload']; ?></td>
				<td style="width:100px;"><?= $rows['perusahaan']; ?></td>
				<td style="width:150px;"><?= $rows['alamat']; ?></td>
				<td style="width:100px;"><?= $rows['posisi']; ?></td>
				<td style="width:180px;"><?= $rows['gaji']; ?></td>
				<td><?= $rows['tgl_kadaluarsa']; ?></td>
				<td width="170"> 
					<a class="btn btn-warning btn-xs" href="kelola_input_loker.php?id=<?= $rows['no']; ?>">Lihat</a>  
					<a class="btn btn-danger btn-xs" href="proses_delete_loker.php?id=<?= $rows['no']; ?>">Delete</a></td>
			</tr>
			<?php

					}

			?>
					
					</table>
			<?php

				}else{

					echo "<p class='peringatan'>. . . . . . . . Tidak ada lowongan kerja yang masuk . . . . . . . .</p>";
				}

			?>
		</form>
		</center>
		
	</body>
	</html>
