<?php
include 'koneksi.php';
$hasil=mysqli_query($connection,'SELECT * FROM akademik');
?>
<!DOCTYPE html>
<html>
<head>
	<title> DAFTAR PRESTASI MAHASISWA </title>
		
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
		left:372px;
		top: 0px;

	}
	h3{
		position: absolute;
		z-index: 10;
		left: 472px;
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
	<h3> DAFTAR PRESTASI AKADEMIK MAHASISWA </h3>
	</div>

	<center>
	<table align="center">
		<tr>
			<th class="th2" style="padding:5px;">
				<form class="fcari" action="pencarian_prestasi_akademik.php" method="post" enctype="multipart/form-data">
				<input type="text" name="inputcari" placeholder="Cari keyword Prestasi">
				<input type="submit" name="tombolcari" value="cari" hidden>
			</th>
		</tr>
	</table>
	<table class="table" align="center" width="900">
		<tr>
			<th width="10px">NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>NAMA KEGIATAN DAN WAKTU PENYELENGGARAAN</th>
			<th>TINGKAT</th>
			<th>PRESTASI YANG DICAPAI</th>
		</tr>
	<?php
	$no=1;

	while ($row=mysqli_fetch_array($hasil)) 
	{ ?>
		<tr>

		<td><?php echo $no++;?></td>
		<td><?php echo $row['nim'];?></td>
		<td><?php echo $row['nama'];?></td>
		<td align="justify"><?php echo $row['kegiatan'];?></td>
		<td><?php echo $row['tingkat'];?></td>
		<td><?php echo $row['prestasi'];?></td>
		</tr>
	<?php } ?>
	</table>
	</div>
	</center>

	<?php
		include '../view/footer.php';
	?>

</body>
</html>