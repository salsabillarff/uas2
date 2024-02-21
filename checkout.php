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
        <!-- Awal Page -->
        <div class="container">
        <!-- Awal baris -->
        <div class="row">
            <div class="col-md-12" style="margin-top:8rem;"><!-- Awal Kolom Pertama -->
            <div class="panel panel-default">
                <br>
                <div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-shopping-cart"></span> Data Isi Checkout</h2>
                    
                    <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                            <div class="alert alert-success">
                            Penyimpanan Berhasil!
                            </div>
                    <?php

                    }

                    ?>


                    <?php 

                    if(@$_GET['pesan']=="hapusBerhasil"){

                    ?>
                            <div class="alert alert-success">
                            Data Berhasil Dihapus!
                            </div>
                    <?php

                    }

                    ?>

                    <?php 

                    if(@$_GET['pesan']=="editBerhasil"){

                    ?>
                            <div class="alert alert-success">
                            Perubahan Berhasil!
                            </div>
                    <?php

                    }

                    ?>                    
                    
                    <table class="table table-bordered table-hover" id="data-table">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Nama Barang</th>
                            <th></th>
                        </tr>
                        </thead>
                        <?php

                        include "koneksi.php";
                        $sql=$koneksi->query("select * from checkout order by created_date DESC");

                        while($row= $sql->fetch_assoc()){
                            
                                echo '<div class="modal fade" id="detailKeranjangModal_' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                      <h4 class="modal-title" id="detailModalLabel">Detail Keranjang: ' . htmlspecialchars($row['nama']) . '</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                      <p><strong>Nama:</strong> ' . htmlspecialchars($row['nama']) . '</p>
                                                      <p><strong>Alamat:</strong> ' . htmlspecialchars($row['alamat']) . '</p>
                                                      <p><strong>No HP:</strong> ' . htmlspecialchars($row['no_hp']) . '</p>   
                                                      </br>
                                                      <p><strong>Nama Barang:</strong> ' . htmlspecialchars($row['nama_barang']) . '</p>       
                                                      <p><strong>Jenis Barang:</strong> ' . htmlspecialchars($row['jenis_barang']) . '</p> 
                                                      <p><strong>Harga Barang:</strong> Rp.' . number_format($row['harga_barang'], 2, ',', '.') . '</p>
                                                      <p><strong>Jumlah Barang:</strong> ' . htmlspecialchars($row['jumlah_barang']) . '</p>     
                                                      <p><strong>Total Harga:</strong> Rp.' . number_format($row['total_harga'], 2, ',', '.') . '</p>                                               
                                                      <p><strong>Pembayaran:</strong> Rp.' . number_format($row['pembayaran'], 2, ',', '.') . '</p> 
                                                      <p><strong>Kembalian:</strong> Rp.' . number_format($row['kembali_pembayaran'], 2, ',', '.') . '</p> 
                                                      </br>
                                                      <p><strong>Dibuat Pada:</strong> ' . htmlspecialchars($row['created_date']) . '</p>   
                                                      </br>                                                      
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                  </div>
                                              </div>
                                          </div>
                                      </div>';                            
                            
                            
                        ?>
                        <tr>
                            <td><?php echo $row['nama']?></td>
                            <td><?php echo $row['alamat']?></td>
                            <td><?php echo $row['no_hp']?></td>
                            <td><?php echo $row['nama_barang']?></td>
                            <td>                         
                                <a data-toggle="modal" data-target="#detailKeranjangModal_<?php echo $row['id']?>">
                                    <button class="btn btn-xs btn-info glyphicon glyphicon-info-sign"></button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                        </table>
                </div>
      </div>
            </div><!-- Akhir Kolom Pertama -->
            <br>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row" style="padding:2rem;">
                            <h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span> BARANG PALING LARIS</h2>                    

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
        </div><!-- Akhir Baris -->
        </div><!--  Akhir Page -->
        
        </div><!-- Akhir Baris -->
        </div><!--  Akhir Page -->
        <?php include "footer.php";?>