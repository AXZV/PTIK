<?php

$host='localhost';
$username='root';
$password='Moondust';
$databasename='ptik';
$connection=mysqli_connect($host,$username,$password) or die ("koneksi salah");
$db_select=mysqli_select_db($connection,$databasename) or die ("database salah");
?>