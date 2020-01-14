
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		div p{
			margin-top:30px;
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

		.wrapper_berita{
			width: 803px;
			height: 1000px;
			margin-left: 200px;
			padding: 50px;
			background-color: white;
			/*background-color: rgba(225, 225, 225,0.2);*/
			box-shadow: 0 0px 30px 0 rgba(0, 0, 0, 0.2);
			border-bottom: 5px solid #60adac;
	/*		border-left: 1px solid #ccc;
			border-right: 1px solid #ccc;*/
			
		}
		.footer{
			margin-top: -150px;
			height:0px;
			width: 1366px;
			margin-left: 77px;
		}

			.copyright{
	      background-color: #353535;
	      width: 100%;
	      height: 20px auto;
	      position: relative;
	      top: 193px;
	      padding: 0px;
	    }

		.judul{
			text-align: center;
			background-color: #60adac;
			width: 863px;
			height: 0px auto;
			padding: 20px;
			margin-left: 200px;
			margin-top: 100px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 24px;
			color: white;
		
		}



	    h4{
	      font-size: 21px;
	      margin-top: -7px;

	    }


	    }
	    ul p{
	      font-weight: bold;
	      font-family: sans-serif;
	      font-size: 16px;


	  
	    }
	    li{
	      text-transform: lowercase;
	      
	    }


	    ul{
	      margin: 0px;
	      padding: 0px;
	    }

	    label{
	      display: block;
	      cursor: pointer;
	      width: 39px;
	      margin-bottom: 20px;

	    }
	    label.last{
	      border-bottom: 1px solid #fff;
	    }

	    ul ul li{
	      padding: 3px;
	      width: 200px;
	      margin-left: 25px;
	    }


	    input[type="checkbox"]{
	      position: absolute;
	      left: -9999px;
	    }

	    input[type="checkbox"] ~ ul{
	      height: 0;
	      transform: scaleY(0);
	    }

	    input[type="checkbox"]:checked ~ ul{
	      height: 100%;
	      transform-origin: top;
	      transition: transform 0.1s ease-out;
	      transform: scaleY(1); 
	    }
	    input[type="checkbox"]:checked + label{
	      border-bottom: 1px solid #fff;
	    }

		.detail{
			margin-top: -50px;
			padding-bottom: 40px;
			margin-left: -100px;
			color: grey;
		}

		.detail li{
			display: inline;
			margin-left: 50px;
		}

		.detail li img{
			position: relative;
			left: 10px;
			top: 10px;
		}

		.wrapper_semua{
			margin-left: -100px;
			margin-top: 200px;

		}

		

		.label{
        position: relative;
  
        top: 50px;
        left: 0px;

	    }
	    .label1{
	      position: absolute;
	      right: 535px;
	      top: 20px;

	    }
	    h3{
	      position: absolute;
	      z-index: 10;
	      left: 590px;
	      top: 35px;
	      color: white;
	    }

	   /*kontent kiri*/ 

	     .label_content{
      border-bottom:2px solid #60adac;
      width: 210px;
      height: 15px;
      padding: 5px;
      position: absolute;
      left: 1030px;
      top:159px;
      color: #60adac;
    }

    .label_content2_luar{
      position: relative;
      top: 0px;
    }

     .label_content2{
      border-bottom:2px solid #60adac;
      width: 210px;
      height: 15px;
      padding: 5px;
      position: absolute;
      left: 1030px;
      top:260px;
      color: #60adac;
    }

    .wrapper_headline_luar{
        position: relative;
        top: 0px;
    }

    .wrapper_headline{
      
      color: #60adac;
      background-color: white;
      border-radius: 30px 0px 30px 0px;
      border-left: 2px solid #60adac;
      border-top: 2px solid #60adac;
      text-shadow:0 2px 3px rgba(0,0,0,0.1);
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 30px 0 rgba(0, 0, 0, 0.1);
      position: absolute;
      width: 220px;
      height: 600px auto;
      padding: 20px;
      right: 40px;
      top: 300px;
    }

    .wrapper{
      margin-left: 10px;
      outline: none;
      font-family: sans-serif;
    }

    .wrapper ul{
      margin-top: 0px;
      outline: none;


    }

    .wrapper ul li{
      margin-top: 0px;
       width: 180px;
    }

     .wrapper ul li label{
      font-weight: bold;
      margin-top: 20px;
      outline: none;
    }

     .wrapper ul ul{
      margin-top: -20px;
      font-size: 15px;
    }

     .wrapper ul ul li a{
      text-decoration: none;
      color: grey;
      font-size: 13px;
    }

    .wrapper ul ul li a:hover{
      color: #6223b0;
    }


    h4{
      font-size: 21px;
      margin-top: -7px;

    }

    .fcari{
      position: relative;
      top: 0px;
 
    }

    input{
    position: absolute;
    left: 1040px;
    top: 200px;
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

  .kontent_kiri{
  	position: relative;
  	top: -200px;
  	margin-left:140px;
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
  			<h3> DETAIL BERITA </h3>
  	</div>

	<div class="wrapper_semua">

	<div class="kontent_kiri">

	
                             <!-- Area searching -->


  <form class="fcari" action="berita.php" method="GET" enctype="multipart/form-data">
        <div class="label_content">
          <h4>Cari</h4>
        </div>
        <input type="text" name="inputcari" placeholder="Cari . . . . . . .">
        <input type="submit" name="tombolcari" value="cari" hidden> 
  </form>

                              <!-- Area Kontent -->


  <div class="label_content2_luar">
  <div class="label_content2">
          <h4>Berita</h4>
  </div>
  </div>

  <div class="wrapper_headline_luar">
  <div class="wrapper_headline">
      <div class="wrapper">
      <ul>
        <li>
          <input type="checkbox" id="list-item-1">
          <label for="list-item-1" class="first">2017</label>
          <ul>
          <?php

        ini_set('display_errors',0);

        include 'koneksi.php';

        $stmt = mysqli_query($connection,"SELECT * FROM berita1 WHERE tanggal LIKE '%2017%'");
        while($judul = mysqli_fetch_assoc($stmt)){
        ?>
            <li><a href="detail_berita.php?id_berita=<?php echo $judul['id_berita'];?>"><?php echo $judul['judul']?></a></li>
           <?php
          }
        ?>
          </ul>
        </li>
        <li>
          <input type="checkbox" id="list-item-2">
          <label for="list-item-2">2016</label>
          <ul>
          <?php
        include 'koneksi.php';
        $stmt = mysqli_query($connection,"SELECT * FROM berita1 WHERE tanggal LIKE '%2016%'");
        while($judul = mysqli_fetch_assoc($stmt)){
        ?>
            <li><a href="detail_berita.php?id_berita=<?php echo $judul['id_berita'];?>"><?php echo $judul['judul']?></a></li>
           <?php
          }
        ?>
          </ul>
        </li>
        <li>
          <input type="checkbox" id="list-item-3">
          <label for="list-item-3" class="last">2015</label>
          <ul>
          <?php
        include 'koneksi.php';
        $stmt = mysqli_query($connection,"SELECT * FROM berita1 WHERE tanggal LIKE '%2015%'");
        while($judul = mysqli_fetch_assoc($stmt)){
        ?>
            <li><a href="detail_berita.php?id_berita=<?php echo $judul['id_berita'];?>"><?php echo $judul['judul']?></a></li>
           <?php
          }
        ?>
          </ul>
        </li>
      </ul>
      </div>
      </div>
      </div>
      </div>
 

  											  <!-- berita -->

			<?php
			include 'koneksi.php';
			$id_berita=$_GET['id_berita'];
			$query_mysql=mysqli_query($connection,"SELECT id_berita, judul, isi, date_format(tanggal,'%W, %d-%m-%Y') tanggal, gambar, penerbit  FROM berita1 WHERE id_berita='$id_berita'") or die (mysqli_error());
			while ($hasil=mysqli_fetch_array($query_mysql)) 
			{ ?>

			<div class="berita">
			<div class="judul">
				<?php
					echo $hasil['judul'];
				?>
			</div>
			<div class="wrapper_berita">
				
				<ul class="detail">
					<li>
						<img src="asset/jam.png" width="50" style="position: relative; left: 10px; top: 10px;">
						<?php 
							echo $hasil['tanggal'];
						?>
					</li>
					<li>
						<img src="asset/user.png" width="22"style="position: relative; left: -3px; top: 5px;">
						Oleh : <?php echo $hasil['penerbit']; ?>
					</li>
				</ul>

				<div class="img" >
					
					<img src="gambar_berita/<?php echo $hasil['gambar'];?>"  width="300px">
					
				</div>
				<div>
					<p > <?php echo $hasil['isi'];?> </p>

				</div>
			  <?php 
			} 
			?>
			</div>
			
			<div class="footer">
			<?php
				include '../view/footer.php';
			?>
			</div>

</body>
</html>