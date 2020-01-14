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

	<h2>EDIT LOKER</h2>

	<form method="POST" action="proses_edit_loker_post.php" enctype="multipart/form-data">

	<table>
	<?php
				ini_set("display_errors",0);

				include 'koneksi.php';

				$id = $_GET['id'];

				$sql = "SELECT * FROM loker_fix WHERE no ='$id'";
				$stmt = mysqli_query($connection,$sql);

				$rows = mysqli_fetch_assoc($stmt);

	?>
		<tr>
			<td>
				<input type="text" name="no" hidden value="<?= $rows['no']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama</label>
			</td>
			<td>
				<input type="text" class="form-control input-sm" name="nama" required value="<?= $rows['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>NIM</label>
			</td>
			<td>
				<input type="text" name="nim" class="form-control input-sm" value="<?= $rows['nim']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Email</label>
			</td>
			<td>
				<input type="email" name="email" class="form-control input-sm" required value="<?= $rows['email'];?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>No Telp/Hp</label>
			</td>
			<td>
				<input type="number" name="no_telp" class="form-control input-sm" required value="<?= $rows['no_telp']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Tgl upload</label>
			</td>
			<td>
				<input type="date" name="tgl_acc" class="form-control input-sm" required value="<?= $rows['tgl_acc']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Tgl Kadaluarsa</label>
			</td>
			<td>
				<input type="date" name="tgl_kadaluarsa" class="form-control input-sm" required value="<?= $rows['tgl_kadaluarsa']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Judul Lowongan Kerja</label>
			</td>
			<td>
				<input type="text" name="judul" class="form-control input-sm" required value="<?= $rows['judul']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama Perusahaan</label>
			</td>
			<td>
				<input type="text" name="perusahaan" class="form-control input-sm" required value="<?= $rows['perusahaan']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Posisi</label>
			</td>
			<td>
				<input type="text" name="posisi" class="form-control input-sm" required value="<?= $rows['posisi']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Gaji</label>
			</td>
			<td>
				<input type="text" name="gaji" class="form-control input-sm" required value="<?= $rows['gaji'] ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Alamat</label>
			</td>
			<td>
				<input type="text" name="alamat" class="form-control input-sm" required value="<?= $rows['alamat']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Minimal Pendidikan</label>
			</td>
			<td>
				<input type="text" name="pendidikan" class="form-control input-sm" required value="<?= $rows['pendidikan']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Tipe Pekerjaan</label>
			</td>
			<td>
				<input type="text" name="tipe_pekerjaan" class="form-control input-sm" required value="<?= $rows['tipe_pekerjaan']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<label>Deskripsi Perusahaan</label>
			</td>
			<td>
				<textarea name="deskripsi" cols="40" rows="15" class="form-control-dua input-sm" required><?= $rows['deskripsi'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>	Keahlian yang dibutuhkan</label>
			</td>
			<td>
				<textarea name="keahlian" cols="40" rows="15" class="form-control-dua input-sm" required><?= $rows['keahlian'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tanggungjawab kerja</label>
			</td>
			<td>
				<textarea name="tanggungjawab" cols="40" rows="15" class="form-control-dua input-sm"><?= $rows['tanggungjawab'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Kualifikasi</label>
			</td>
			<td>
				<textarea name="syarat_berkas" cols="40" rows="15" required class="form-control-dua input-sm" ><?= $rows['syarat_berkas'] ?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label>Logo</label>
			</td>
			<td style="padding:10px;">
				<img src="gambar_loker/<?= $rows['gambar']; ?>" width="150"/><br>
				<i><?= $rows['gambar']?></i><br>
				<input type="text" name="gambar_upload" value="<?= $rows['gambar']?>" hidden>
			</td>

	</tr>
		<tr>
		<tr>
			<td></td>
			<td colspan="3" style="float:right;">
				<a href="kelola_loker_post.php" class="btn btn-danger btn-md" style="margin-right:5px;">Batal</a>
				<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-md">
			</td>
			
		</tr>
	</table>

	</form>
	</center>

</body>
</html>