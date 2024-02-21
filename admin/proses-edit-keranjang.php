<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['keranjang_id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$harga_barang=$_POST['harga_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$total_harga=$_POST['total_harga'];

$ubah=$koneksi->query("update keranjang2 set nama='$nama', alamat='$alamat', no_hp='$no_hp',nama_barang='$nama_barang',jenis_barang='$jenis_barang',harga_barang='$harga_barang',jumlah_barang='$jumlah_barang',total_harga='$total_harga', where keranjang_id='$id'");

if($ubah==true){

    header("location:tampil-keranjang.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>