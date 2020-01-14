<?php
include 'koneksi.php';
$hasil=mysqli_query($connection,'SELECT * FROM mahasiswa');
?>
<!DOCTYPE html>
<html>
<head>
	<title> OPTIONAL MAHASISWA </title>
		<title> OPTIONAL MAHASISWA </title>
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
	.ta
	{
		float: left;
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
	  left:25px;
	}

	.input:hover{
	  background-color: grey;
	}
</style>
</head>
<body>
	<h3> DAFTAR MAHASISWA </h3>
	<table border="0" align="center">
		<tr>
			<th class="th2">
				<form class="fcari" action="kelola_info_cari_mhs.php" method="post" enctype="multipart/form-data">
				<input type="text" name="inputcari" placeholder="Cari Nama Mahasiswa">
				<input type="submit" name="tombolcari" value="cari">
				</form>
				<a href="kelola_input_mhs.php" class="input">INPUT</a>
				<form class="ta" action="kelola_angkatan_mhs.php" method="post">
				<select name="tahun_angkatan">
					<option value="ankatan">- Angkatan -</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
				</select>
					<input type="submit" value="Tampilkan">
				</form>
			</th>
		</tr>
	</table>
	<table border="1" class="table" align="center">
		<tr>
			<th width="10px">NO</th>
			<th>NIM</th>
			<th>NAMA</th>
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
		<td><?php echo $row['nim'];?></td>
		<td><?php echo $row['nama'];?></td>
		<td>
			<a href="deskripsi_mahasiswa.php?nim=<?php echo $row['nim'];?>" target="_blank"><img src="icon/moreinfo.png" height="30px"> </a>
		</td>
		<td>
			<a href="hapus_mahasiswa.php?nim=<?php echo $row['nim'];?>" ><img src="icon/delete.png" height="30px"> </a>
		</td>
		<td>
			<a href="kelola_select_edit_mhs.php?nim=<?php echo $row['nim'];?>" ><img src="icon/edit.png" height="30px"> </a>
		</td>
		</tr>
	<?php } ?>
	</table>

</body>
</html>