<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$total_harga = $_POST['total_harga'];

// Pastikan Anda sudah mengganti nama database, username, dan password sesuai dengan konfigurasi Anda
include "../lala-main/koneksi.php";

// Gunakan parameterized queries
$stmt = $koneksi->prepare("INSERT INTO keranjang2 (nama, alamat, no_hp, nama_barang, jenis_barang, harga_barang, jumlah_barang, total_harga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $nama, $alamat, $no_hp, $nama_barang, $jenis_barang, $harga_barang, $jumlah_barang, $total_harga);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("location:keranjang.php?pesan=inputBerhasil");
} else {
    echo "Error: " . $koneksi->error;
}

// Tutup statement dan koneksi
$stmt->close();
$koneksi->close();
?>
