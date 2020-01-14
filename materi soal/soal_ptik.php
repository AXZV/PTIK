
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.link{
			margin-top:0px;
			text-align: left;
			font-size: 14px;
			width: 100%;
			margin-left: 0px;
			font-family: sans-serif;
			line-height: 30px;
			color: #353535;

		}

		*{
			margin: 0px;
			padding: 0px;

		}

		.wrapper_materi_soal{
			width: 861px;
			height: 50px;
			border: 1px solid #dddddd;
			padding: 10px 10px 0px 10px;
			border-radius: 0px 0px 0px 30px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 30px 0 rgba(0, 0, 0, 0.19);



		}
		.footer{
			margin-top: 50px;
		}
		.label{
			 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 30px 0 rgba(0, 0, 0, 0.19);
			text-align: center;
			background-color: #60adac;
			width: 863px;
			border-radius: 0px 40px 0px 0px;
			height: 0px auto;
			padding: 10px;
			margin-top: 70px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 24px;
			color: white;

		}

		.wrapper_label{
			margin-top: 50px;
			margin-left: 520px;
		}

		.tanda1{
		position: relative;
		top: 10px;

		}

		.tanda2{
			position: relative;
			right: 0px;
			top: 0px;


		}
		h3{
			position: absolute;
			z-index: 10;
			left: 73px;
			top: -35px;
			color: white;
		}

		.wrapper_materi_soal a{
			color: #6223b0;
			text-decoration: none;
		}


		.wrapper_materi_soal a:hover{
			color: red;
		}



	</style>
</head>
<body>
	<?php
		include '../view/navbar.php';
	?>
	<div class="bg">
	<?php
		include '../view/background.php';
	?>
	
	<div class="wrapper_label">
		<label class="tanda1">
		<img class="tanda2" src="asset/label.png" width="300" height="60"></img>
		<h3> MATERI & SOAL </h3>
		</label>
	</div>

	<center>
	
			<div class="label">
				KUMPULAN MATERI PTIK
			</div>

			<div class="wrapper_materi_soal">		

				<div>
					
					<a class="link" href="https://drive.google.com/drive/folders/0B-O8syMiEpsnSXpvY1RublV4Z3M" target="blank">https://drive.google.com/drive/folders/0B-O8syMiEpsnSXpvY1RublV4Z3M
					</a>
				</div>

			</div>
		

			
			<div class="label">
					KUMPULAN SOAL PTIK
			</div>

			<div class="wrapper_materi_soal">		

				<div>
					<a class="link" href="https://drive.google.com/drive/folders/0B-O8syMiEpsnSXZoZnFPR1V1WGc" target="blank">
						https://drive.google.com/drive/folders/0B-O8syMiEpsnSXZoZnFPR1V1WGc
					</a>

				</div>
			</div>
		

	</center>

			<div class="footer">
			<?php
				include '../view/footer.php';
			?>
			</div>

</body>
</html>