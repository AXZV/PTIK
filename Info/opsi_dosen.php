<?php
include 'koneksi.php';
$hasil=mysqli_query($connection,'SELECT * FROM dosen');
?>
<!DOCTYPE html>
<html>
<head>
	<title> OPTIONAL DOSEN </title>
		<title> OPTIONAL DOSEN </title>
<style>
	table
	{
		width: 75%;
		border-collapse: collapse;
		text-align: center;
		border-color: black;
		margin-top: 20px;
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

	.input{
	  border-radius: 4px;
	  background-color: #3399ff;
	  border: none;
	  color: white;
	  text-align: center;
	  padding: 10px 20px 10px 20px;
	  transition: all 0.3s;
	  cursor: pointer;
	  position: relative;
	  top: 0px;
	  left:110px;
	}

	.input:hover{
	  background-color: grey;
	}
	
</style>
</head>
<body>
	<h3> DAFTAR DOSEN </h3>
	<table border="0" align="center">
		<tr>
			<th class="th2">
				<form class="fcari" action="kelola_info_cari_dosen.php" method="post" enctype="multipart/form-data">
				<input type="text" name="inputcari" placeholder="Cari Nama Dosen">
				<input type="submit" name="tombolcari" value="cari">
				</form>
				<a href="kelola_input_dosen.php" class="input">INPUT</a>
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
			<th width="20px">DELETE</th>
			<th width="20px">EDIT</th>
		</tr>
	<?php
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
			<a href="hapus_dosen.php?nip=<?php echo $row['nip'];?>" ><img src="icon/delete.png" height="30px"> </a>
		</td>
		<td>
			<a href="kelola_select_edit.php?nip=<?php echo $row['nip'];?>" ><img src="icon/edit.png" height="30px"> </a>
		</td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>