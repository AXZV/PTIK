<!DOCTYPE html>
<html>
<head>
    <title>Pend. Teknik Informatika Dan Komputer</title>
    <LINK REL="SHORTCUT ICON" HREF="asset/logoo.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link href="css/style_depan.css" rel="stylesheet" type="text/css" />
    <link href="css/patch/slide&navigation.css" rel="stylesheet" type="text/css" />
    <link href="css/patch/menu.css" rel="stylesheet" type="text/css" />
    <link href="css/patch/news.css" rel="stylesheet" type="text/css" />
    <link href="css/patch/profile.css" rel="stylesheet" type="text/css" />
    <script src="js/ninja-slider.js" type="text/javascript"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src='js/jquery.scrollto.js'></script> 
    <script src="js/main-backtop.js"></script>
    
    <script type="text/javascript">

    //membuat algoritma saat discrolll akan menu berubah bentuk
   
    $(document).on('scroll',function(){
        if($(this).scrollTop() > 1){
            $('header').addClass('sticky'); //menambah class pada header
        }else{
            $('header').removeClass('sticky');
        }
    });
    </script> 
<!-- ============================================================================================================ -->

<!-- ===============================================================  NAVIGATION SCRIPT  ====================================================================== -->

<script>
     
    $(document).ready(function(){

        
      // Bagian navigation bar ================================================================================================================================ 

        $(window).scroll(function(){
            var window_top = $(window).scrollTop() + 12;
            var div_top = $('#menu').offset().top;
                if (window_top > div_top) {
                    $('nav').addClass('stick');
                } else {
                    $('nav').removeClass('stick');
                }
        });
        
      // Membuat smooth scrolling dengan menggunakan jq scrollto.js =========================================================================================== 

        $("nav a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash); 
        });
        
        // Membuat navigasi aktif =============================================================================================================================

        var aChildren = $("nav ul").children(); // Membuat navigasi tab mengikuti halaman
        var aArray = [];
        for (var i=0; i < aChildren.length; i++) {    
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        }
        
        $(window).scroll(function(){
            var windowPos = $(window).scrollTop();
            var windowHeight = $(window).height();
            var docHeight = $(document).height();
            
            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top;
                var divHeight = $(theID).height();
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }
            
            if(windowPos + windowHeight == docHeight) {
                if (!$("nav ul:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav ul:last-child a").addClass("nav-active");
                }
            }
        });
    });

</script>
<!-- ================================================================================= -->

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<!-- ================================================================================= -->
</head>

<!-- ========================================================================================================================================================== -->
<!-- ===================================================================  NAVIGATION  ========================================================================= -->
<!-- ========================================================================================================================================================== -->

<body>

        <div id="nav_a">
            <header>
                <div id="nav_b">
                <img id="gambar_logo" src="asset/logo_ptik.png" />
                  <nav id="menu" >
                      <ul>
                          <a href="#1" class="home">HOME</a>
                          <a href="#2" class="menu">MENU</a>
                          <a href="#3" class="news">NEWS</a>
                          <a href="#4" class="profile">PROFILE</a>
                      </ul>
                  </nav>
                    <div id="mySidenav" class="sidenav">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <a href="#1">Home</a>
                      <a href="#2">Menu</a>
                      <a href="#3">News</a>
                      <a href="#4">Profile</a>
                    </div>
                    <span class="slideopen" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                </div>
            </header>


        </div>

<!--============================================================================================================================================================-->
<!--======================================================================  PAGE 1  ============================================================================-->
<!--============================================================================================================================================================-->

 <section id="1">
    <div id="ninja-slider">
        <div class="slider-inner">
            <ul>
                <li>
                    <img class="ns-img" src="asset/slide/ptik.jpg" width="1400" height="700" style="cursor:pointer;">
                    <div class="caption cap1">Class Room</div>
                    <div class="caption cap1 cap2">Pend. Teknik Informatika Dan Komputer</div>
                </li>
                <li>
                    <img class="ns-img" src="asset/slide/IMG_20161206_163847.jpg" width="1400" height="700" style="cursor:pointer;">
                    <div class="caption cap1">E11 Building</div>
                    <div class="caption cap1 cap2">Pend. Teknik Informatika Dan Komputer Building</div>
                </li>
                <li>
                    <img class="ns-img" src="asset/slide/Festival-Wayang-Kulit-dengan-dalang-Ki-Manteb-Sudhasono.jpg" width="1400" height="700" style="cursor:pointer;">
                    <div class="caption cap1">Wayang</div>
                    <div class="caption cap1 cap2">Lestarikan budaya indonesia</div>
                </li>
                <li>
                    <img class="ns-img" src="asset/slide/Candi-Borobudur-1.jpg" width="1400" height="700" style="cursor:pointer;">
                    <div class="caption cap1">Borobudur</div>
                    <div class="caption cap1 cap2">Cultural Of Indonesia's Temple</div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--============================================================================================================================================================-->
<!--======================================================================  PAGE 2  ============================================================================-->
<!--============================================================================================================================================================-->


          <section id="2">
                <div class="bagian2">
                <div><p class="menuheading">Menu</p></div>
                <div><p class="menuparagraph">Pilih menu yang anda butuhkan</p></div>
                <div><p class="menudivider"></p></div>

                <div class="grid-container-menu1">
                  <div class="row">
                      <div class="col-menu">
                        <a id="akademi" class="prestasi1" href="info/menampilkan_data.php"></a>
                      </div> 
                      <div class="col-menu">
                        <a id="akademi" class="prestasi2" href="info/menampilkan_data_mahasiswa.php"></a>
                      </div> 
                      <div class="col-menu">
                        <a id="akademi" class="prestasi3" href="materi soal/soal_ptik.php"></a>
                      </div> 
                  </div> 
                  <div class="row">
                      <div class="col-menu">
                        <p class="prestasi_ptik">Data Dosen</p>
                      </div> 
                      <div class="col-menu">
                        <p class="prestasi_ptik">Data Mahasiswa</p>
                      </div>
                      <div class="col-menu">
                        <p class="prestasi_ptik">Kumpulan Modul & Soal</p>
                      </div>  
                  </div>
                </div>
                <div class="grid-container-menu2">
                  <div class="row">
                      <div class="col-menu">
                        <a id="akademi" class="prestasi4" href="loker/lowongan_kerja.php"></a>
                      </div> 
                      <div class="col-menu">
                        <a id="akademi" class="prestasi5" href="prestasi/menampilkan_data_prestasi_akademik.php"></a>
                      </div> 
                      <div class="col-menu">
                        <a id="akademi" class="prestasi6" href="prestasi/menampilkan_data_prestasi_nonakademik.php"></a>
                      </div> 
                  </div> 
                  <div class="row">
                      <div class="col-menu">
                        <p class="prestasi_ptik">Lowongan Pekerjaan</p>
                      </div> 
                      <div class="col-menu">
                        <p class="prestasi_ptik">Prestasi Akademik</p>
                      </div>
                      <div class="col-menu">
                        <p class="prestasi_ptik">Prestasi Non Akademik</p>
                      </div>  
                  </div> 
                </div>
              </div>          
          </section>


<!--============================================================================================================================================================-->
<!--========================================================================  PAGE 3  ==========================================================================-->
<!--============================================================================================================================================================-->


<section id="3">
  <div class="bagian3">
    <div><p class="newsheading">News</p></div>
    <div><p class="newsparagraph">Berita terhangat dari Pend. Teknik Informatika Dan Komputer</p></div>
    <div><p class="newsdivider"></p></div>


<!-- ====================================================================================================== -->



<!-- ====================================================================================================== -->

  <div class="grid-container-news">
    <a href="berita/berita.php" class="arsip">Berita Lainya</a>
    <div>
     <?php

      include 'berita/koneksi.php';

       $sql = "SELECT  id_berita, judul, isi, date_format(tanggal, '%e %M %Y')tanggal, gambar, penerbit FROM berita1 ORDER BY tanggal DESC LIMIT 4";

      $stmt = mysqli_query($connection,$sql) or die(mysqli_error($connection));

           while($hasil = mysqli_fetch_assoc($stmt)){
      ?>
        <div class="col-1">      
        <p></p>
        <div class="hovereffect">
          <img class="img-responsive" src="berita/gambar_berita/<?php echo $hasil['gambar'];?>" alt="">
            <div class="overlay">
               <a class="info" href="berita/detail_berita.php?id_berita=<?php echo $hasil['id_berita'];?>">Baca</a>
            </div>
        </div>
        <div id="isiberita">
        <p><a class="judulberita"><b><?php echo substr($hasil['judul'],0,50);?>...</b></a></p>
        <p id="tanggal"><?php echo $hasil['tanggal'];?></p>
        </div>
        </div>
         <?php
            }
        ?>
     
    </div> 
    </div>
  </div>
</section>
<!--============================================================================================================================================================-->

<!--============================================================================================================================================================-->
<!--===================================================================  PAAGE 4  ==============================================================================-->
<!--============================================================================================================================================================-->
<section id="4">
  <div class="bagian4">
    <div><p class="profileheading"><a href="profil/profil.php">Profile & Contact</a></p></div>
    <div><p class="profileparagraph">Hubungi kami jika anda perlu bantuan</p></div>
    <div><p class="profiledivider"></p></div> 
        <div class="wrapper_map">
          <div class="framekritik">
              <div><p class="kritik">Kritik Dan Saran</p></div>
              <!--  Mengirim feed back ke email yang tertera  -->
                <form action="kritik_saran/proses_input_kritik_saran.php" method="post"> <!--  email  -->
                  <div class="groupnama">
                    <input id="nama" type="number" name="no" hidden>     
                  </div>

                  <div class="groupnama">
                    <input id="nama" type="text" name="tanggal" value="<?php echo date("Y-m-d")?>" hidden>        
                  </div>

                  <div class="groupnama">    
                    <input id="nama" type="text" name="nama" required>
                    <label>Nama</label>
                  </div>

                  <div class="groupmail">      
                    <input id="mail" type="email" name="email" required>
                    <label>E-Mail</label>
                  </div>

                  <div class="groupcoment">      
                    <textarea id="coment" type="text" required name="komentar" ></textarea> 
                    <label>Masukan Kritik Dan Saran</label>
                  </div>
                <input type="submit" class="button" value="kirim" onCLick="alert('komentar sudah dikirim')">                  
                </form>
          </div>
          <div class="framecontact">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.648414262399!2d110.40017650044032!3d-7.050535398199566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bdd9af10265%3A0x536167cd72840c7e!2sGedung+E11+Teknik+Elektro+UNNES!5e0!3m2!1sid!2sid!4v1480227701047"  allowfullscreen></iframe>
              <div><p class="contact">Contact Us</p></div>
              <div class="pgalamat">
                <p id="alamat1">Teknik Elektro</p>
                <p id="alamat2">Universitas Negeri Semarang</p>
                <p id="alamat3">Gedung E11 Kampus Sekaran Gunungpati</p> 
                <p id="alamat4">Semarang (50229) </p>
                <p id="telp">Telp : (024)8508104 </p>
                <p id="emailalamat">Email : ptik@unnes.ac.id </p>
              </div>
          </div>
        </div>  
  </div>
</section>


<!--============================================================================================================================================================-->
<!--===================================================================  FOOTER  ===============================================================================-->
<!--============================================================================================================================================================-->


<footer>
  <div class="footer">
      <div class="linkfooter">
        <a href="https://unnes.ac.id/" class="unnes">UNNES</a>
        <a href="http://ft.unnes.ac.id/" class="ft">Fakultas Teknik</a>
        <a href="https://akademik.unnes.ac.id/" class="sikadu">Sikadu UNNES</a>
      </div>
      <div class="copyright"> 
      <div><p class="footerdivider"></p></div>  
        <a id="textcopyright">Copyright@ <?php echo date('Y');?> - Rombel Layat</a>
  </div>
</footer> 
<a href="#0" class="cd-top">Top</a>
</body>
</html>

<!--============================================================================================================================================================-->
<!--======================================================================  END  ===============================================================================-->
<!--============================================================================================================================================================-->