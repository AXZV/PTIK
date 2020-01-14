
<!DOCTYPE html> 
<html> 
    <head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <title></title>   
    <link rel="stylesheet" href="desain_berita.css">   
    <style>
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
  <h3> BERITA </h3>
  </div>    
  
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

        ini_set('display_errors',0); // untuk menghapus error

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
      

                                          <!-- Area berita -->


  <div class="wrapper_berita_1">
    <?php

      include "koneksi.php"; 
      $nama = $_GET['inputcari'];

      if(isset($nama)){

        $sql ="SELECT * FROM berita1 WHERE judul LIKE '%$nama%' or isi LIKE '%$nama%'";
        $stmt = mysqli_query($connection,$sql);
        
        if(mysqli_num_rows($stmt) > 0){

           while($hasil = mysqli_fetch_assoc($stmt)){

          ?>

        <div class="berita">
  
        <div class="judul_berita">
       
          <p><?= $hasil['judul'];?></p>

        </div>
    
        
          <div class="gambar_berita">
            <img src="gambar_berita/<?= $hasil['gambar'];?>" class="gambar_berita_dalam"></img>
          </div>
          
            <div class="isi_berita" style="font-size:14px; line-height:16px;">
             <?= substr($hasil['isi'],0,200);?> [...]
            </div>
          <div class="footer_berita">
            <p><span><img src="asset/unduhan.png" width="15"></img></span> <?php echo $hasil['tanggal'];?></p><a href="detail_berita.php?id_berita=<?= $hasil['id_berita']?>" class="btn btn-primary btn-xs">Baca Lebih</a>
        </div> 
    </div>

    <?php

        }

      } else{
          echo "<p class='peringatan'>. . . . . . .Tidak menemukan yang anda cari. . . . . . .</p>";
        }


      }else{

      $sql = mysqli_query($connection,"SELECT  id_berita, judul, isi, date_format(tanggal, '%e %M %Y')tanggal, gambar, penerbit FROM berita1 ORDER BY tanggal DESc");

      while($hasil = mysqli_fetch_assoc($sql)){
    ?>
          
    <div class="berita">
  
        <div class="judul_berita">
       
          <p><?= $hasil['judul'];?></p>

        </div>
    
        
          <div class="gambar_berita">
            <img src="gambar_berita/<?= $hasil['gambar'];?>" class="gambar_berita_dalam"></img>
          </div>
          
            <div class="isi_berita" style="font-size:14px; line-height:16px;">
             <?= substr($hasil['isi'],0,200); ?> [...]
            </div>
          <div class="footer_berita">
            <p><span><img src="asset/unduhan.png" width="15"></img></span> <?php echo $hasil['tanggal'];?></p><a href="detail_berita.php?id_berita=<?= $hasil['id_berita']?>" class="btn btn-primary btn-xs">Baca Lebih</a>
        </div> 
    </div>
     <?php
          }
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
  
