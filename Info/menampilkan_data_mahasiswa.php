<?php
include 'koneksi.php';
$hasil=mysqli_query($connection,'SELECT * FROM mahasiswa');
?>
<!DOCTYPE html>
<html>
<head>
	<title> DAFTAR MAHASISWA </title>
		<title> DAFTAR MAHASISWA </title>
		
<style>
	*{
		margin: 0px;
		padding:  0px;
	}

	table
	{
		width: 65%;
		border-collapse: collapse;
		text-align: center;
		padding: 10px;
		box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);

	
	}
	tr,th
	{
		padding: 10px;
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
		height: 20px;
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
		left: 527px;
		top: 0px;

	}
	h3{
		position: absolute;
		z-index: 10;
		left: 610px;
		top: 10px;
		color: white;
	}

	select{
	border:1px solid #d1d1d1;
    font: bold 14px;
    color:grey;
    width:100px;
    padding: 3px;
    text-shadow:0 2px 3px rgba(0,0,0,0.1);
    box-shadow:0 1px 3px rgba(0,0,0,0.15) inset;
   
	}

	select:focus{
		outline: 0px;
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
	<img class="label1" src="asset/label.png" width="300" height="60"></img>
	<h3> DAFTAR SISWA </h3>
	</div>
	<center>
	<table border="0" align="center" id="tabel_">
		<tr>
			<th class="th2">
				<form class="fcari" action="pencarian_mahasiswa.php" method="post" enctype="multipart/form-data">
				<input type="text" name="inputcari" placeholder="Cari NIM/Nama......">
				<input type="submit" name="tombolcari" value="cari" hidden>
				</form>
				<form class="ta" action="tahun_angkatan.php" method="post">
				<select name="tahun_angkatan">
					<option value="ankatan">- Angkatan -</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
				</select>
					<input id="btn_angkatan" type="submit" value="Tampilkan">
				</form>
			</th>
		</tr>
	</table>
	<table border="0" align="center" class="tabel_dalam">
		<tr>
			<th width="10px">NO</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th width="20px">INFO</th>
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
		</tr>
	<?php } ?>
	</table>
	</center>
	</div>
	 <?php
		 	include '../view/footer.php';
	 ?>

</body>
</html>