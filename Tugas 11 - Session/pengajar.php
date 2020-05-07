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
			<div class="pengajar">
				<div class="pengajar-data">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQq9lXNCjLrz2hpdOpF9giRtKhCqvt85IotE5BWkiGDv0L3Bxd_&usqp=CAU">
					<h3>NAMA</h3>
					<p>I Wayan Santiyasa</p>
					<h3>NIP</h3>
					<p>19670414 199203 1 002</p>
				</div>
			</div>
			<div class="pengajar">
				<div class="pengajar-data">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQq9lXNCjLrz2hpdOpF9giRtKhCqvt85IotE5BWkiGDv0L3Bxd_&usqp=CAU">
					<h3>NAMA</h3>
					<p>Ngurah Agus Sanjaya ER</p>
					<h3>NIP</h3>
					<p>19780321 200501 1 001</p>
				</div>
			</div>
			<div class="pengajar">
				<div class="pengajar-data">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQq9lXNCjLrz2hpdOpF9giRtKhCqvt85IotE5BWkiGDv0L3Bxd_&usqp=CAU">
					<h3>NAMA</h3>
					<p>Cokorda Rai Adi Pramatha</p>
					<h3>NIP</h3>
					<p>19780621 200604 1 002</p>
				</div>
			</div>
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