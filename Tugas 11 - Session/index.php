<?php 
	require 'function.php';

	if( !isset($_SESSION["login"])) {
	    header("Location: login.php");
	    exit;
	}

	$nama = $_SESSION["username"];
	$type = $_SESSION["role"];

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
<body <?= ($type == 'admin') ? "style='background-color: seashell'" : "style='background-color: whitesmoke'"; ?> >
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
			<h1><center>Selamat Datang di Universitas Udayana, <span style="color: blue; font-weight: bold"><?= $nama; ?></span>!</center></h1>
			<p style="text-align: center; font-size: 10px;">(Anda login sebagai : <?= $type; ?>)</p>
			<h2>Berita Terkini</h2>
			<img src="https://www.unud.ac.id/ac-admin/uploads/photo_2020-03-30_12-42-28-830713771.jpg" style="width: 300px; float: left; margin-right: 20px; margin-bottom: 30px;">
			<p>Kapolda Bali Irjen Pol. Petrus R. Golose bersama jajaran bertemu Rektor Unud Prof. A.A Raka Sudewi di Gedung Rektorat Kampus Jimbaran, Senin (30/3/2020). Turut hadir mendampingi Rektor, Wakil Rektor Bidang Perencanaan Kerja Sama dan Informasi, Dekan FMIPA dan Wakil...</p>
			<a href="#">Baca Selengkapnya</a>
			<h2 style="clear: both;">Galeri</h2>
			<img class="galeri" src="https://www.unud.ac.id/ac-admin/uploads/photo_2020-03-16_15-49-17-2315225577.jpg">
			<img class="galeri" src="https://www.unud.ac.id/ac-admin/uploads/photo_2020-03-16_19-00-28-565786431.jpg">
			<img class="galeri" src="https://www.unud.ac.id/ac-admin/uploads/img_0807-4257447877.jpg">
			<img class="galeri" src="https://www.unud.ac.id/ac-admin/uploads/corona-website-8452234524.jpg">
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