<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<style>
			td p{
				font-weight: bold;
				font-size: 15px;
				font-style: italic;
			}

			.wrapper{
				margin-top: 15px;
				border: 2px solid #e8e8e8;
			}

			h1{
				margin-top: 100px;
				font-size:28px;
				font-weight: bold;
				color: #c4c4c4;
				font-style: italic; 
			}

		</style>
		<?php
			include 'config.php';

			ini_set("display_errors",0);
			if($pesan = $_GET['pesan']){
		?>
			<script>alert('password tidak sesuai')</script>
		<?php
			}
		?>
	</head>
	<body>
	<center>
	<h1>Pengaturan Admin</h1>
		<div class="wrapper">
		
		<form method="POST" action="fungsi/proses_update_akun_admin.php">

		<table width="400" height="300">
			<?php
			session_start();
				include 'config.php';

				$sql = "SELECT nama,username,password FROM admin WHERE no = 1";

				$stmt = mysqli_query($connection,$sql) or die(mysql_error($connection));

				while($rows = mysqli_fetch_array($stmt)){
			?>

			<tr>
			<td><p>Edit Nama Admin</p></td> 
			<td><input type="text" name="nama" class="form-control" value="<?php echo $rows['nama']?>" required /></td>
			</tr>
			<tr>
			<td><p>Edit Email</p></td> 
			<td><input type="email" name="username" class="form-control" value="<?php echo $rows['username']?>" required/></td>
			</tr>
			<tr>
			<td><p>Edit Password</p></td> 
			<td><input type="text" name="password_1" class="form-control" required/></td>
			</tr>
			<tr>
			<td><p>Ketik ulang password</p></td> 
			<td><input type="password" name="password" class="form-control" required/></td>
			</tr>
			<tr height="80">
				<td colspan="2"><a style="float:right; margin-right:0px;" href="tampilan_awal.php?nama=<?php echo $_SESSION['nama']?>" class="btn btn-primary">KEMBALI</a><input style="float:right; margin-right:10px;" class="btn btn-success" type="submit" name="submit" value="SIMPAN" required/></td>
				<td></td>
			</tr>
			<?php
				} 


			?>
		</table>
		</form>	
		</div>
	</center>	
	</body>
	</html>
