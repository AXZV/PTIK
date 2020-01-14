<?php  
include "koneksi.php";  
$sql = mysqli_query($connection,"select * from berita1 order by id_berita desc limit 0,5");
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
			<style>
			.img{
				float: left;
				height: 10%;
			}
			.news{
				float: right;
			}
			.aside{
				padding: 20px;
				border: 0px solid black;; 
				float: left;
				width:10% ;
				display: inline-table;
				background-color: white;
			}
			.article{
				padding: 20px;
				border: 0px solid black;
				overflow: hidden;
			}
			.readmore{
				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<?php 
		while($hasil = mysqli_fetch_array($sql)){  
		?>  
		<div>  
			<div class="aside">  
				<img src="gambar_berita/<?php echo $hasil['gambar'];?>" style="width: 300px; height: 200px;"> 
			</div>  
	
			<div class="article">  
				<h2><?=$hasil['judul'];?></h2>  
				<p style="text-align:justify;" ><?=substr($hasil['isi'],0,150);?><a href="detail_berita.php?id_berita=<?php echo $hasil['id_berita'];?>" target="_blank" class="readmore">............<img src="icon/readmore.png" height="20px">	</a>	
				</p>  
	
				<p>     
				<img src="icon/date.png" height="20px"> <?=$hasil['tanggal'];?> 
				</p>  
			</div>     
		</div>  
	<hr> 
	<br>
	<br> 
		<?php  
		}  
		?>
	</body>
</html>   
