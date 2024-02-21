<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Website Belanja ShV</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/styles.css" rel="stylesheet">
		<style>
      body {
        padding-top: 60px; 
      }
		</style>
  </head>
  <body>
  <style>
     {margin:0; padding:0;}
     
    body {
     background-color:#ffB6C1;
     font-family:butler, sans-serif;
     color:#000;
    }

    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

     ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: #FFF0F5;
     padding: 0 20px;
     list-style: none;
     position: relative;
     display: inline-table;
     width: 100%;
    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#000;
    }

    nav ul li:hover a{
     color:#000;
    }

    nav ul li a{
     display: block;
     padding: 25px;
     color: #000;
     text-decoration: none;
    }

    nav ul ul{
     background: #FFF05F;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #FF69B4;
    }

    nav ul ul li a:hover{
     background-color: #ADFF2F;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
    </style>
	
  <br>
						<center> <B> <marquee bgcolor="blue" direction="right" height="50">SELAMAT DATANG DI ShV SHOP</marquee>  </B> </center>
							<center> <B> <marquee bgcolor="cyan" direction="left" height="50">SELAMAT DATANG DI ShV SHOP</marquee>  </B> </center>
<br>
<!-- Awal script Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="scrollspy">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="uas1.php">WEBSITE BELANJA PALING MURAH</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
							<a href="uas1.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
						</li>
            <li>
							<a href="about.php"><span class="glyphicon glyphicon-user"></span> About</a>
						</li>
            <li>
							<a href="contact.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us</a>
						</li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> BARANG YG DIJUAL <span class="caret"></span>
						</a>
							<ul class="dropdown-menu">
						<li> <a href="taswanita.php"> <span class="glyphicon glyphicon-bag"> </span> TAS WANITA</a></li> 
						<li> <a href="aksesoris.php"> <span class="glyphicon glyphicon-bag"> </span> AKSESORIS</a></li> 
						<li> <a href="tassekolah.php"> <span class="glyphicon glyphicon-bag"> </span> TAS SEKOLAH</a></li> 
							</ul>
						</li>
						<li class="item">
							<a href="koleksi.php"><span class="glyphicon glyphicon-picture"></span> koleksi </a>
						</li>
						<li class="item">
                          <a href="keranjang.php"><span class="glyphicon glyphicon-shopping-cart"></span> keranjang </a>
                        </li>
						<li class="item">
                          <a href="checkout.php"><span class="glyphicon glyphicon-check"></span> List Check Out </a>
                        </li>           
              
            <li>
							<a href="login.php"><span class="glyphicon glyphicon-lock"></span> Login</a>
						</li>
					</ul>
				</nav><!-- Akhir script Navbar -->
				
		<!-- Awal script Slider/ Carousel -->
		<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
			<!-- Awal script Slider pertama -->
        <div class="item active">
          <center> <img src="image/D.jpeg" width="500px"  alt="Berisi keterangan gambar"> </center> 
          <div class="carousel-caption">
           <h1>Website belanja ShV</h1>
            <h4>MURAH TAPI GA MURAHAN</h4>
            <a href=" form.php" class="btn btn-danger"> <span class="glyphicon glyphicon-shopping-cart"> MASUKKAN KERANJANG</a>
          </div>
        </div><!-- Akhir script Slider pertama -->
				<!-- Awal script Slider kedua -->
        <div class="item">
        <center>  <img src="image/A.jpeg" width="500px" alt="Berisi keterangan gambar"> </center>
          <div class="carousel-caption">
            <h1>Website belanja ShV</h1>
            <h4>MURAH TAPI GA MURAHAN</h4>
            <a href="form.php" class="btn btn-danger"> <span class="glyphicon glyphicon-shopping-cart"> MASUKKAN KERANJANG</a>
          </div>
        </div><!-- Akhir script Slider kedua -->
				<!-- Awal script Slider ketiga -->
        <div class="item">
        <center>  <img src="image/005g.png" width="500px" alt="Berisi keterangan gambar"> </center>
          <div class="carousel-caption">
            <h1>Website belanja ShV</h1>
            <h4>MURAH TAPI GA MURAHAN</h4>
            <a href="form.php" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"> MASUKKAN KERANJANG</a>
          </div>
        </div><!-- Akhir script Slider ketiga -->
    </div>
		<!-- Awal script Button Geser Kiri dan Kanan -->
    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
		
    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a><!-- Akhir script Button Geser Kiri dan Kanan -->
		
    </div><!-- Akhir script Slider/Carousel -->
		
		  <div class="row">
          <div class="col-md-12" style="margin-top:8rem;">
          <div class="panel panel-default">
				<div class="panel-body"> 
				<h2 style="text-muted"><span class="glyphicon glyphicon-certificate"></span> 
				CONTOH HIGHLIGHT BARANG</h2>
				<p>INI ADALAH BEBERAPA CONTOH BARANG YG SAYA JUAL,JIKA TERTARIK LANGSUNG DI KLIK AJA YAAA GES</p>
                <div class="row">
                    <?php
                    include "../lala-main/koneksi.php";

                    // Assuming you have a database connection, perform a query to get the data
                    $query = "SELECT * FROM barang ORDER BY nama_barang DESC LIMIT 3";
                    $result = mysqli_query($koneksi, $query);

                    if (!$result) {
                        die('Query Error: ' . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                        $gambar_barang = $row['gambar_barang'];
                        $harga_barang = $row['harga_barang'];
                        $nama_barang = $row['nama_barang'];
                        $jenis_barang = $row['jenis_barang'];

                        echo '<div class="col-md-4">
                                  <h3>' . htmlspecialchars($nama_barang) . '</h3>
                                  <img src="image/' . htmlspecialchars($gambar_barang) . '" class="img-thumbnail img-responsive" width="300" height="300">
                                  <p><B> Rp.' . number_format($harga_barang, 2, ',', '.') . '</B> <br/>
                                  <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailModal_' . $row['id'] . '">
                                      Detail Barang
                                  </button>
                                  <a href="form.php" a class="btn btn-warning btn-xs" role="button">
                                      <span class="glyphicon glyphicon-shopping-cart"> MASUKKAN KERANJANG </span>
                                  </a>
                              </div>';

                        // Modal for each product
                        echo '<div class="modal fade" id="detailModal_' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                              <h4 class="modal-title" id="detailModalLabel">Detail Barang: ' . htmlspecialchars($nama_barang) . '</h4>
                                          </div>
                                          <div class="modal-body">
                                              <p><strong>Jenis Barang:</strong> ' . htmlspecialchars($jenis_barang) . '</p>
                                              <p><strong>Harga Barang:</strong> Rp.' . number_format($harga_barang, 2, ',', '.') . '</p>
                                              <p><strong>Gambar Barang:</strong> <img src="image/' . htmlspecialchars($gambar_barang) . '" class="img-thumbnail" width="300" height="300"></p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>';
                    }
                    ?>
                </div>

                    </div>

        </div>
        <div class="row">
          <div class="panel panel-default">
        <div class="panel-body"> 
        <h2 style="text-muted"><span class="glyphicon glyphicon-certificate"></span> 
        LANJUT BARANGNYA </h2>
                <div class="row">
                    <?php
                    include "../lala-main/koneksi.php";

                    // Assuming you have a database connection, perform a query to get the data
                    $query = "SELECT * FROM barang ORDER BY nama_barang DESC";
                    $result = mysqli_query($koneksi, $query);

                    if (!$result) {
                        die('Query Error: ' . mysqli_error($connection));
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                        $gambar_barang = $row['gambar_barang'];
                        $harga_barang = $row['harga_barang'];
                        $nama_barang = $row['nama_barang'];
                        $jenis_barang = $row['jenis_barang'];

                        echo '<div class="col-md-4">
                                  <h3>' . htmlspecialchars($nama_barang) . '</h3>
                                  <img src="image/' . htmlspecialchars($gambar_barang) . '" class="img-thumbnail img-responsive" width="300" height="300">
                                  <p><B> Rp.' . number_format($harga_barang, 2, ',', '.') . '</B> <br/>
                                  <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailModal_' . $row['id'] . '">
                                      Detail Barang
                                  </button>
                                  <a href="form.php" a class="btn btn-warning btn-xs" role="button">
                                      <span class="glyphicon glyphicon-shopping-cart"> MASUKKAN KERANJANG </span>
                                  </a>
                              </div>';

                        // Modal for each product
                        echo '<div class="modal fade" id="detailModal_' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                              <h4 class="modal-title" id="detailModalLabel">Detail Barang: ' . htmlspecialchars($nama_barang) . '</h4>
                                          </div>
                                          <div class="modal-body">
                                              <p><strong>Jenis Barang:</strong> ' . htmlspecialchars($jenis_barang) . '</p>
                                              <p><strong>Harga Barang:</strong> Rp.' . number_format($harga_barang, 2, ',', '.') . '</p>
                                              <p><strong>Gambar Barang:</strong> <img src="image/' . htmlspecialchars($gambar_barang) . '" class="img-thumbnail" width="300" height="300"></p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>';
                    }
                    ?>
                </div>

    </div><!-- Akhir Panel -->
    </div><!--  Akhir Page -->
    
  <!-- FOOTER -->
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
      <h3><span class="glyphicon glyphicon-bullhorn"></span> Berita Terkini</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="#">tas gucci yg dipakai jenni bp 2023</a></li>
          <li class="list-group-item"><a href="#">2021 LV merupakan produk paling laris di website luar negri</a></li>
          <li class="list-group-item"><a href="#">apakah nagita slavina memakai barang original?</a></li>
        </ul>
        
      </div>
      <div class="col-md-4">
      <h3><span class="glyphicon glyphicon-info-sign"></span> info menarik</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="#">bagaimana cara mendapatkan diskon?</a></li>
          <li class="list-group-item"><a href="#">apakah yg harus kita lakukan ketika mendapatkan barang palsu? </a></li>
          <li class="list-group-item"><a href="#">siapakah penemu barang barang branded?</a></li>
        </ul>
        
      </div>
      <div class="col-md-4">
      <h3><span class="glyphicon glyphicon-link"></span>selengkapnya</h3>
        <ul class="list-group">
          <li class="list-group-item"><a href="#">TAS </a></li>
          <li class="list-group-item"><a href="#">TAS SEKOLAH</a></li>
          <li class="list-group-item"><a href="#">CINCIN DAN KALUNG</a></li>
          <li class="list-group-item"><a href="#">MAHKOTA</a></li>
        </ul>
        
      </div>
    <div class="row">
      <div class="col-md-12">
        <center>Copyright &copy 2023 Website belanjan ShV </span> by ShV<br/>
        <a href="#">Home </a> | <a href="#">About Us </a> | <a href="#">Contact Us </a> | <a href="#">Login </a><br/><br/>
        </center>
      </div>
      </div>
    </div><!-- Akhir FOOTER -->
  
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/dataTables.bootstrap.min.js"></script>
  <script src="bootstrap/js/jquery.dataTables.js"></script>
  <script src="bootstrap/js/scripts.js"></script>
  </body>
</html>