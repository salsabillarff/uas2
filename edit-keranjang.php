<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
  }

  // Check if the form is submitted
  if (isset($_POST['kirim'])) {
    // Get values from the form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];

    // Calculate total_harga
    $total_harga = $harga_barang * $jumlah_barang;

    // Update the $_POST array with the calculated total_harga
    $_POST['total_harga'] = $total_harga;
  }

?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-keranjang.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../lala-main/koneksi.php";
                $tampil=$koneksi->query("select * from keranjang2 where keranjang_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group" style="margin-top:8rem;" hidden>
                        <label for="nama">ID</label>
                        <input type="text" name="keranjang_id" value="<?php echo $row['keranjang_id']?>" class="form-control">
                    </div>                    
                    
                    <div class="form-group" style="margin-top:8rem;">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="number" name="harga_barang" id="harga_barang" value="<?php echo $row['harga_barang']?>" class="form-control" oninput="calculateTotal()">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" id="jumlah_barang" value="<?php echo $row['jumlah_barang']?>" class="form-control" oninput="calculateTotal()">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">Total Harga</label>
                        <input type="number" name="total_harga" id="total_harga" value="<?php echo $row['total_harga']?>" class="form-control" readonly>
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <script>
        function calculateTotal() {
            var harga_barang = document.getElementById('harga_barang').value;
            var jumlah_barang = document.getElementById('jumlah_barang').value;
            var total_harga = harga_barang * jumlah_barang;
            document.getElementById('total_harga').value = total_harga;
        }
    </script>
<?php include "footer.php";?>