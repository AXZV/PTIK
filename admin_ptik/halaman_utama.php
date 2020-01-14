<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/bootstrap.min.js"></script>
		<script src="asset/jquery.min.js"></script>
		<style>
			*{
				margin: 0px;
				padding: 0px;
			}

			.navbar_atas{
				width: 100%;
				height: 60px;
				background-color: #f7f8f9;
				color:white;
				border-bottom: 2px solid #e8e8e8;

			}

			/*Drop Down Menu Profil*/
			.menu_profil{
				position: absolute;
				top: -15px;
				z-index: 1000px;
				left: 1250px;
		
			

			}

			.menu_profil ul li a img{
				margin-top: -30px;
			}

			.menu_profil ul{
		       list-style: none;



		      }

		      .menu_profil ul li{
		        display: block;
		        height: 30px;
		        position: relative;
		        

		      }

		      .menu_profil ul li a{
		        text-decoration: none;
		        margin-top: 0px;
		        padding: 5px;
		        -webkit-transition-duration: 0.2s;
		        transition-duration: 0.2s;
		      }

		      .menu_profil ul ul{

		      	text-align: center;
		        display: none;
		        position: absolute;
		        top: 24px;
		        left: -32px;
		        background-color:#f7f8f9;
		        width: 120px;
		        
		       
		      }
		        .menu_profil ul li:hover ul{
		         display: block;
		        


		      }

		       .menu_profil ul ul li a{
		         display: block;
		         font-style: italic;
		         font-weight: bold;
		         border: 1px solid #e8e8e8;
		         
		    
		      
		      }

		      .menu_profil ul ul li a:hover{
		         display: block;
		         background-color: grey;
		      }

				.side-bar{
				background-color: #5889d8;
				margin-top: 0px;
				width: 200px;
				height: 600px;

				}

			ul{
				position: relative;
				top: 50px;
				list-style-type: none;
			}

			.inti{
	
				max-width: 1166px;
				max-height: 610px;
				margin-left: 200px;
				margin-top: -600px;
			}

			

			iframe{
				border:0px;
			}

			footer{
				background-color: #d6d6d6;
				width: 100%;
				height: 27px;
				margin-top: 0px;
				border-top: 3px solid #d1d1d1;
			}

			.logo{
				float: left;
				margin-left: 40px;
				margin-top: 8px;
			}

			.copyright{
		      background-color: #353535;
		      width: 100%;
		      height: 36px;
		      position: absolute;
		      margin-top: -9px;
		      z-index: 100;
		    }
	
		</style>
		<?php
			session_start();

			if(isset($_SESSION['nama'])){
		?>
				<script>alert("Selamat Datang Admin <?php echo $_SESSION['nama']?>")</script>
		<?php
			}else{
				header('Location: hal_login.php');
			}
		?>

	</head>
	<body>
		<nav class="navbar_atas">
			<div class="logo">
				<img src="img/logo_ptik.png" width="280"></img>
			</div>
			<div class="menu_profil">
				<ul>
					<li>
						<a href="#1">
						<img src="img/profil.png" width="45"></img>
						</a>
						<ul id="1">
			            <li><a href="pengaturan.php" target="frame_1">Pengaturan</a></li>
			            <li><a href="fungsi/logout.php">Logout ...</a></li>
			        </li>
         	 </ul>
					
				</ul>
			</div>
		</nav>

		<div class="side-bar">
			<ul>
				<li><a href="../info/opsi_dosen.php" class="btn btn-primary btn-block" target="frame_1">Dosen</a></li>
				<li><a href="../info/opsi_mahasiswa.php" class="btn btn-primary btn-block" target="frame_1">Mahasiswa</a></li>
				<li><a href="../berita/kelola_berita.php" class="btn btn-primary btn-block" target="frame_1">Berita</a></li>
				<li><a href="../prestasi/kelola_prestasi_akademik.php" class="btn btn-primary btn-block" target="frame_1">Prestasi Akademik</a></li>
				<li><a href="../prestasi/kelola_prestasi_non_akademik.php" class="btn btn-primary btn-block" target="frame_1">Prestasi non-Akademik</a></li>
				<li><a href="../loker/kelola_loker_masuk.php" class="btn btn-primary btn-block" target="frame_1">Loker Masuk</a></li>
				<li><a href="../loker/kelola_loker_post.php" class="btn btn-primary btn-block" target="frame_1">Loker Post</a></li>
				<li><a href="../kritik_saran/kelola_kritik_saran.php" class="btn btn-primary btn-block" target="frame_1">Kritik dan Saran</a></li>
			</ul>
		</div>

		<div class="inti">
			<iframe src="tampilan_awal.php?nama=<?php echo $_SESSION['nama']?>" scrolling="yes" width="1160" height="580" name="frame_1"></iframe>
		</div>

		<div class="copyright"> 
          <p style="text-align:center; padding:3px; color:white; font-family:arial,helvetica, sans-serif; font-size:14px;">
              @copyright <?php echo date('Y');?> Admin ptik te ft Universitas Negeri Semarang
          </p>
        </div>

	</body>
	</html>
