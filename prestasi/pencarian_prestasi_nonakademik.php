
<!DOCTYPE html>
<html>
<head>
	<title> DAFTAR PENCARIAN NON AKADEMIK </title>
<style>
	table
	{	
		width: 90%;
		border-collapse: collapse;
		text-align: center;
		border-color: black;
		box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);

	}
	tr,th
	{
		padding: 0px 50px;
		text-align: center;
		border-bottom: 1px solid #dddddd;
	}
	
	tr:nth-child(even){
		background-color:#e2e2e2;
	}

	th
	{

		text-align: center;
		background-color: #60adac;
		color: white;
		height: 60px;
	}
	h3
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
	.ta
	{
		float: left;
	}
	.wrapper{
		margin-top: 60px;
	}
	.label{
		position: relative;
		top: 0px;
	}
	.label1{
		position: relative;
		left: 372px;
		top: 0px;

	}
	h3{
		position: absolute;
		z-index: 10;
		left: 450px;
		top: 10px;
		color: white;
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
	.back{
		position: absolute;
		z-index: 10;
		top: 210px;
		left: 110px;
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
	<div class="label">
	<img class="label1" src="asset/label.png" width="600" height="60"></img>
	<h3> DAFTAR PRESTASI AKADEMIK NON MAHASISWA </h3>
	</div>

	<center>
	<a style="" class="back" href="menampilkan_data_prestasi_nonakademik.php"><img src="icon/back.png" height="30px"> </a>
	<table border="0" align="center">
		<tr>
			<th class="th2">
				<form class="fcari" action="pencarian_prestasi_nonakademik.php" method="post">
				<input type="text" name="inputcari" placeholder="Cari Prestasi">
				<input type="submit" name="tombolcari" value="cari" hidden>
				</form>
			</th>
		</tr>
	</table>
	<table class="table" align="center">
		<tr>
			<th width="10px">NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>NAMA KEGIATAN DAN WAKTU PENYELENGGARAAN</th>
			<th>TINGKAT</th>
			<th>PRESTASI YANG DICAPAI</th>
		</tr>
<?php

include 'koneksi.php';
$icari=$_POST['inputcari'];
$tcari=$_POST['tombolcari'];

if ($tcari)
{
	if ($icari != "") 
	{
		$hasil=mysqli_query($connection,"SELECT * FROM nonakademik where nim like '%$icari%' or nama like '%$icari%' or kegiatan like '%$icari%' or tingkat like '%$icari%' or prestasi like '%$icari%' ") or die (mysqli_error($connection));
	}
	else
	{
		$hasil=mysqli_query($connection,"SELECT * FROM nonakademik") or die (mysqli_error());
	}
}
else
{
	$hasil=mysqli_query($connection,"SELECT * FROM nonakademik") or die (mysqli_error());
}

$cek=mysqli_num_rows($hasil);
if ($cek<1) 
{
	?>
	<tr>
	<td></td>
	<td><img src="icon/warning.png" height="30px"></td>
	<td><img src="icon/warning.png" height="30px"></td>
	<td><img src="icon/warning.png" height="30px"></td>
	<td><img src="icon/warning.png" height="30px"></td>
	<td><img src="icon/warning.png" height="30px"></td>
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
		<td><?php echo $row['nim'];?></td>
		<td><?php echo $row['nama'];?></td>
		<td><?php echo $row['kegiatan'];?></td>
		<td><?php echo $row['tingkat'];?></td>
		<td><?php echo $row['prestasi'];?></td>
		</tr>
		<?php 
	 } 
} ?>
	</table>
	</div>
	</center>

	<?php
		include '../view/footer.php';
	?>

</body>
</html>