<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		tr{
			padding-left: 50px;
		}

		th input{
			margin-left: 560px;
			padding-bottom: 30px;
			padding-left: 50px;
			
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
			width: 300px;
		}

		h1{
			color:#64a6fc;
			font-weight: bold;
		}



	</style>
<body>
<form method="post" action="proses_edit_prestasi_akademik.php">
<center>
<?php
				include 'koneksi.php';

				$id = $_GET['id'];

				$sql="SELECT * FROM akademik WHERE id = '$id'";
				$result = mysqli_query($connection,$sql);
		

				while ($rows = mysqli_fetch_assoc($result)){
				
			?>
<div>
	<h1>PRESTASI AKADEMIK</h1>

<table height="400" width="660">
	<tr>
		<td><p>NIM</p></td>
		<td><input class="form-control" type="text" id="date" name="nim" value="<?php echo $rows['nim']?>"></td>
	</tr>
	<tr>
		<td><p>NAMA</p></td>
		<td><input class="form-control" type="text" id="date" name="nama"value="<?php echo $rows['nama']?>"></td>
	</tr>
	<tr>
		<td><p>NAMA KEGIATAN & WAKTU KEGIATAN</p></td>
		<td><textarea class="form-control" type="text" id="date" name="kegiatan" style="height=300px" cols="40" rows="7" placeholder=""><?php echo $rows['kegiatan']?></textarea></td>
	</tr>
	<tr>
		<td><p>TINGKAT</p></td>
		<td><input class="form-control" type="text" id="date" name="tingkat" value="<?php echo $rows['tingkat']?>"></td>
	</tr>
	<tr>
		<td><p>PRESTASI YANG DICAPAI</p></td>
		<td><input class="form-control" type="text" id="date" name="prestasi" value="<?php echo $rows['prestasi']?>"></td>
	</tr>
	<tr>
	<td><input type="text" name="id" value="<?php echo $rows['id']?>" hidden></td>
	</tr>
	
	<th colspan="2" style="padding:10px 0px 10px 0px;">
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