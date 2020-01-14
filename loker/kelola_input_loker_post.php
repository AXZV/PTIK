<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../bootstrap.min.css">
	<style>
			.form-control{
				width: 250px;
			}

			.form-control-dua{
				width: 330px;
			}

			td{
				padding:5px;
			}

			h2{
			color:#64a6fc;
			font-weight: bold;
		}


	</style>
</head>
<body>

	<center>

	<h2>INPUT LOKER</h2>

	<form method="POST" action="proses_loker_upload.php" enctype="multipart/form-data">

	<table>
		<tr>
			<td>
				<input type="text" name="no" hidden>
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama</label>
			</td>
			<td>
				<input type="text" class="form-control input-sm" name="nama" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>NIM</label>
			</td>
			<td>
				<input type="text" name="nim" class="form-control input-sm"> <i style="font-size:14px; color:red;">* isi nim apabila alumni</i>
			</td>
		</tr>
		<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<input type="email" name="email" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>No Telp/Hp</label>
			</td>
			<td>
				<input type="number" name="no_telp" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tgl upload</label>
			</td>
			<td>
				<input type="date" name="tgl_acc" value="<?php echo date("Y-m-d") ?>" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tgl Kadaluarsa</label>
			</td>
			<td>
				<input type="date" name="tgl_kadaluarsa" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Judul Lowongan Kerja</label>
			</td>
			<td>
				<input type="text" name="judul" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama Perusahaan</label>
			</td>
			<td>
				<input type="text" name="perusahaan" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Posisi</label>
			</td>
			<td>
				<input type="text" name="posisi" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Gaji</label>
			</td>
			<td>
				<input type="text" name="gaji" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Alamat</label>
			</td>
			<td>
				<input type="text" name="alamat" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Minimal Pendidikan</label>
			</td>
			<td>
				<input type="text" name="pendidikan" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tipe Pekerjaan</label>
			</td>
			<td>
				<input type="text" name="tipe_pekerjaan" class="form-control input-sm" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Deskripsi Perusahaan</label>
			</td>
			<td>
				<textarea name="deskripsi" cols="40" rows="15" class="form-control-dua input-sm" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>	Keahlian yang dibutuhkan</label>
			</td>
			<td>
				<textarea name="keahlian" cols="40" rows="15" class="form-control-dua input-sm" required></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tanggungjawab kerja</label>
			</td>
			<td>
				<textarea name="tanggungjawab" cols="40" rows="15" class="form-control-dua input-sm"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Kualifikasi</label>
			</td>
			<td>
				<textarea name="syarat_berkas" cols="40" rows="15" required class="form-control-dua input-sm" ></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Logo</label>
			</td>
			<td style="padding:10px;">
				<input type="file" accept="image/*" name="gambar"> <i style="font-size:14px;  color:red;">*ukuran 150x150</i>
			</td>

	</tr>
		<tr>
		<tr>
			<td></td>
			<td colspan="3" style="float:right;">
				<a href="kelola_loker_post.php" class="btn btn-warning	 btn-md" style="margin-right:5px;">Batal</a>
				<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md">
			</td>
			
		</tr>
	</table>

	</form>
	</center>

</body>
</html>