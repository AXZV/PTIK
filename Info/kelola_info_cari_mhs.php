
<!DOCTYPE html>
<html>
<head>
	<title> DAFTAR MAHASISWA </title>
<style>
	*{
		margin: 0px;
		padding: 0px;
	}
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
	.wrapper{
		margin-top: 50px;
	}

</style>
</head>
<body>
	<center>
	<div class="wrapper">
	<h3> DAFTAR MAHASISWA </h3>
	<table border="0" align="center">
		<tr>
			<th class="th2">
				<form class="fcari" action="pencarian_mahasiswa.php" method="post">
				<input type="text" name="inputcari" placeholder="NIM / Nama">
				<input type="submit" name="tombolcari" value="cari">
				</form>
				<a class="back" href="opsi_mahasiswa.php"><img src="icon/back.png" height="30px"> </a>
			</th>
		</tr>
	</table>
	<table border="1" class="table" align="center">
		<tr>
			<th width="10px">NO</th>
			<th>NIM</th>
			<th>NAMA</th>
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
		$hasil=mysqli_query($connection,"SELECT * FROM mahasiswa where nama like '%$icari%' or nim like '%$icari%'") or die (mysqli_error($connection));
	}
	else
	{
		$hasil=mysqli_query($connection,"SELECT * FROM mahasiswa") or die (mysqli_error());
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
		<td>
			<a href="deskripsi_mahasiswa.php?nim=<?php echo $row['nim'];?>" target="_blank"><img src="icon/moreinfo.png" height="30px"> </a>
		</td>
		<td>
			<a href="kelola_input_mhs.php" ><img src="icon/add.png" height="30px"> </a>
		</td>
		<td>
			<a href="hapus_mahasiswa.php?nim=<?php echo $row['nim'];?>" ><img src="icon/delete.png" height="30px"> </a>
		</td>
		<td>
			<a href="kelola_select_edit_mhs.php?nim=<?php echo $row['nim'];?>" ><img src="icon/edit.png" height="30px"> </a>
		</td>
		</tr>
		<?php 
	 } 
} ?>
	</table>
	</div>
	</center>
</body>
</html>