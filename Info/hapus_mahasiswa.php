			<?php
				include 'koneksi.php';
				$nim=$_GET['nim'];
				mysqli_query($connection,"DELETE FROM mahasiswa WHERE nim='$nim'") or die (mysql_error());
				header("location:opsi_mahasiswa.php");
			?>