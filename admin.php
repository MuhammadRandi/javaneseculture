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
	<title>Javanese Culture Heritage</title>
</head>
<body>
	<div class="navbar">
	<img src="img/header.png">
	<ul>
	<li> <a href="admin.php"> <i class="fa fa-user"> Admin </i> </a> </li>
	<li> <a href="aboutus.php"><i class="fa fa-phone">   About Us  </i> </a> </li>
	<li> <a href="#"><i class="fa fa-child">  Provinsi </i> </a>  
	<ul>
	<li> <a href="Provinsijawabarat.php"> Propinsi Jawa Barat </a> </li>
	<li> <a href="Provinsijawatimur.php"> Propinsi Jawa Timur </a> </li>
	<li> <a href="Provinsijawatengah.php"> Propinsi Jawa Tengah </a> </li>
	</ul>
	</li>
	<li> <a href="index.php"> <i class="fa fa-home"> Home  </i> </a> </li>
	</ul>
	</div>
	<div class="content-utama">
	 <h4> <b> Upload Data </b> </h4> 
	<p>
	<form action="" class="inner-login" method="post">
            <h3 class="text-center title-login"></h3>
                <div class="form-group">
                    Nama : <input type="text" class="form-control" name="namaCandi">
                </div>
				<div class="form-group">
                    Gambar : <input type="file" class="form-control" name="gambarcandi">
                </div>
				<div class="form-group">
                    Keterangan : <input type="textarea" class="form-control" name="keterangancandi">
                </div>
				<div class="form-group">
                    provinsi : <input type="textarea" class="form-control" name="status">
                </div>
                <input type="submit" class="btn btn-block btn-custom-green" name="submit" value="Submit" />
            </form>
			<?php
			include("koneksi.php");
			session_start();
			if(isset($_POST['submit']))
			{
				$nama=$_POST['namaCandi'];
				$gambar=$_POST['gambarcandi'];
				$ket=$_POST['keterangancandi'];
				$stat=$_POST['status'];
			if (!empty($nama and $gambar and $ket)) {
			
			$query="insert into candi values('','$nama','$gambar','$ket','$stat')";
			$result=mysqli_query($kon,$query);
			if($result)
			{
				echo"<script type ='text/javascript'>alert('Data Masuk');</script>";
				echo"<div class='text-center forget'>";
                 echo"<h4> <a href='login.php'>Login</a><br><br>";
                echo"</div>";
			}
			else
				{
					echo"<script type ='text/javascript'>alert('Mengalami Kesalahan');</script>";
				}
			
			}else{
				echo"<script type ='text/javascript'>alert('Isi data Terlebih Dahulu');</script>";
			}
			}
			
			?>
	 </p>
	 <br>
</p>
	</div>
	<div class="footer">
	<b> Copyright &copy; 2017 - Kebudayaan Jawa   </b>
	<a href="#">
	<i class="fa fa-facebook"> </i>
	<i class="fa fa-twitter"> </i>
	<i class="fa fa-instagram"> </i>
	<i class="fa fa-google-plus"> </i>
	
	
	
	</a>
	
	</div>



</body>
</html>