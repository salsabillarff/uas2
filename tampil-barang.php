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


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>harga Barang</th>
                <th>Action</th>
                <th>
                    <a href="input-barang.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../lala-main/koneksi.php";
        $sql=$koneksi->query("select * from barang order by nama_barang ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama_barang']?></td>
                <td><?php echo $row['jenis_barang']?></td>
                <td><?php echo $row['harga_barang']?></td>
                <td>
                    <a href="edit-barang.php?id=<?php echo $row['id']?>">
                        <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                    </a>
                    <a href="hapus-barang.php?id=<?php echo $row['id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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