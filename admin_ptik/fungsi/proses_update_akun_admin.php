<?php
	session_start();
	include '../config.php';


	if($_POST['password_1'] == $_POST['password']){
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$username =$_POST['username'];

		$password = password_hash($password,PASSWORD_DEFAULT);
		$sql = "UPDATE admin SET nama = '$nama', username = '$username', password = '$password' WHERE no = 1";
		$stmt = mysqli_query($connection,$sql);

		if ($stmt == TRUE) {
			$stmt_1 = mysqli_query($connection,"SELECT * FROM admin WHERE no = 1");
			$hasil = mysqli_fetch_assoc($stmt_1);
			$_SESSION['nama'] = $hasil['nama'];
			header("Location: ../pengaturan.php");
		}else{
			echo 'gagal';
		}
	}
	else{
		header("Location: ../pengaturan.php?pesan=<?php echo 'password tidak sesuai'; ?>");
	}

	

?>