<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	 <script src="../jquery-3.1.1.min.js"></script>
	 <script>
	//membuat algoritma saat discrolll akan menu berubah bentuk
	$(document).on('scroll',function(){
		if($(this).scrollTop() > 1){
			$('header').addClass('sticky'); //menambah class pada header
		}else{
			$('header').removeClass('sticky');
		}
		});
	</script>

	<style>
		/*css area Navbar*/
		*{
			margin:0px;
			padding: 0px;
		}

	#nav_a{
		width: 100%;
		margin: 0;
		padding: 0;
	}


	header {
		transition: 0.4s;
	}
	
	header{
		background : #60adac;
		width: 100%;
		height: 70px;
		line-height: 70px;
		position: relative;
		z-index: 10;
		box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.5);

	}

	#nav_b{
		width: 100%;
		max-width: 1208px;
		margin-left:60px;

	}

	nav{
		float: right;
		text-decoration: bold;
		font-family: "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, Verdana, sans-serif;
	}

	/*desain dropdown*/x
	#data{
		background-color: blue;
		position: absolute;
		z-index: 1;
		height: 80px auto;
		list-style-type: none;
		padding: 0px;
		width: 0px auto;

	}

	#data li{
		margin-top: -50px;
		padding: 15px;
		height: 50px;
		text-transform: none;
		width: 0px auto;
	}

	#data li a {
		-webkit-transition-duration:0.0s;
		transition-duration:0.0s;
		padding: 5px;
		background-color: red;
		width: 100px;

	}

	#data li a:hover{
		background-color: blue;
		text-decoration: none;

	}



	/*menu dropdown*/
	nav a{
		color: white;
		text-decoration: none;
		font-size: 15px;
		letter-spacing: 3px;
		margin-left: -3px;
		padding-top: 30px;
		padding-bottom: 27px;
		padding-left: 5px;
		padding-right: 5px;
		-webkit-transition-duration:0.2s;
		transition-duration:0.2s;
	}

	nav a:hover{
		color: #FFFFFF;
		border-bottom: 3px solid white;
		padding-top: 7px;
		padding-bottom: 20px;
		padding-left: 5px;
		padding-right: 5px;
	}



	header.sticky{
		height: 0px;
		line-height: 0px;

	}

	header.sticky nav a{
		color: white;
		text-decoration: none;
		font-size: 12px;
		letter-spacing: 3px;
		margin-left: -3px;
		padding-top: 0px;
		padding-bottom: 0px;
		padding-left: 5px;
		padding-right: 5px;
		-webkit-transition-duration:0.2s;
		transition-duration:0.2s;
		margin-left: -150px;

	}


	header.sticky nav a:hover{
		color: white;
		border-bottom: 3px solid white;
		padding-top: 5px;
		padding-bottom: 7px;
		padding-left: 5px;
		padding-right: 5px;
	}

	#gambar_logo{
		height: 50px;
		width: 300px;
		margin-left: 5px;
		margin-top: 7px;
	}

	header.sticky #gambar_logo{
		width:150px;
		height: 25px;
		margin-top: 7px;
		-webkit-transition-duration:0.4s;
		transition-duration:0.4s;
	}

	/*dropdown data*/
	.tombol_dropdown {
	    background-color: rgba(225,225,225,0.0);;
	    color: white;
	    padding:0px 8px 21.5px 8px;
	    font-size: 15px;
	    border: none;
	    cursor: pointer;
	    -webkit-transition-duration:0.2s;
		transition-duration:0.2s;
		outline: none;
		}

	.dropdown_menu {
	    position: relative;
	    display: inline-block;
	    height: 100px;

	}

	.pilihan {
	    display: none;
	    position: absolute;
	    min-width: 160px;
	    padding: 0px;
	    width: 170px;
	    padding-top:0px;
	    height: 100px;
	
	}

	.pilih1 {
		background-color: #60adac;
	    color: white;
	    padding: 0px;
	    text-decoration: none;
	    display: block;
	    height: 50px;
	    padding-top: 0px;
	    padding-right: 10px;
		padding-left: 10px;
		font-size: 14px;

	}

	.pilih1:hover {
		background-color: #60d6c2;
		color: white;
		padding-bottom: 0px;
		padding-top: 0px;
		padding-right: 10px;
		padding-left: 10px;


	}	

	.dropdown_menu:hover .pilihan {
	    display: inline;
	    background-color: rgba(225,225,225,0.1);

	}

	.dropdown_menu:hover .tombol_dropdown {
	    background-color: #60adac;
	    border-bottom: 3px solid white;
	
	}

	header.sticky .tombol_dropdown{
		height: 0px;
		width: 0px;
		background-color: rgba(225,225,225,0.1);
		margin-left: -150px;
	}



	</style>
</head>
<body>
	<div id="nav_a">
			<header>
				<div id="nav_b">
				<a href="../index.php"><img id="gambar_logo" src="asset/logo_ptik.png" /></a>

					<nav id="menu">
						<a href="../index.php">HOME</a>
						<a href="../profil/profil.php">PROFIL</a>
						<a href="../berita/berita.php">BERITA</a>
						<a href="../loker/lowongan_kerja.php">LOKER</a>
							<div class="dropdown_menu">
							  <button class="tombol_dropdown">DATA</button>
							  <div class="pilihan">
							    <a class="pilih1" href="../info/menampilkan_data.php">Data Dosen</a>
							    <a class="pilih1" href="../info/menampilkan_data_mahasiswa.php">Data Mahasiswa</a>
							    <a class="pilih1" href="../materi soal/soal_ptik.php">Materi & Soal</a>
							  </div>
							</div>
							<div class="dropdown_menu">
								<button class="tombol_dropdown">PRESTASI</button>
								<div class="pilihan">
								<a class="pilih1" href="../prestasi/menampilkan_data_prestasi_akademik.php">Akademik</a>
								<a class="pilih1" href="../prestasi/menampilkan_data_prestasi_nonakademik.php">Non Akademik</a>
								</div>
							</div>
					</nav>
				</div>
			</header>
	</div>					
</body>
</html>