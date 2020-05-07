<?php 
	require 'function.php';

	if( !isset($_SESSION["login"])) {
	    header("Location: login.php");
	    exit;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>Universitas Udayana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="sidebar">
		<section class="logo">
			<img class="logounud" src="https://upload.wikimedia.org/wikipedia/id/2/2d/Logo-unud-baru.png" alt="logo unud">
		</section>
		<section class="panel">
			<h3>Artikel Populer</h3>
		</section>
		<section class="panel-list">
			<a href="#" style="text-decoration: none">
				<h4>Desain Web</h4>
			</a>
		</section>
		<section class="panel-list">
			<a href="#" style="text-decoration: none">
				<h4>HTML</h4>
			</a>
		</section>
		<section class="panel-list">
			<a href="#" style="text-decoration: none">
				<h4>CSS</h4>
			</a>
		</section>
		<section class="panel-list">
			<a href="#" style="text-decoration: none">
				<h4>Lain-lain</h4>
			</a>
		</section>
		<section class="panel-list">
			<a href="logout.php" style="text-decoration: none">
				<h4>Logout</h4>
			</a>
		</section>
	</div>
	<div class="countainer">
		<section class="cover">
			
		</section>
		<section class="navbar">
			<ul>
				<li>
					<a href="index.php" style="text-decoration: none"><h3>HOME</h3></a>
				</li>
				<li>
					<a href="tentang.php" style="text-decoration: none"><h3>TENTANG</h3></a>
				</li>
				<li>
					<a href="pengajar.php" style="text-decoration: none"><h3>PENGAJAR</h3></a>
				</li>
				<li>
					<a href="kontak.php" style="text-decoration: none"><h3>KONTAK</h3></a>
				</li>
			</ul>
		</section>
		<section class="content">
			<h1>Web Developer</h1>
            <div class="garis"></div>
            <h2>PUTU AYU SHERLY ANGGITA S</h2>
            <img style="width: 30px; float: left; margin-right: 20px;" src="https://banner2.cleanpng.com/20180806/evy/kisspng-computer-icons-clip-art-telephone-symbol-iphone-wire-circle-svg-png-icon-free-download-489035-5b68d471f214a9.9576881915335967859916.jpg" alt="#">
            <h2>082236844949</h2>
            <img style="width: 30px; float: left; margin-right: 20px;" src="https://www.pngitem.com/pimgs/m/11-118773_email-free-icon-png-email-transparent-png.png" alt="#">
            <h2>nptayusherly@gmail.com</h2>
            <img style="width: 30px; float: left; margin-right: 20px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/CIS-A2K_Instagram_Icon_%28Black%29.svg/768px-CIS-A2K_Instagram_Icon_%28Black%29.svg.png" alt="#">
            <h2>@nptayusherly</h2>
		</section>
	</div>
	<div class="footer">
		<section style="padding: 5px">
			<p>© 2016 USDI -  Universitas Udayana</p>
			<p>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611<br>
			Phone Number: +62 (361) 701954, 704845<br>
    		Fax: +62 (361) 701907<br>
    		Email: info@unud.ac.id
			</p>
		</section>
	</div>
</body>
</html>