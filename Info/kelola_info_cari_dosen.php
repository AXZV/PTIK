
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
	}
	tr,th
	{
		text-align: center;
	}
	th
	{
		background-color: #3399ff;
		color: white;
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
		background-color: white;
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
</style>
</head>
<body>
	<center>
	<div class="wrapper">
	<h3> DAFTAR DOSEN </h3>
	<table border="0" align="center">
		<tr>
			<th class="th2">
				<form class="fcari" action="pencarian.php" method="post">
				<input type="text" name="inputcari" placeholder="NIP / Nama">
				<input type="submit" name="tombolcari" value="cari">
				</form>
				<a class="back" href="opsi_dosen.php"><img src="icon/back.png" height="30px"> </a>
			</th>
		</tr>
	</table>
	<table border="1" class="table" align="center">
		<tr>
			<th width="10px">NO</th>
			<th>NIP</th>
			<th>NAMA</th>
			<th width="20px">PHOTO</th>
			<th width="20px">INFO</th>
			<th width="20px">INSERT</th>
			<th width="20px">DELETE</th>
			<th width="20px">EDIT</th>
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
		<td>
			<a href="kelola_input_dosen.php"><img src="icon/add.png" height="30px"> </a>
		</td>
		<td>
			<a href="hapus_dosen.php?nip=<?php echo $row['nip'];?>" ><img src="icon/delete.png" height="30px"> </a>
		</td>
		<td>
			<a href="kelola_select_edit.php?nip=<?php echo $row['nip'];?>" ><img src="icon/edit.png" height="30px"> </a>
		</td>
		</tr>
		<?php 
	 } 
} ?>
	</table>
	</div>
	<center>

</body>
</html>