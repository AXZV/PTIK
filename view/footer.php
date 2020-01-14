<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="css/footer_style.css" rel="stylesheet" type="text/css" />
    <style>
    *{
      margin:0px;
      padding:0px;
    }
   
      footer{
    background: url('asset/footer.png');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 100%;
    height: 205px;
    margin-top: 200px;
  }

  .copyright{
      background-color: #353535;
      width: 100%;
      height: 20px auto;
      position: relative;
      top: 193px;
      color: red;
    }

    .alamat{
      position: absolute;
      font-family: sans-serif;
      font-size: 14px;
      color: white;
      left: 200px;
      margin-top: 140px;
      letter-spacing: 2px;
      line-height: 1.2;
    }

    .kontak_us{
      position: absolute;
      font-family: sans-serif;
      font-size: 14px;
      color: white;
      left: 680px;
      margin-top: 140px;
      letter-spacing: 2px;
      line-height: 1.2;
    }


    .alternatif_footer{
      position: absolute;
      font-family: sans-serif;
      font-size: 13px;
      color: white;
      left: 980px;
      margin-top: 40px;
      letter-spacing: 2px;
      line-height: 2;
      z-index: 10;
    }

    .alternatif_footer a{
      color: yellow;
      text-decoration: none;
      webkit-transition-duration: 1s;
      transition-duration: 1s;
    }

    .alternatif_footer a:hover{
      color: aqua;
      text-decoration: underline;
    }

    </style>
  </head>
  <body>
    <footer>
      <section class="bagian_footer">
        <div class="alamat">
         Gedung E11 | Teknik Elektro | Fakultas Teknik<br> Unnes Kampus Sekaran Gunungpati Semarang (50229)
        </div>
        <div class="kontak_us">
         Telp : (024)8508104 <br> Email : ptik@unnes.ac.id
        </div>
        <div class="alternatif_footer">
            <ul>
              <li><a href="../site map/site_map.php">Site Map</a></li>
            </ul>
        </div>
        <div class="copyright"> 
          <p style="text-align:center; padding:3px; color:white; font-family:arial,helvetica, sans-serif; font-size:14px;">
              @copyright <?php echo date('Y');?> Universitas Negeri Semarang
          </p>
        </div>
      </section>
    </footer>
  </body>
  </html>