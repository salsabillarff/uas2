    <?php include "header.php"; ?>
        <!-- Awal Page -->
        <div class="container">
        <!-- Awal baris -->
        <div class="row">
            <div class="col-md-8"><!-- Awal Kolom Pertama -->
            <div class="panel panel-default">
                <br>
                <div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-shopping-cart"></span> Detail Isi Keranjang</h2>
                    <table class="table table-bordered table-hover" id="data-table">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Nama Barang</th>
                             <th>Jenis Barang</th>
                            <th>Harga Barang</th>
                            <th>Jumlah Barang</th>
                            <th>total Harga</th> 
                            <a href ="keranjang.php">kembali </a>
                        </tr>
                        </thead>
                        <?php

                        include "koneksi.php";
                        $sql=$koneksi->query("select * from keranjang2 order by nama ASC");

                        while($row= $sql->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['nama']?></td>
                            <td><?php echo $row['alamat']?></td>
                            <td><?php echo $row['no_hp']?></td>
                            <td><?php echo $row['nama_barang']?></td>
                            <td><?php echo $row['jenis_barang']?></td>
                            <td><?php echo $row['harga_barang']?></td>
                            <td><?php echo $row['jumlah_barang']?></td>
                            <td><?php echo $row['total_harga']?></td>
                            <td><a href="detail-keranjang.php?id=<?php echo $row['keranjang_id']?>">
                </a></td>
                        </tr>
                        <?php } ?>
                        </table>
                </div>
      </div>
            </div><!-- Akhir Kolom Pertama -->
            <br>
            <div class="col-md-4"><!-- Awal kolom kedua -->
            <div class="panel panel-default">
                <div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>BARANG PALING LARIS</h2>
                <h4>MAHKOTA MOTIF</h4>
                <img src="image/F.jpeg" class="img-thumbnail img-responsive">
                <p> mahkota ini sering dipakai untuk ke party,ke acara formal dan juga skrg anak anak sering membuatnya untuk sekedar konten<br/><a class="btn btn-danger btn-xs" role="button">Info barang</a></p>
                </div>
      </div>
            </div><!-- Akhir Kolom Kedua -->
        </div><!-- Akhir Baris -->
        </div><!--  Akhir Page -->
        <?php include "footer.php";?>