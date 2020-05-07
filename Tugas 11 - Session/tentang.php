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
			<h1>SEJARAH UNIVERSITAS UDAYANA</h1>
			<img src="https://www.unud.ac.id/images/unudhome.jpg" style="width: 300px; float: left; margin-right: 20px; margin-bottom: 30px;">
			<p>
				Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J. M. Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada tanggal 29 September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar.<br><br>
				Universitas Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri tertua di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah Fakultas yang bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra Udayana inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan Menteri PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17 Agustus 1962. Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29 September dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.<br><br><br>
			</p>
			<h1>VISI, MISI, DAN TUJUAN UNIVERSITAS UDAYANA</h1>
			<h2>Visi</h2>
			<p>Terwujudnya perguruan tinggi yang unggul, mandiri, dan berbudaya.<br></p>
			<h2>Misi</h2>
			<ol>
				<li>Mendorong sumberdaya manusia di lingkungan UNUD agar senantiasa memiliki kesadaran dan tanggung jawab akan budaya mutu.</li>
				<li>Mengembangkan penelitian dan pengabdian kepada masyarakat sesuai dengan kepentingan masyarakat dan bangsa.</li>
				<li>Memberdayakan Unud sebagai lembaga yang menghasilkan dan mengembangkan pengetahuan, teknologi, dan budaya yang dapat dimanfaatkan untuk kesejahteraan masyarakat.</li>
				<li>Menghasilkan karya inovatif dan prospektif bagi kemajuan Unud serta perekonomian nasional.</li>
			</ol>
			<h2>Tujuan</h2>
			<ol>
				<li>Menghasilkan lulusan bermutu yang memiliki kompetensi tinggi dalam penguasaan ilmu pengetahuan, teknologi, dan seni.</li>
				<li>Meningkatkan kapasitas Unud dalam memberikan akses pelayanan pendidikan kepada masyarakat.</li>
				<li>Mengembangkan tata kelola Unud yang sehat melalui optimalisasi peran organ organisasi sesuai dengan prinsip badan layanan umum.</li>
				<li>Menjalin kerja sama di berbagai bidang untuk meningkatkan mutu tridharma perguruan tinggi.</li>
				<li>Menghasilkan penelitian yang bermutu, relevan, dan berdaya saing sesuai dengan perkembangan ilmu pengetahuan, teknologi, dan seni.</li>
				<li>Menghasilkan publikasi ilmiah nasional, internasional, dan kekayaan intelektual untuk kepentingan masyarakat.</li>
			</ol>
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