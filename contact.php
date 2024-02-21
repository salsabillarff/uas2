<?php include "header.php"; ?>
    <br>
        <!-- Awal Page -->
        <div class="container">
        <!-- Awal baris -->
        <div class="row">
            <div class="col-md-8"><!-- Awal Kolom Pertama -->
            <div class="panel panel-default">
                <div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Kritik dan saran</h2>
                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, pesan anda sudah terkirim!
                                    </div>
                    <?php

                    }

                    ?>
                    <form action="proses-komentar.php" method="post">
                        <table class="table table-hover">
                            <tr>
                                <td>Nama Lengkap
                                <input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Email
                                <input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Pesan
                                <textarea name="pesan" class="form-control input-md" required> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
      </div>
            </div><!-- Akhir Kolom Pertama -->
            
            
            <div class="col-md-4"><!-- Awal kolom kedua -->
            <div class="panel panel-default">
                <div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>BARANG PALING LARIS</h2>
                <h4>MAHKOTA MOTIF</h4>
                <img src="image/F.jpeg" class="img-thumbnail img-responsive">
                <p> mahkota ini sering dipakai untuk ke party,ke acara formal dan juga skrg anak anak sering membuatnya untuk sekedar konten<br/><a href="aksesoris.php" a class="btn btn-danger btn-xs" role="button">Info barang</a></p>
                </div>
      </div>
            </div><!-- Akhir Kolom Kedua -->
        </div><!-- Akhir Baris -->
        </div><!--  Akhir Page -->
        
<?php include "footer.php"; ?>