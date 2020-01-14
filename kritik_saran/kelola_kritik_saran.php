<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>	
	<style>

		*
		{
			background-color: #dedede;
		}

		p
		{
			color: #4b4b4b;
			font-family: arial,helvetica,sans-serif;
			font-size: 13px;
		}

		table
		{
			
			padding: 30px 0px 20px 0px;
		}

		label
		{
			color: #2b2b2b;
			font-weight: bold;
			font-family: arial,helvetica,sans-serif;
			font-size: 13px;
		}

		td{
			height:10px;
		}

		.hapus
		{
			margin-top: 20px;
			padding: 5px 10px 5px 10px;
			color: #fff;
			font-size: 16px;
			border: 0;
			background: #077fff;
			cursor: pointer;
			transition: all .3s ease;
			text-decoration: none;
			border-radius: 5px;		
			float:right;

		}


		.hapus:hover
		{
				background:#146fd1;
		}

		.borderbawah{
			border-bottom: 2px solid grey;
			padding-top: 20px;
		}

	</style>
</head>
<body>
	<center>
	<table width="300" cellpadding="0" cellspacing="0">
	<?php
			include 'koneksi.php';

				$sql = "SELECT * FROM kritik_saran ORDER BY tanggal DESC";
				$stmt = mysqli_query($connection,$sql);

				while($hasil = mysqli_fetch_assoc($stmt)){

	?>
		<tr>	
				<td rowspan="2">
					<img src="asset/iconprofil.png" width="70">
				</td>
				<td>
					<label>Tanggal</label>
				</td>
				<td style="width:auto;">
					:
				</td>
				<td>
					<p><?php echo $hasil['tanggal'];?></p>
				</td>
		</tr>
		<tr>
				<td>
					<label>Nama</label>
				</td>
				<td style="width:auto;">
					:
				</td>
				<td>
					<p><?php echo $hasil['nama'];?></p>
				</td>
		</tr>
		<tr>
				<td rowspan="3">
				</td>
				<td>
					<label>Email</label>
				</td>
				<td style="width:auto;">
					:
				</td>
				<td>
					<p><?php echo $hasil['email'];?></p>
				</td>
		</tr>
		<tr>
				<td>
					<label>Komentar</label>
				</td>
				<td style="width:auto;">
					:
				</td>
				<td>
					<p><?php echo $hasil['komentar'];?></p>
				</td>
		</tr>
		<tr>
			<td colspan="3">
			<a class="hapus" href="proses_delete_kritik_saran.php?no=<?= $hasil['no']; ?>">Delete</a>
			</td>
		</tr>
		<tr>
			<td colspan="4"><div class="borderbawah"></div></td>
		</tr>

	<?php

		}
	
	?>
	</table>
	</center>
</body>
</html>