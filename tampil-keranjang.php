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
        <h1>Data Kerajang</h1>
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


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>ALamat</th>
                <th>No Hp</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>harga Barang</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Action</th>
                <th>
                    <a href="input-keranjang.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../lala-main/koneksi.php";
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
                <td>
                    <a href="edit-keranjang.php?id=<?php echo $row['keranjang_id']?>">
                        <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                    </a>
                    <a href="hapus-keranjang.php?id=<?php echo $row['keranjang_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                    </a>                    
                    
                </td>



            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>