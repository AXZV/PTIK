<?php
session_start();
include '../config.php';

$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

    
    $sql = "SELECT username, password, nama FROM admin WHERE username = '$username' LIMIT 1";
    $stmt = mysqli_query($connection,$sql);
    $rows = mysqli_fetch_assoc($stmt);
    $passwordhash = $rows['password'];

    if( password_verify($password,$passwordhash)){
        
         header('location: ../halaman_utama.php');
          $_SESSION['nama'] = $rows['nama'] ;
    }else{

        ?>

   <!DOCTYPE html>
   <html>
   <head>
     <title></title>
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
     <style>
          *{
            background-color: #f9db54;
          }

          h1{
            font-size: 24px;
            font-family: arial,helvetica,sans-serif;
            color: red;
          }

          p{
            font-size: 17px;
            font-family: arial,helvetica,sans-serif;
            color: grey;
          }

          .wrapper_login{
            background-color: #f9db54;
            margin-top: 250px;
          }

          a{
            margin-top: 10px;
          }

     </style>
   </head>
   <body>
   <center>
        <div class="wrapper_login">
        <i><h1>. . . . . . Maaf Email dan Password anda tidak sesuai ! . . . . . . </h1></i>
        <p>silahkan kembali dengan klik tombol ini </p>
        <a href="../index.php" class="btn btn-success btn-lg">Kembali</a>
        </div>
    </center>
   </body>
   </html>

  <?php
      }
   ?> 
