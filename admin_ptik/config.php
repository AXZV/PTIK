<?php  
$host= "localhost";
$username = "root";
$password = "";
$database = "ptik";

$connection=mysqli_connect($host,$username,$password) or die ("Koneksi Gagal");
$db_select=mysqli_select_db($connection,$database) or die ("Database Tidak Bisa Di Buka " );

?>
