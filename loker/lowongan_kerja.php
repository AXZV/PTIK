<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		*{
			padding: 0px;
			margin: 0px;
		}

		table{
			
			font-size: 15px;
			font-weight: bold;
			color: grey;
			background-color: white;
			font-family: arial, helvetica, sans-serif;
			padding: 20px 20px 0px 20px;

		}

		table tr td{
			padding: 4px 8px 4px 8px;

		}

		h6{
			font-size: 14px;
			text-align: center;
		}

		td a{
			padding: 4px 7px 4px 7px;
			float: right;
			font-weight: normal;																										
		}

		 .btn-selengkapnya {
          float: right;
          margin-right: 10px;
          background-color: #60adac;
          text-decoration: none;
          color: white;
          font-family: sans-serif;
          font-size: 14px;
          padding: 4px;
          border-radius:2px;
        }

        .btn-selengkapnya:hover{
          background-color: #ff7b00;
        }

		.border_tabel{
			border-bottom: 2px solid #cecece;
			width: 520px;

		}

		.judul_loker{
			color: #ff7b00;
			font-size: 20px;
			font-weight: bold;
		}

		.wrapper_kontent_loker{
			position:fixed;
			left: 700px;
			top: 250px;
			z-index: -1;
			width: 600px;
			height: 480px;
			border-left: 1px solid #dedede;

		}

		.wrapper_loker{
			margin-top: 200px;
			margin-left: 140px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 30px 0 rgba(0, 0, 0, 0.1);
			width: 520px;

		}

		.input_loker{
			position: fixed;
			width: 400px;
			margin-left: 840px;
			margin-top: 250px;
			z-index: 1000;

		}
		.input_loker p{
			font-family: sans-serif;
			line-height: 1.5;
			letter-spacing: 1.5px;
			color:grey;
		}

		.input_loker a{
			position:relative;
			top: 30px;
			letter-spacing: 2px;
			margin-left: 123px;
			font-family: sans-serif;
			font-weight: bold;
			border-bottom: 4px solid #bebebe;
			text-decoration: none;
			color: white;
			width: 30px;
			padding: 10px;
			background: #60adac;
			z-index: 40;
			cursor: pointer;

		}

		.input_loker a:hover{
			background: #367c7b;
		}

		  /*-------------Area Label--------------*/

		.label{
        position: relative;
  
        top: 50px;
        left: 0px;

	    }
	    .label1{
	      position: absolute;
	      right: 520px;
	      top: 20px;

	    }
	    h3{
	      position: absolute;
	      z-index: 10;
	      left: 587px;
	      top: 33px;
	      color: white;
	    }

	    /*-------------Area Searching--------------*/

	     .label_content{
	      border-bottom:2px solid #60adac;
	      width: 210px;
	      height: 15px;
	      padding: 5px;
	      position: fixed;
	      left: 1030px;
	      top:180px;
	      color: #60adac;
	    }


	     .fcari{
	      position: relative;
	      top: 0px;
 
	    }

	    input{
		    position: fixed;
		    left: 1040px;
		    top: 215px;
		    z-index: -10px;
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



	</style>
</head>
<body>
	<?php
		include '../view/navbar.php';
	?>
	<?php
		include '../view/background.php';
	?>

	<div class="label">
  		<img class="label1" src="asset/label.png" width="300" height="60"></img>
  			<h3> LOWONGAN KERJA </h3>
  	</div>

  	<form class="fcari" action="lowongan_kerja.php" method="GET">
        <div class="label_content">
          <h4>Cari</h4>
        </div>
        <input type="text" name="inputcari" placeholder="judul loker/ perusahaan/ posisi . . . . . . .">
        <input type="submit" name="tombolcari" value="cari" hidden> 
 	 </form>

	<div class="wrapper_kontent_loker">
	</div>	
		<div class="input_loker">
			<p style="text-align: center;"> Silahkan masukkan lowongan kerja baik anda alumni maupun anda orang lain yang bekerja instansi/ perusahaan</p> 
			<a href="input_loker.php">Tambah Loker</a>
		</div>
	

	<div class="wrapper_loker">

	<?php

		ini_set('display_errors',0);

		include 'koneksi.php';

		$cari = $_GET['inputcari'];

		if(isset($cari)){

		$sql = "SELECT * FROM loker_fix WHERE perusahaan LIKE '%$cari%' or posisi LIKE '%$cari%' or judul LIKE '%$cari%'";

		$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));

		if(mysqli_num_rows($stmt) > 0){

			while ($rows = mysqli_fetch_assoc($stmt)){

			?>

			<div class="border_tabel">
			<table width="520">
				<tr>
					<td colspan="3" class="judul_loker">
						<?= $rows['judul']; ?>
					</td>
				</tr>	
				<tr>
					<td rowspan="4">
						<img src="gambar_loker/<?= $rows['gambar']; ?>" width="55">
					</td>
					<td>
						Perusahaan
					</td>
					<td>
						<?= $rows['perusahaan']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Posisi
					</td>
					<td>
						<?= $rows['posisi']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Gaji
					</td>
					<td>
						<?= $rows['gaji']; ?>
					</td>
				</tr>

				<tr>
					
					<td>
						Dateline
					</td>
					<td>
						<?= $rows['tgl_kadaluarsa']; ?>

					</td>
				</tr>
				<tr>
			<td colspan="1"><h6><?= $rows['tgl_acc']; ?></h6></td>
			<td>
			</td>
			<td>
				<a class="btn-selengkapnya" href="detail_loker.php?id= <?= $rows['no']?>">Selengkapnya</a>
			</td>
		</tr>
			</table>
			</div>

			<?php

				}

			}else{

				 echo "<p class='peringatan'>. . . . . . .Tidak menemukan yang anda cari. . . . . . .</p>";
			}


		}else{

		$sql = "SELECT no,judul,gambar,perusahaan,posisi,gaji,date_format(tgl_kadaluarsa, '%e-%m-%Y')tgl_kadaluarsa,date_format(tgl_acc, '%e/%m/%Y')tgl_acc FROM loker_fix ORDER BY tgl_acc DESC";

		$stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));

		while ($rows = mysqli_fetch_assoc($stmt)){
	?>
	<div class="border_tabel">
	<table width="520">
		<tr>
			<td colspan="3" class="judul_loker">
				<?= $rows['judul']; ?>
			</td>
		</tr>	
		<tr>
			<td rowspan="4">
				<img src="gambar_loker/<?= $rows['gambar']; ?>" width="55">
			</td>
			<td>
				Perusahaan
			</td>
			<td>
				<?= $rows['perusahaan']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Posisi
			</td>
			<td>
				<?= $rows['posisi']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Gaji
			</td>
			<td>
				<?= $rows['gaji']; ?>
			</td>
		</tr>

		<tr>
			
			<td>
				Dateline
			</td>
			<td>
				<?= $rows['tgl_kadaluarsa']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="1"><h6><?= $rows['tgl_acc']; ?></h6></td>
			<td>
			</td>
			<td>
				<a class="btn-selengkapnya" href="detail_loker.php?id= <?= $rows['no']?>">Selengkapnya</a>
			</td>
		</tr>
	</table>
	</div>
		<?php
			}
		}
		?>

	</div>


	<?php
		include '../view/footer.php';
	?>

</body>
</html>