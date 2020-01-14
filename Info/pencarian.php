
<!DOCTYPE html>
<html>
<head>
	<title> DAFTAR DOSEN </title>
		<title> DAFTAR DOSEN </title>
<style>
	table
	{
		width: 65%;
		border-collapse: collapse;
		text-align: center;
		border-color: black;
		box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);
	}
	tr,th
	{
		text-align: center;
	}
	tr:nth-child(even){
		background-color:#e2e2e2;
	}
	tr,th
	{
		padding: 10px;
		text-align: center;
		border-bottom: 1px solid #dddddd;
	}
	th
	{

		text-align: center;
		background-color: #60adac;
		color: white;
	
	}
	{
		text-align: center;
	}
	a
	{
		text-decoration: none;
		color: black;
	}
	.fcari
	{
		float: right;
	}
	.th2
	{
		background-color: rgba(225,225,225,0.0);
	}
	.back
	{
		float: left;
	}

	*{
		margin: 0px;
		padding: 0px;
	}
	.wrapper{
		margin-top: 50px;
	}
	input[type=text]{
    border:1px solid #d1d1d1;
    font: bold 14px;
    color:grey;
    width:150px;
    padding:6px 15px 6px 35px;
    border-radius:20px;
    text-shadow:0 2px 3px rgba(0,0,0,0.1);
    box-shadow:0 1px 3px rgba(0,0,0,0.15) inset;
    -webkit-transition: all 0.7s ease;
	}

	input[type=text]:focus{
    width:200px;
    outline:0px;
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
		left: 610px;
		top: 10px;
		color: white;
	}
</style>
</head>
	<?php
		include '../view/navbar.php';
	?>
	<?php
		include '../view/background.php';
	?>
<body>
	
	<div class="wrapper">
	<div class="label">
	<img class="label1" src="asset/label.png" width="300" height="60"></img>
	<h3> DAFTAR SISWA </h3>
	</div>
	<center>
	<table border="0" align="center">
		<tr>
			<th class="th2">
				<form class="fcari" action="pencarian.php" method="post">
				<input type="text" name="inputcari" placeholder="Cari NIP / Nama.......">
				<input type="submit" name="tombolcari" value="cari" hidden>
				</form>
				<a class="back" href="menampilkan_data.php"><img src="icon/back.png" height="30px"> </a>
			</th>
		</tr>
	</table>
	<table class="table" align="center">
		<tr>
			<th width="10px">NO</th>
			<th>NIP</th>
			<th>NAMA</th>
			<th width="20px">PHOTO</th>
			<th width="20px">INFO</th>
		</tr>
<?php

include 'koneksi.php';
$icari=$_POST['inputcari'];
$tcari=$_POST['tombolcari'];

if ($tcari)
{
	if ($icari != "") 
	{
		$hasil=mysqli_query($connection,"SELECT * FROM dosen where nama like '%$icari%' or nip like '%$icari%'") or die (mysqli_error($connection));
	}
	else
	{
		$hasil=mysqli_query($connection,"SELECT * FROM dosen") or die (mysqli_error());
	}
}
else
{
	$hasil=mysqli_query($connection,"SELECT * FROM dosen") or die (mysqli_error());
}

$cek=mysqli_num_rows($hasil);
if ($cek<1) 
{
	?>
	<tr>
	<td></td>
	<td><img src="icon/warning.png" height="30px"></td>
	<td><img src="icon/warning.png" height="30px"></td>
	<td></td>
	<td></td>
	</tr>
	<?php
}
else
{
	$no=1;
	while ($row=mysqli_fetch_array($hasil)) 
	{ ?>
		<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $row['nip'];?></td>
		<td><?php echo $row['nama'];?></td>
		<td><img src="gambar_dsn/<?php echo $row['gambar'];?>" border="0" height="150px"></td>
		<td>
			<a href="deskripsi.php?nip=<?php echo $row['nip'];?>" target="_blank"><img src="icon/moreinfo.png" height="30px"> </a>
		</td>
		</tr>
		<?php 
	 } 
} ?>
	</table>
	</div>
	<center>
	 <?php
		 	include '../view/footer.php';
	 ?>

</body>
</html>