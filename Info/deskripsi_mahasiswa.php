<?php
include 'koneksi.php';
	$nim=$_GET['nim'];
	$query_mysql=mysqli_query($connection,"SELECT * FROM mahasiswa WHERE nim='$nim'") or die (mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initia-scale=1">
	<title> DESKRIPSI </title>
	<style>
		.header
		{
			
			padding:7px;

		}
		.aside
		{
			padding: 20px;			
			float: left;
			width:10% ;
			display: inline-table;
			
		}
		.article
		{
			padding: 20px;
			overflow: hidden;
			margin-left: 220px;
		}
		.table
		{
			border-collapse: collapse;
		}
		tr,th
		{
			padding: 5px;
			text-align: left;
			border-bottom: 1px solid #dddddd;
		}
		th
		{
			width:60%;
		}
		h1, th, tr
		{
			font-family: sans-serif ;

		}
		i
		{
			margin-right: 2px;
		}
		.aaaa
		{
			background-color: grey;
		}
		*{
			margin: 0px;
			padding:  0px;
		}
		.wrapper_dalam{
			margin-left: 230px;
			width: 900px;
			box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);
		}
		.wrapper{
			margin-top: 50px;
		}
		.label{
		position: relative;
		top: 0px;
		}
		.label1{
		position: relative;
		left: 525px;
		top: 0px;

		}
		h3{
		position: absolute;
		z-index: 10;
		left: 620px;
		top: 10px;
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
	<div class="wrapper">

	<?php
	while ($row=mysqli_fetch_array($query_mysql)) 
	{ ?>
		
		<div class="header" style="text-align: center;">
		</div>
		<div class="label">
		<img class="label1" src="asset/label.png" width="300" height="60"></img>
		<h3> INFORMASI </h3>
		</div>
		</div>
		
		<div class="wrapper_dalam">	
		<div class="aside" >
		<img src="gambar_mhs/<?php echo $row['gambar'];?>"  width="150px" align="center" style="position: center">
		</div>
		<div class="article">
		<table border="0" class="table" align="left" >
		<tr>
			<th><img src="icon/nip.png" height="30px"> NIM</th>
			<th><?php echo $row['nim'];?></th>
		</tr>
		<tr>
			<th><img src="icon/nama.png" height="30px">	NAMA</th>
			<th><?php echo $row['nama'];?></th>
		</tr>
		<tr>
			<th><img src="icon/year.png" height="30px">	TAHUN ANGKATAN</th>
			<th><?php echo $row['tahun_angkatan'];?></th>
		</tr>
		<tr>
			<th><img src="icon/kodedosen.png" height="30px">	KODE DOSEN</th>
			<th><?php echo $row['kode_dosen'];?></th>
		</tr>
		<tr>
			<th><img src="icon/dosen_wali.png" height="30px">	NAMA DOSEN WALI</th>
			<th><?php echo $row['nama_dosen_wali'];?></th>
		</tr>
		<tr>
			<th><img src="icon/no_telepon.png" height="30px">	NOMOR TELEPON</th>
			<th><?php echo $row['no_telepon'];?></th>
		</tr>
		<tr>
			<th><img src="icon/email.png" height="30px">	EMAIL</th>
			<th><?php echo $row['email'];?></th>
		</tr>
		<tr>
			<th><img src="icon/ultah.png" height="30px">	TANGGAL LAHIR</th>
			<th><?php echo $row['tanggal_lahir'];?></th>
		</tr>
		<tr>
			<th><img src="icon/gender.png" height="30px">	JENIS KELAMIN</th>
			<th><?php echo $row['jenis_kelamin'];?></th>
		</tr>
		</table>
		</div>
		<?php } ?>
	</div>
	</div>
	 <?php
		 	include '../view/footer.php';
	 ?>
</body>
</html>