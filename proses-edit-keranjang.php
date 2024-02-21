<?php
session_start();
if (empty($_SESSION['user_id'])){
    header("location:../lala-main/login.php");
    exit(); // Tambahkan exit() setelah header untuk memastikan tidak ada kode ekstra yang dijalankan.
}

$id = $_POST['keranjang_id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$total_harga = $_POST['total_harga'];

include "../lala-main/koneksi.php";

// Gunakan parameterized queries
$ubah = $koneksi->prepare("UPDATE keranjang2 SET nama=?, alamat=?, no_hp=?, nama_barang=?, jenis_barang=?, harga_barang=?, jumlah_barang=?, total_harga=? WHERE keranjang_id=?");
$ubah->bind_param("ssssssssi", $nama, $alamat, $no_hp, $nama_barang, $jenis_barang, $harga_barang, $jumlah_barang, $total_harga, $id);
$ubah->execute();

if ($ubah->affected_rows > 0) {
    header("location:tampil-keranjang.php?pesan=editBerhasil");
} else {
    echo "Error: " . $koneksi->error;
}

// Tutup statement dan koneksi
$ubah->close();
$koneksi->close();
?>
