<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB', 'mahasiswa');

$db = new mysqli(HOST, USER, PASS, DB);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Shorting & Filtering</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    SIMAK-NG | UNIVERSITAS UDAYANA
	  </a>
	</nav>
	
	<div class="container">
		<h2 align="center" style="margin: 30px;">DATA MAHASISWA</h2>
		<?php 
			$s_jeniskelamin="";
            $s_keyword="";
            if (isset($_POST['search'])) {
                $s_jeniskelamin = $_POST['s_jeniskelamin'];
                $s_keyword = $_POST['s_keyword'];
            }
		?>
		<form method="POST" action="">
	        <div class="row mb-3">
			    <div class="col-sm-12"><h4>Cari</h4></div>
			    <div class="col-sm-3">
			        <div class="form-group">
			            <select name="s_jeniskelamin" id="s_jeniskelamin" class="form-control">
			                <option value="">Filter Jenis Kelamin</option>
			                <option value="Laki-laki" <?php if ($s_jeniskelamin=="Laki-laki"){ echo "selected"; } ?>>Laki-laki</option>
			                <option value="Perempuan" <?php if ($s_jeniskelamin=="Perempuan"){ echo "selected"; } ?>>Perempuan</option>
			            </select>
			        </div>
			    </div>
			    <div class="col-sm-4">
			        <div class="form-group">
			            <input type="text" placeholder="Keyword" name="s_keyword" id="s_keyword" class="form-control" value="<?php echo $s_keyword; ?>">
			        </div>
			    </div>
			    <div class="col-sm-4" >
			        <button id="search" name="search" class="btn btn-warning">Cari</button>
			    </div>
			</div>
		</form>

		<table class="table table-striped table-bordered" style="width:100%">
		    <thead>
		        <tr>
		            <td>No</td>
					<td>NIM</td>
		            <td>Nama Mahasiswa</td>
		            <td>Alamat</td>
		            <td>Fakultas</td>
		            <td>Jenis Kelamin</td>
		        </tr>
		    </thead>
		    <tbody>
		        <?php
		            $search_jeniskelamin = '%'. $s_jeniskelamin .'%';
		            $search_keyword = '%'. $s_keyword .'%';
		            $no = 1;
		            $query = "SELECT * FROM tbmahasiswa WHERE jenis_kelamin LIKE ? AND (nama_mahasiswa LIKE ? OR alamat LIKE ? OR jenis_kelamin LIKE ? OR jenis_kelamin LIKE ? OR nim LIKE ?) ORDER BY nim ASC";
		            $dewan1 = $db->prepare($query);
		            $dewan1->bind_param('ssssss', $search_jeniskelamin, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
		            $dewan1->execute();
		            $res1 = $dewan1->get_result();

		            if ($res1->num_rows > 0) {
		                while ($row = $res1->fetch_assoc()) {
							$id = $row['id'];
							$nim = $row['nim'];
		                    $nama_mahasiswa = $row['nama_mahasiswa'];
		                    $alamat = $row['alamat'];
		                    $fakultas = $row['fakultas'];
		                    $jenis_kelamin = $row['jenis_kelamin'];
		                    
		        ?>
		            <tr>
		                <td><?php echo $no++; ?></td>
		                <td><?php echo $nim; ?></td>
		                <td><?php echo $nama_mahasiswa; ?></td>
		                <td><?php echo $alamat; ?></td>
		                <td><?php echo $fakultas; ?></td>
		                <td><?php echo $jenis_kelamin; ?></td>

		            </tr>
		        <?php } } else { ?> 
		            <tr>
		                <td colspan='7'>Tidak ada data ditemukan</td>
		            </tr>
		        <?php } ?>
		    </tbody>
		</table>
		
    </div>
</body>
</html>