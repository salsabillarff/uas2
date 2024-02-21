<? php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$harga_barang=$_POST['harga_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$total_harga=$_POST['total_harga'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into keranjang2(nama,alamat,no_hp,nama_barang,jenis_barang,harga_barang,jumlah_barang,total_harga) 
                        values ('$nama','$alamat','$no_hp','$nama_barang','$jenis_barang','$harga_barang','$jumlah_barang','$total_harga',)");

if($simpan==true){

    header("location:tampil-keranjang.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>