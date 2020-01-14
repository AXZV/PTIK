<?php
include 'koneksi.php';
$hasil=mysqli_query($connection,'SELECT * FROM dosen');
?>
<!DOCTYPE html>
<html>
<head>
	<title> DAFTAR DOSEN </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	*{
		margin: 0px;
		padding:0px;
	}

	.wrapper{
		margin-top: 60px;
	}

    .copyright{

      background-color: #0a0a0a;
      width: 100%;
      height: 30px;
      position: relative;
      top: 265px;
    }

	table
	{
		width: 65%;
		border-collapse: collapse;
		text-align: center;
		border-color: black;
		box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);
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
	input{
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

	input:focus{
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
	<h3> DAFTAR DOSEN </h3>
	</div>

	<center>
	<table border="0" align="center" class="tabel_2">
		<tr>
			<th class="th2">
				<form class="fcari" action="pencarian.php" method="post" enctype="multipart/form-data">
				<input type="text" name="inputcari" placeholder="Cari NIP / Nama.......">
				<input type="submit" name="tombolcari" value="cari" hidden> 
				</form>
			</th>
		</tr>
	</table>
	<table class="table" align="center" height="500">
		<tr>
			<th width="10px">NO</th>
			<th>NIP</th>
			<th>NAMA</th>
			<th width="20px">PHOTO</th>
			<th width="20px">INFO</th>
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