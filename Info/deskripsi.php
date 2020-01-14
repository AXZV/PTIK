<?php
include 'koneksi.php';
	$nip=$_GET['nip'];
	$query_mysql=mysqli_query($connection,"SELECT * FROM dosen WHERE nip='$nip'") or die (mysqli_error());
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
		tr
		{
			padding: 30px;
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
		*{
		margin: 0px;
		padding: 0px;
		}
		.wrapper_dalam{
			margin-left: 230px;
			box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);
			width: 900px;
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
	
		<div class="header" style="text-align: center;">
		</div>
		<div class="label">
		<img class="label1" src="asset/label.png" width="300" height="60"></img>
		<h3> INFORMASI </h3>
		</div>
		</div>
		
	
	<?php
	while ($row=mysqli_fetch_array($query_mysql)) 
	{ ?>
		<div class="wrapper_dalam">
		<div class="aside">
		<img src="gambar_dsn/<?php echo $row['gambar'];?>"  width="150px" align="center" style="position: center">
		</div>

		<div class="article">
		<table border="0" class="table" align="left" >
		<tr>
			<th><img src="icon/nip.png" height="30px"> NIP</th>
			<th><?php echo $row['nip'];?></th>
		</tr>
		<tr>
			<th><img src="icon/nama.png" height="30px">	NAMA</th>
			<th><?php echo $row['nama'];?></th>
		</tr>
		<tr>
			<th><img src="icon/nidn.png" height="30px">	NIDN</th>
			<th><?php echo $row['nidn'];?></th>
		</tr>
		<tr>
			<th><img src="icon/kodedosen.png" height="30px">	KODE DOSEN</th>
			<th><?php echo $row['kode_dosen'];?></th>
		</tr>
		<tr>
			<th><img src="icon/gender.png" height="30px">	JENIS KELAMIN</th>
			<th><?php echo $row['jenis_kelamin'];?></th>
		</tr>
		<tr>
			<th><img src="icon/religion.png" height="30px">	AGAMA</th>
			<th><?php echo $row['agama'];?></th>
		</tr>
		<tr>
			<th><img src="icon/email.png" height="30px">	EMAIL</th>
			<th><?php echo $row['email'];?></th>
		</tr>
		<tr>
			<th><img src="icon/pendidikan.png" height="30px">	PENDIDIKAN TERAKHIR</th>
			<th><?php echo $row['pendidikan_terakhir'];?></th>
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