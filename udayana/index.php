<?php 
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/custom.css" />
    <title>UNUD | Universitas Udayana</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/unud.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item align-self-center active">
              <a class="nav-link" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item align-self-center">
              <a class="nav-link"  href="#berita">Berita <span class="sr-only"></span></a>
            </li>
            
            <li class="nav-item align-self-center">
              <a href="login.php" class="btn px-4 btn-secondary ml-5 logintombol">Log In</a>
            </li>
            <li class="nav-item align-self-center ">
              <a class="btn px-4 btn-secondary ml-2 registombol" href="register.php" role="button"
              >Register</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid"></div>
    <section id="berita" class="content">
      <div class="container">
      	<div class="section-title inline-title">
        	<h2>
        		<b>Berita Terkini</b>
        	</h2>
        </div>
        <img src="img/sembako.jpg" alt="foto" style="width: 512px; float: left; margin-right: 25px; margin-bottom: 35px;">
        <a href="https://www.unud.ac.id/in/berita3340-Civitas-Akademika-FK-Unud-Serahkan-Bantuan-Paket-Sembako-Bagi-Masyarakat-Terdampak-Pandemi-Covid-19.html" style="color: black;"><h3><b>Civitas Akademika FK Unud Serahkan Bantuan Paket Sembako Bagi...</b></h3></a>
        <p style="font-size: 16px;">Fakultas Kedokteran Universitas Udayana bersama Pemerintah Kota Denpasar dan Hiswana Migas Bali-Pertamina menyerahkan bantuan 120 paket  sembako kepada masyarakat terdampak Covid-19. Paket bantuan tersebut merupakan donasi dari para dosen FK Unud untuk diserahkan kepada nelayan yang tergabung dalam Forum Krama...</p> 
				<a target="_blank" href="https://www.unud.ac.id/in/berita3340-Civitas-Akademika-FK-Unud-Serahkan-Bantuan-Paket-Sembako-Bagi-Masyarakat-Terdampak-Pandemi-Covid-19.html">Baca Selengkapnya</a>
      	<br><br><br><br><br><br><br>
        <div class="section-title inline-title">
        	<h2>
        		<b>Berita Lainnya</b>
        	</h2>
        </div>
        <div class="row">
        	<div class="col">
        		<img src="img/1.jpg" alt="foto" style="width: 350px; float: left; margin-right: 20px;">
        		<img src="img/2.jpg" alt="foto" style="width: 350px; float: left; margin-right: 20px;">
        		<img src="img/4.jpg" alt="foto" style="width: 350px; float: left; margin-right: 20px;">
        	</div>
        </div>
      </div>
    </section>
    <section class="footer">
      <footer class="bg-light ">
          <div class="container-fluid">
              <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">&copy; 2016 USDI - Universitas Udayana</div>
                  <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                  </div>
              </div>
          </div>
      </footer>
    </section>
  </body>

  <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
