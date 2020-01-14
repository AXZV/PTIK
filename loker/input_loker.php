
<!DOCTYPE html>
									<!-- mengimputkan berita -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
			.wrapper_input_luar{
				margin-top: 250px;
				background-color: white;
				width: 660px;
				padding:30px 30px 30px 30px;
				margin-left: 320px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 30px 0 rgba(0, 0, 0, 0.1);
			}

			.wrapper_input_luar table{

				margin-left: 80px;

			}

			.wrapper_input_luar table tr td{

				padding: 10px 10px 0px 0px;
			}

			input[type="text"]{
				  width: 200px;
				  height: 20px;
				  font-size: 13px;
				  padding:2px;
				  background: white;
				  border: 2px solid #ebebeb;
				  border-radius: 4px;
				  -webkit-box-shadow: inset 0 -2px #ebebeb;
				  box-shadow: inset 1 -2px #ebebeb;
				}

				input[type="text"]:focus{
				  border-color: #62c2e4;
				  outline: none;
				  box-shadow: inset 0 -2px #60adac;
				}

				input[type="number"]{
				  width: 200px;
				  height: 20px;
				  font-size: 13px;
				  padding:2px;
				  background: white;
				  border: 2px solid #ebebeb;
				  border-radius: 4px;
				  -webkit-box-shadow: inset 0 -2px #ebebeb;
				  box-shadow: inset 1 -2px #ebebeb;
				}

				input[type="number"]:focus{
				  border-color: #62c2e4;
				  outline: none;
				  box-shadow: inset 0 -2px #60adac;
				}

				input[type="email"]{
				  width: 200px;
				  height: 20px;
				  font-size: 13px;
				  padding:2px;
				  background: white;
				  border: 2px solid #ebebeb;
				  border-radius: 4px;
				  -webkit-box-shadow: inset 0 -2px #ebebeb;
				  box-shadow: inset 1 -2px #ebebeb;
				}

				input[type="email"]:focus{
				  border-color: #62c2e4;
				  outline: none;
				  box-shadow: inset 0 -2px #60adac;
				}

				input[type="date"]{
				  width: 200px;
				  height: 20px;
				  font-size: 13px;
				  padding:2px;
				  background: white;
				  border: 2px solid #ebebeb;
				  border-radius: 4px;
				  -webkit-box-shadow: inset 0 -2px #ebebeb;
				  box-shadow: inset 1 -2px #ebebeb;
				}

				input[type="date"]:focus{
				  border-color: #62c2e4;
				  outline: none;
				  box-shadow: inset 0 -2px #60adac;
				}

				textarea{
				  font-size: 13px;
				  padding:2px;
				  background: white;
				  border: 2px solid #ebebeb;
				  border-radius: 4px;
				  -webkit-box-shadow: inset 0 -2px #ebebeb;
				  box-shadow: inset 1 -2px #ebebeb;
				}

				textarea:focus{
				  border-color: #62c2e4;
				  outline: none;
				  box-shadow: inset 0 -2px #60adac;
				}

				td label{
					font-family: tahoma;
					font-weight: bold;
					font-size: 14px;
					color: #60adac;
				}

				input[type=submit] {
					margin-top: 20px;	
				    width: 80px;
				    height: 30px;
				    color: #fff;
				    font-size: 16px;
				    border: 0;
				    background: #60adac;
				    cursor: pointer;
				    transition: all .3s ease;

				}


				input[type=submit]:hover {
				        background:#407d7c;
				    }


				.batal {
					padding:6px 21px;
					margin-top: 20px;	
				    width: 80px;
				    height: 30px;
				    color: #fff;
				    font-size: 16px;
				    border: 0;
				    background: #c44934;
				    cursor: pointer;
				    transition: all .3s ease;
				    text-decoration: none;

				}


				.batal:hover {
				        background:#a13d2b;
				    }

				.label{
				        position: relative;
				  
				        top: 80px;
				        left: 0px;

			   		 }

			 	.label1{
					    position: absolute;
					    width: 350px;
					    right: 502px;
					    top: 20px;

			    	}

				 h3{
				      position: absolute;
				      z-index: 10;
				      left: 552px;
				      top: 33px;
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

	<div class="label">
  		<img class="label1" src="asset/label.png" width="300" height="60"></img>
  			<h3> FORM LOWONGAN KERJA </h3>
  	</div>

	<div class="wrapper_input_luar">
	<form method="POST" action="proses_input_loker.php" enctype="multipart/form-data">

	<table>
		<tr>
			<td>
				<input type="text" name="no_id" hidden>
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama</label>
			</td>
			<td>
				<input type="text" name="nama" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>NIM</label>
			</td>
			<td>
				<input type="number" name="nim"> <i style="font-size:14px; color:red;">* isi nim apabila alumni</i>
			</td>
		</tr>
		<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<input type="email" name="email" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>No Telp/Hp</label>
			</td>
			<td>
				<input type="number" name="no_telp" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tgl upload</label>
			</td>
			<td>
				<input type="date" name="tgl_upload" value="<?php echo date("Y-m-d") ?>" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tgl Kadaluarsa</label>
			</td>
			<td>
				<input type="date" name="tgl_kadaluarsa" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Judul Lowongan Kerja</label>
			</td>
			<td>
				<input type="text" name="judul" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama Perusahaan</label>
			</td>
			<td>
				<input type="text" name="perusahaan" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Posisi</label>
			</td>
			<td>
				<input type="text" name="posisi" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Gaji</label>
			</td>
			<td>
				<input type="text" name="gaji" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Alamat</label>
			</td>
			<td>
				<input type="text" name="alamat" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Minimal Pendidikan</label>
			</td>
			<td>
				<input type="text" name="pendidikan" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tipe Pekerjaan</label>
			</td>
			<td>
				<input type="text" name="tipe_pekerjaan" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Deskripsi Perusahaan</label>
			</td>
			<td>
				<textarea name="deskripsi" cols="40" rows="15" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>	Keahlian yang dibutuhkan</label>
			</td>
			<td>
				<textarea name="keahlian" cols="40" rows="15" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tanggungjawab kerja</label>
			</td>
			<td>
				<textarea name="tanggungjawab" cols="40" rows="15"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Kualifikasi</label>
			</td>
			<td>
				<textarea name="syarat_berkas" cols="40" rows="15" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Logo</label>
			</td>
			<td>
				<input type="file" name="gambar"> <i style="font-size:14px;  color:red;">*ukuran 150x150</i>
			</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="3" style="float:right;">
				<a class="batal" href="lowongan_kerja.php">Batal</a>
				<input type="submit" name="submit" value="kirim" onCLick="alert('Loker anda sudah terkirim')">
			</td>
			
		</tr>
	</table>
	</form>
	</div>


		<?php
			include '../view/footer.php';
		?>
</body>
</html>