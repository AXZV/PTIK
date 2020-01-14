<!DOCTYPE html>
<html>
<head>
	<title> INPUT DOSEN </title>
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
			border-right:2px solid #ededed;
			border-left: 2px solid #ededed;
			border-bottom: 2px solid #64a6fc;
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
			width: 250px;
		}

		h1{
			color:#64a6fc;
			font-weight: bold;
		}



	</style>
<body>
<form method="post" action="proses_input_mahasiswa.php" enctype="multipart/form-data">
<center>
<div>
	<h1>INFO MAHASISWA</h1>

<table height="400">
	<tr>
		<td><p>NIM</p></td>
		<td><input class="form-control" id="date" type="text" name="nim"></td>
	</tr>
	<tr>
		<td><p>NAMA</p></td>
		<td><input class="form-control" id="date" type="text" name="nama" width="100"></td>
	</tr>
	<tr>
		<td><p>TAHUN ANGKATAN</p></td>
		<td><input class="form-control"  id="date" type="year" name="tahun_angkatan" width="100"></td>
	</tr>
	<tr>
		<td><p>KODE DOSEN WALI</p></td>
		<td><input class="form-control" id="date" type="text" name="kode_dosen" width="100"></td>
	</tr>
	<tr>
		<td><p>NAMA DOSEN WALI</p></td>
		<td><input class="form-control" id="date" type="text" name="nama_dosen_wali" width="100"></td>
	</tr>
	<tr>
		<td><p>TELEPON</p></td>
		<td><input class="form-control" id="date" type="text" name="telepon" width="100"></td>
	</tr>
	<tr>
		<td><p>EMAIL</p></td>
		<td><input class="form-control" id="date" type="text" name="email" width="100"></td>
	</tr>
	<tr>
		<td><p>TANGGAL LAHIR</p></td>
		<td><input class="form-control"  id="date" type="date" name="tanggal_lahir" width="100"></td>
	</tr>
	<tr>
		<td><p>JENIS KELAMIN</p></td>
		<td><input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-Laki <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</td>
	</tr>
	<tr>
		<td><p>GAMBAR</p></td>
		<td><input type="file" name="gambar"></td>
	</tr>
	
	<th colspan="2">
		<input type="submit" value="INPUT" class="btn btn-success">
		
	</th>
</table>
<center>
</form>
</body>
</html>