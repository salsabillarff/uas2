
<?php include "header.php"; ?>
<?php

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
<!-- Awal Page -->
<div class="container">
    <!-- Awal baris -->
    <div class="row">
        <div class="col-md-8" style="margin-top:8rem;">
            <!-- Awal Kolom Pertama -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Form Keranjang</h2>
                    <h3><u><center> Belanja lah sesuai dengan budget. </center></u></h3>
                    <form action="proses-input-keranjang-user.php" method="post">
                        <table class="table table-hover">
                            <tr>
                                <td>Nama Lengkap
                                    <input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Rumah lengkap
                                    <textarea name="alamat" class="form-control input-md" placeholder="Isikan alamat rumah yang lengkap" required> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>No HP
                                    <input type="number" name="no_hp" class="form-control input-md" placeholder="Isikan No telepon yang Benar" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pilih_barang">Pilih Barang</label>
                                    <select name="pilih_barang" id="pilih_barang" class="form-control" required>
                                        <?php
                                        include "../lala-main/koneksi.php";
                                        $sql = $koneksi->query("select * from barang order by nama_barang ASC");
                                        while ($row = $sql->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_barang']; ?></option>
                                        <?php } ?>
                                    </select><br>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Barang
                                    <input type="text" id="nama_barang" name="nama_barang" class="form-control input-md" placeholder="masukkan Nama barang yang Benar" readonly required>
                                </td>
                            </tr>       
                            <tr>
                                <td>Jenis Barang
                                    <input type="text" id="jenis_barang" name="jenis_barang" class="form-control input-md" placeholder="masukkan Jenis barang yang Benar" readonly required>
                                </td>
                            </tr>     
                            <tr>
                                <td>Harga Barang
                                    <input type="text" id="harga_barang" name="harga_barang" class="form-control input-md" placeholder="masukkan Jumlah barang yang Benar" oninput="calculateTotal()" readonly required>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Barang
                                    <input type="number" id="jumlah_barang" name="jumlah_barang" class="form-control input-md" placeholder="Hitung total harga yang Benar" oninput="calculateTotal()" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Harga
                                    <input type="number" name="total_harga" id="total_harga" value="" class="form-control"  readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Masukkan Keranjang" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div><!-- Akhir Kolom Pertama -->
        <?php include "footer.php"; ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
        function calculateTotal() {
            var harga_barang = document.getElementById('harga_barang').value;
            var jumlah_barang = document.getElementById('jumlah_barang').value;
            var total_harga = harga_barang * jumlah_barang;
            document.getElementById('total_harga').value = total_harga;
        }
</script>

<script>
    // Tambahkan event onchange pada pilihBarang
    $(document).ready(function () {
        $('#pilih_barang').change(function () {
            // Ambil nilai id_barang yang dipilih
            var idBarang = $(this).val();
            // Buat AJAX request
            console.log(idBarang);
            console.log('Mengirim request ke server...');
            $.ajax({
                type: 'GET',
                url: 'get_harga_barang.php',
                data: { id: idBarang },
                success: function (response) {
                    console.log('Berhasil menerima respons dari server:', response);

                    // Set nilai harga_barang sesuai dengan data yang diambil dari server
                    $('#harga_barang').val(response.harga_barang);

                    // Set nilai jenis_barang
                    $('#jenis_barang').val(response.jenis_barang);
                    
                    // Set nilai jenis_barang
                    $('#nama_barang').val(response.nama_barang);                    
                    
                },
                error: function () {
                    console.log('Terjadi kesalahan dalam mengambil data harga barang.');
                    alert('Terjadi kesalahan dalam mengambil data harga barang.');
                }
            });
        });
    });
</script>




