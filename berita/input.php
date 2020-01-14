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



	</style>
<body>
<form method="post" action="proses_input_berita.php" enctype="multipart/form-data">
<center>
<div>
	<h1>BERITA</h1>

<table height="400">
	<tr>
		<td><p>JUDUL</p></td>
		<td><input class="form-control" type="text" name="judul" required></td>
	</tr>
	<tr>
		<td><p>PENERBIT</p></td>
		<td><input class="form-control" type="text" name="penerbit" required></td>
	</tr>
	<tr>
		<td><p>TANGGAL</p></td>
		<td><input class="form-control" id="date" type="date" name="tanggal" width="100" value="<?php echo date("Y-m-d") ?>" required></td>
	</tr>
	<tr>
		<td><p>ISI</p></td>
		<td><textarea class="form-control" type="text" name="isi" style="height=300px" cols="40" rows="10" required></textarea></td>
	</tr>
	<tr>
		<td><p>GAMBAR</p></td>
		<td><input type="file" name="gambar"></td>
	</tr>
	<tr>
	<td><input type="text" name="no" value="" hidden></td>
	</tr>
	<th colspan="2">
		<input type="submit" value="INPUT" class="btn btn-success">
		
	</th>
</table>
<center>
</form>
</body>
</html>