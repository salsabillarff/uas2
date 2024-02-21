<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Barang</h1>
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
</div>


<?php include "footer.php";?>