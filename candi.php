<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Description" content="Mengenalkan ragam budaya tari tradisional sumatera selatan">
	<meta name="Author" content="Musik II">
	<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="icon" href="img/header.jpg" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
	<link href='#' rel='stylesheet' type='text/css'>
	<title>Tari Tradisional Sumatera Selatan</title>
</head>
<body>
	<div class="navbar">
	<img src="img/header.jpg">
	<ul>
		<li> <a href="admin.php"> <i class="fa fa-user"> Admin </i> </a> </li>
	<li> <a href="aboutus.php"><i class="fa fa-phone">   About Us  </i> </a> </li>
	<li> <a href="#"><i class="fa fa-child">  Provinsi </i> </a> 
	<ul>
	<li> <a href="Provinsijawabarat.php"> Propinsi Jawa Barat </a> </li>
	<li> <a href="tari-tanggai.php"> Propinsi Jawa Timur </a> </li>
	<li> <a href="tari-mejeng-basuko.php"> Propinsi Jawa Tengah </a> </li>
	</ul>
	</li>
	<li> <a href="index.php"> <i class="fa fa-home"> Home  </i> </a> </li>
	</ul>
	</div>
	<div class="content-utama">
							<table border=1>
					<tr>
				<?php
					include("koneksi.php");
					$kolom = 3;
					$i = 0;
					$sql = mysqli_query($kon,"SELECT * FROM candi");
					while($data = mysqli_fetch_array($sql)){
					if ($i >= $kolom) {
					echo "<tr></tr>";
					$i = 0;
					}
					$i++;
				?>
				<h5><td><p align="center"><?php echo $data['namaCandi']; ?><br>
				<img src="img/<?php echo $data['gambarcandi'];?>" height="160" width="160" style="margin:5px;"/><br>
				Keterangan : <?php echo $data['keterangancandi']; ?><br>
				</h5></p></td>
				<?php
					}
						?>
</tr>
</table>							
	<p> 
	
	</p>
	</div>

	<div class="footer">
	<b> Copyright &copy; 2016 - Tari Tradisional Sumatera Selatan By Musik II  </b>
	<a href="#">
	<i class="fa fa-facebook"> </i>
	<i class="fa fa-twitter"> </i>
	<i class="fa fa-instagram"> </i>
	<i class="fa fa-google-plus"> </i>
	
	
	
	</a>
	
	</div>



	
</body>
</html>