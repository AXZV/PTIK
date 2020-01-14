<!DOCTYPE html>
<html>
<head>
	<title> INPUT BERITA </title>
</head>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<style>
		
		*{

			margin: 0px;
			padding: 0px;

		}

		table{
			/*background-color: #aacbff;*/
			border-radius: 10px;
			margin-top:30px;
			border-top: 2px solid #64a6fc;
		}

		th{
			padding: 20px;

		}

		th input{
			margin-left: 400px;
			
		}

		td input{
			margin-left: 10px;
			
		}
		td p{
			padding: 10px;
			text-align: top;
			 font-family:Tahoma;
			font-weight: bold;
		}

		tr textarea{
			margin-left: 10px;
		}

		.form-control{
			width: 400px;
		}

		#date{
			width: 150px;
		}

		h1{
			color:#64a6fc;
			font-weight: bold;
		}

		.label1{
			outline: none;
			border: 0px;
		}



	</style>
<body>
<form method="post" action="proses_edit_berita.php" enctype="multipart/form-data">
<center>
<div>
	<h1>BERITA</h1>

<table height="400">
	<?php
		include 'koneksi.php';

		$judul = $_GET['judul'];

				$sql="SELECT * FROM berita1 WHERE judul='$judul'";
				$result = mysqli_query($connection,$sql);
		

				while ($rows = mysqli_fetch_assoc($result)){

	?>
	
	<tr>
		<td><p>JUDUL</p></td>
		<td><input class="form-control" type="text" name="judul" value="<?= $rows['judul'] ?>"></td>
	</tr>
	<tr>
		<td><p>PENERBIT</p></td>
		<td><input class="form-control" type="text" name="penerbit" value="<?= $rows['penerbit'] ?>"></td>
	</tr>
	<tr>
		<td><p>TANGGAL</p></td>
		<td><input class="form-control" id="date" type="date" name="tanggal" width="100" value="<?= $rows['tanggal'] ?>"></td>
	</tr>
	<tr>
		<td><p>ISI</p></td>
		<td><textarea class="form-control" type="text" name="isi" style="height=300px" cols="40" rows="10" ><?= $rows['isi'] ?></textarea></td>
	</tr>
	<tr>
		<td>
		<p>GAMBAR</p></td>
		<td style="padding:10px;"><img src="gambar_berita/<?= $rows['gambar']; ?>" width="150"/><br>
		<i><?= $rows['gambar']?></i><input type="file" name="gambar" accept="image/*" style="margin-top:10px;">
		</td>

	</tr>
	<tr>
		<td><input type="text" name="no" value="<?= $rows['id_berita']?>" hidden></td>
	</tr>
	<th colspan="2">
		<input type="submit" value="UPDATE" class="btn btn-success">
		
	</th>
	<?php
		}
	?>
</table>
<center>
</form>
</body>
</html>